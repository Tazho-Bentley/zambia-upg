<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $id = \Illuminate\Support\Facades\Auth::User()->id;
        $transactions = DB::table('transactions')->count();
        $user_count = DB::table('users')->count();
        $merchant_count = DB::table('company_informations')->count();
        $total = DB::table('transactions')->sum('amount');
        $mtn_count = DB::table('transactions')->where(
            [
                ['payment_type', '=', 'MTN'],
            ]
        )->count();
        $airtel_count = DB::table('transactions')->where(
            [
                ['payment_type', '=', 'Airtel'],
            ]
        )->count();
        return view('admin.admindashboard',
            compact(
                'transactions', 'total','mtn_count','airtel_count','user_count','merchant_count'
            )
        );
    }
    public function client()
    {
        $info = CompanyInformation::all();

        return view('admin.clientinfo', compact('info'));
    }
    public function ongoing()
    {
        return view('admin.ongoingtrans');
    }
    public function completed()
    {
        $transactions = Transaction::all();
        return view('admin.completedtrans', compact('transactions'));
    }
    public function account()
    {
        return view('admin.adminaccount');
    }
    public function client_profile($id)
    {
        $company = CompanyInformation::findOrFail($id);

        return view('admin.clientprofile',compact('company'));
    }
}
