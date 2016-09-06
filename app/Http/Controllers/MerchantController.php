<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CompanyInformation;
use Illuminate\Support\Facades\DB;

class MerchantController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $methods =  [];
        $mtn = DB::table('company_informations')->where('id', $id)->value('mtn');
        if($mtn == 1){
            $methods["MTN"] = $mtn;
        }
        $airtel = DB::table('company_informations')->where('id', $id)->value('airtel');
        if($airtel == 1){
            $methods["Airtel"] = $airtel;
        }
        $zoona = DB::table('company_informations')->where('id', $id)->value('zoona');
        if($zoona == 1){
            $methods["Zoona"] = $zoona;
        }
        $cardservice = DB::table('company_informations')->where('id', $id)->value('cardservices');
        if($cardservice == 1){
            $methods["Card Service"] = $cardservice;
        }
        $xapit = DB::table('company_informations')->where('id', $id)->value('xapit');
        if($xapit == 1){
            $methods["Xapit"] = $xapit;
        }
        return response(array(
            'error' => false,
            'method'=>$methods,
        ),200);
    }

}
