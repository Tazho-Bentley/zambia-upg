<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    //All client functions will be done here
    public function dashboard()
    {
        return view('client.clientdashboard');
    }

    public function account()
    {
        return view('client.account');
    }

    public function paymethods()
    {
        return view('client.paymethods');
    }

    public function ontransactions()
    {
        return view('client.ontransactions');
    }

    public function pasttransactions()
    {
        return view('client.pasttransactions');
    }
}
