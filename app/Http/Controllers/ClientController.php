<?php

namespace App\Http\Controllers;

use App\Transaction;
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
        $id = \Illuminate\Support\Facades\Auth::User()->id;
        $transactions = DB::table('transactions')->where('merchantID', '=', $id)->count();
        $total = DB::table('transactions')->where('merchantID', '=', $id)->sum('amount');
        $mtn_count = DB::table('transactions')->where(
            [
                ['merchantID', '=', $id],
                ['payment_type', '=', 'MTN'],
            ]
        )->count();
        $airtel_count = DB::table('transactions')->where(
            [
                ['merchantID', '=', $id],
                ['payment_type', '=', 'Airtel'],
            ]
        )->count();
        return view('client.clientdashboard', compact('transactions', 'total','mtn_count','airtel_count'));
    }

    public function account()
    {
        return view('client.account');
    }

    public function paymethods()
    {
        $id = \Illuminate\Support\Facades\Auth::User()->id;
        $temp = [];
        //$company_info = CompanyInformation::get()->where('userID',$id);
        //$c_name = $company_info->get('c_name');
        $c_name = DB::table('company_informations')->where('userID', $id)->value('c_name');
       // $c_address = $company_info->get('c_address');
        $c_address = DB::table('company_informations')->where('userID', $id)->value('c_address');
        //$c_telephone = $company_info->get('c_telephone');
        $c_telephone = DB::table('company_informations')->where('userID', $id)->value('c_telephone');
        //$mtn = $company_info->get('mtn');
        $mtn = DB::table('company_informations')->where('userID', $id)->value('mtn');
        //$airtel = $company_info->get('airtel');
        $airtel = DB::table('company_informations')->where('userID', $id)->value('airtel');
        //$zoona = $company_info->get('zoona');
        $zoona = DB::table('company_informations')->where('userID', $id)->value('zoona');
        //$cardservices = $company_info->get('cardservices');
        $cardservices = DB::table('company_informations')->where('userID', $id)->value('cardservices');
        //$xapit = $company_info->get('xapit');
        $xapit = DB::table('company_informations')->where('userID', $id)->value('xapit');
        $temp = array('mtn'=>$mtn,'airtel'=>$airtel,'cardservices'=>$cardservices,'xapit'=>$xapit,'zoona'=>$zoona);

        $payment_opt = [];
        $payment_opt_all = [];
        foreach($temp as $payment_method=>$value)
        {
            if($value == 1){
                if($payment_method == 'mtn')
                    $payment_opt[]= '<il> MTN Mobile Money</il>';
                elseif($payment_method == 'airtel')
                    $payment_opt[]= '<il> Airtel Mobile Money</il>';
                elseif($payment_method == 'zoona')
                    $payment_opt[]= '<il> Zoona</il>';
                elseif($payment_method == 'xapit')
                    $payment_opt[]= '<il> Xapit</il>';
                elseif($payment_method == 'cardservices')
                    $payment_opt[]= '<il>Debit/Credit Card</il>';
            }
        }

        foreach($temp as $payment_method=>$value)
        {
            if($payment_method == 'mtn')
            {
                if($value == 1)
                    $payment_opt_all[]= '<input id="mtn" type="checkbox" name="mtn" value=1 checked> MTN Mobile Money';
                else
                    $payment_opt_all[]= '<input type="checkbox" name="mtn" value=1> MTN Mobile Money';
            }
            elseif($payment_method == 'airtel')
            {
                if($value == 1)
                    $payment_opt_all[]= '<input type="checkbox" name="airtel" value=1 checked> Airtel Mobile Money';
                else
                    $payment_opt_all[]= '<input type="checkbox" name="airtel" value=1> Airtel Mobile Money';
            }
            elseif($payment_method == 'zoona')
            {
                if($value == 1)
                    $payment_opt_all[]= '<input type="checkbox" name="zoona" value=1 checked> Zoona';
                else
                    $payment_opt_all[]= '<input type="checkbox" name="zoona" value=1> Zoona';
            }
            elseif($payment_method == 'xapit')
            {
                if($value == 1)
                    $payment_opt_all[]= '<input type="checkbox" name="xapit" value=1 checked> Xapit';
                else
                    $payment_opt_all[]= '<input type="checkbox" name="xapit" value=1> Xapit';
            }
            elseif($payment_method == 'cardservices')
            {
                if($value == 1)
                    $payment_opt_all[]= '<input type="checkbox" name="cardservices" value=1 checked> Debit/Credit Card';
                else
                    $payment_opt_all[]= '<input type="checkbox" name="cardservices" value=1> Debit/Credit Card';
            }
        }
        $email = DB::table('users')->where('id', $id)->value('email');

        return view('client.paymethods',compact('c_telephone','c_address','c_name','email','payment_opt','payment_opt_all'));
    }

    public function pasttransactions()
    {
        $id = \Illuminate\Support\Facades\Auth::User()->id;
        $transactions = DB::table('transactions')->where('merchantID', '=', $id)->get();
        return view('client.pasttransactions', compact('transactions'));
    }
}
