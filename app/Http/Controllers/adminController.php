<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function client()
    {
        return view('admin.clientinfo');
    }
    public function ongoing()
    {
        return view('admin.ongoingtrans');
    }
    public function completed()
    {
        return view('admin.completedtrans');
    }
}
