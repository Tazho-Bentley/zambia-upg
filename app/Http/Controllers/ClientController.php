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
        $temp = [];
        $company_info = CompanyInformation::get()->where('userID',$id)[0];
        $c_name = $company_info->c_name;
        $c_address = $company_info->c_address;
        $c_telephone = $company_info->c_telephone;
        $mtn = $company_info->mtn;
        $airtel = $company_info->airtel;
        $zoona = $company_info->zoona;
        $cardservices = $company_info->cardservices;
        $xapit = $company_info->xapit;
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
                    $payment_opt_all[]= '<input type="checkbox" name="mtn" value=1 checked> MTN Mobile Money';
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

    public function ontransactions()
    {
        return view('client.ontransactions');
    }

    public function pasttransactions()
    {
        return view('client.pasttransactions');
    }
}
