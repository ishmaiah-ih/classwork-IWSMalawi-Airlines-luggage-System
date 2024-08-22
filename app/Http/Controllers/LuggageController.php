<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\LuggageItem;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class LuggageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required|string',
            'first_name' => 'required|string',
            'email' => 'required|email|unique:customers,email',
            'phone_number' => 'required|unique:customers,phone_number',
            'ticket_number' => 'required|min:6|max:6|unique:customers,ticket_number',
            'departure_point' => 'required',
            'destination' => 'required',
        ]);

        $customer = Customer::create($request->all());

        foreach ($request->input('items', []) as $item) {
            LuggageItem::create([
                'customer_id' => $customer->id,
                'luggage_name' => $item['luggage_name'],
                'char_1' => $item['char_1'],
                'char_2' => $item['char_2'],
                'char_3' => $item['char_3'],
            ]);
        }

        // Prepare the QR code data as a plain text string
        $qrCodeData = "Report Generated\n\nSurname: {$customer->surname}\n"
            . "First Name: {$customer->first_name}\n"
            . "Email: {$customer->email}\n"
            . "Phone Number: {$customer->phone_number}\n"
            . "Ticket Number: {$customer->ticket_number}\n"
            . "Departure Point: {$customer->departure_point}\n"
            . "Destination: {$customer->destination}\n";

        foreach ($customer->luggageItems as $index => $item) {
            $qrCodeData .= "Luggage Item " . ($index + 1) . ":\n"
                . "  Name: {$item->luggage_name}\n"
                . "  Characteristic 1: {$item->char_1}\n"
                . "  Characteristic 2: {$item->char_2}\n"
                . "  Characteristic 3: {$item->char_3}\n";
        }

        // Generate the QR code with the formatted text
        $qrCode = QrCode::format('svg')->size(300)->generate($qrCodeData);

        $fileName = 'qr_code_' . $customer->id . '.svg';
        $path = 'public/qr_codes/' . $fileName;

        if (!Storage::exists('public/qr_codes')) {
            Storage::makeDirectory('public/qr_codes');
        }

        Storage::put($path, $qrCode);

        $customer->qrcode_path = 'storage/qr_codes/' . $fileName;
        $customer->save();

        return redirect()->route('luggage.show', ['customer' => $customer->id])->with('success', 'Customer and luggage details have been saved.');
    }


    public function show($id)
    {
     // Retrieve the customer with their associated luggage items
        $customer = Customer::with('luggageItems')->findOrFail($id);
        $luggageItems = $customer->luggageItems;

        return view('show-luggage', compact('customer', 'luggageItems'));
    }



    public function downloadPdf(Customer $customer)
    {
        $luggageItems = $customer->luggageItems;

        // Generate a filename based on the customer's first and last names
        $filename = $customer->first_name . '_' . $customer->surname . '_customer_luggage_details.pdf';

        $pdf = Pdf::loadView('pdf.luggage-details', compact('customer', 'luggageItems'));

        return $pdf->download($filename);
    }


}
