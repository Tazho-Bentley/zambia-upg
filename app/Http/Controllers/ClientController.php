<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CompanyInformation;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }
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
        $id = \Illuminate\Support\Facades\Auth::User()->id;

        $c_name = DB::table('company_informations')->where('userID', $id)->value('c_name');
        $c_telephone = DB::table('company_informations')->where('userID', $id)->value('c_telephone');
        $c_address = DB::table('company_informations')->where('userID', $id)->value('c_address');
        $email = DB::table('users')->where('id', $id)->value('email');
        return view('client.paymethods',compact('c_telephone','c_address','c_name','email'));
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
