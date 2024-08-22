<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Carbon\Carbon;

use App\Models\LuggageItem;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function main()
    {
       return view('welcome');
    }
    public function home(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('dashboard');
    }
    public function adminIndex(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $customers = Customer::count();
        $today = Carbon::now()->toDateString();
        $yesterday = Carbon::now()->subDay()->toDateString();

        // Get today's and yesterday's totals
        $totalCustomersToday = Customer::whereDate('created_at', $today)->count();
        $totalItemsToday = LuggageItem::whereDate('created_at', $today)->count();

        $totalCustomersYesterday = Customer::whereDate('created_at', $yesterday)->count();
        $totalItemsYesterday = LuggageItem::whereDate('created_at', $yesterday)->count();

        // Calculate percentage changes
        $customerChange = $this->calculatePercentageChange($totalCustomersYesterday, $totalCustomersToday);
        $itemChange = $this->calculatePercentageChange($totalItemsYesterday, $totalItemsToday);

        // Pass the data to the view
        return view('admin.index', [
            'totalCustomersToday' => $totalCustomersToday,
            'totalItemsToday' => $totalItemsToday,
            'customerChange' => $customerChange,
            'itemChange' => $itemChange,
            'customers' => $customers,
        ]);
    }

    private function calculatePercentageChange($previous, $current)
    {
        if ($previous == 0) {
            return $current > 0 ? '+100%' : '0%'; // Handle case when there were no items previously
        }

        $change = (($current - $previous) / $previous) * 100;
        return number_format($change, 2) . '%';
    }
    public  function adminLuggageList()
    {
        $luggageItems = LuggageItem::with('customer')->get();
       return view('admin.luggageList', compact('luggageItems'));
    }


    public function adminCustomerAdd()
    {
      return view('admin.customer-add');
    }

    public function adminCustomerCard()
    {
        $customers = Customer::with('luggageItems')->get();
        return view('admin.cardular', compact('customers'));
    }
    public function adminCustomers()
    {
        $customers = Customer::paginate(5);
//        $customers = Customer::all();
//        return view('admin.customers', compact('customers'));
        return view('admin.customers', [
            'customers' => $customers
        ]);
    }
//    search func
//    public function adminCustomerCardSearch(Request $request)
//    {
//        $search = $request->input('search');
//
//        $customers = Customer::when($search, function ($query, $search) {
//            $query->where('surname', 'like', "%$search%")
//                ->orWhere('ticket_number', 'like', "%$search%");
//        })->get();
//
//        return view('admin.cardular', compact('customers'));
//    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $customers = Customer::where('surname', 'like', "%{$query}%")
            ->orWhere('ticket_number', 'like', "%{$query}%")
            ->get();

        return view('admin.cards', compact('customers'));
    }
//    deleting customer
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $fullName = $customer->first_name . ' ' . $customer->surname;
        $customer->delete();

        return redirect()->route('admin.customers')->with('success', "Customer $fullName deleted successfully.");
    }

    public function adminCustomerShow($id) :string
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer-show', compact('customer'));
    }

}
