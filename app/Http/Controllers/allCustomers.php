<?php

namespace App\Http\Controllers;

use App\Models\Transfers;
use App\Models\User;
use Illuminate\Http\Request;

class allCustomers extends Controller
{
    public function index()
    {
        $data = User::all();
        // dd($data);
        return view('allCustomers.index')->with('data', $data);
    }

    public function transfers()
    {
        $transfersData = Transfers::all();
        // dd($data);
        return view('allCustomers.transfers')->with('transfersData', $transfersData);
    }
}
