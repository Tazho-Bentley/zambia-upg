<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function pay()
    {
        return view('pay');
    }

    public function about()
    {
        return view('about-upg');
    }

    public function feature()
    {
        return view('features');
    }

    public function home()
    {
        return view('home');
    }

    public function account()
    {
        return view('account');
    }

    public function paymethods()
    {
        return view('paymethods');
    }

    public function ontransactions()
    {
        return view('ontransactions');
    }

    public function pasttransactions()
    {
        return view('pasttransactions');
    }

    public function admin()
    {
        return view('admin');
    }
}
