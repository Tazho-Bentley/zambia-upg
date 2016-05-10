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
}
