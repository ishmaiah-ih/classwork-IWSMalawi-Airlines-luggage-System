<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\Console\Command\Command as CommandAlias;

class RegenerateQRCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'qr:regenerate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerates QR codes for all customers with the new format';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $customers = Customer::with('luggageItems')->get();

        foreach ($customers as $customer) {
            $qrCodeData = "Report Generated @ " . now()->format('Y-m-d H:i:s') . "\n\n\n"
                . "Surname: {$customer->surname}\n\n"
                . "First Name: {$customer->first_name}\n\n"
                . "Email: {$customer->email}\n\n"
                . "Phone Number: {$customer->phone_number}\n\n"
                . "Ticket Number: {$customer->ticket_number}\n\n"
                . "Departure Point: {$customer->departure_point}\n\n"
                . "Destination: {$customer->destination}\n\n";

            foreach ($customer->luggageItems as $index => $item) {
                $qrCodeData .= "Luggage Item " . ($index + 1) . ":\n\n"
                    . "  Name: {$item->luggage_name}\n\n"
                    . "  Characteristic 1: {$item->char_1}\n\n"
                    . "  Characteristic 2: {$item->char_2}\n\n"
                    . "  Characteristic 3: {$item->char_3}\n\n";
            }

            $qrCode = QrCode::format('svg')->size(300)->generate($qrCodeData);

            $fileName = 'qr_code_' . $customer->id . '.svg';
            $path = 'public/qr_codes/' . $fileName;

            Storage::put($path, $qrCode);

            $customer->qrcode_path = 'storage/qr_codes/' . $fileName;
            $customer->save();

            $this->info("Regenerated QR code for customer ID: {$customer->id}");
        }

        return CommandAlias::SUCCESS;
    }


}

