<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\CompanyInformation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class adminController extends Controller
{
    //More Security for admin Backend
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**Administator Dashboad
     *Display Client Data Statistics and Information
    */
    public function dashboard()
    {

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
        //get all company information and display it
        $info = CompanyInformation::all();

        return view('admin.clientinfo', compact('info'));
    }
    public function userManagement()
    {
        //manage all users
        $info = User::all();

        return view('admin.management', compact('info'));
    }

    public function completed()
    {
        //View all Transactions in the system
        $transactions = Transaction::all();
        return view('admin.completedtrans', compact('transactions'));
    }
    public function account()
    {
        //Account Details
        return view('admin.adminaccount');
    }
    public function client_profile()
    {
        //View Client Profile
       // $company = CompanyInformation::findOrFail($id);

        return view('admin.clientprofile',compact('company'));
    }
}
