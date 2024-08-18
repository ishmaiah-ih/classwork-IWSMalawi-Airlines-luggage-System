<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function adminCustomers()
    {
      return view('admin.customers');
    }
    public function adminCustomerAdd()
    {
      return view('admin.customer-add');
    }
}
