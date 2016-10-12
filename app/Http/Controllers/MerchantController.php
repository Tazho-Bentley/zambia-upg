<?php
/**
*Class serves payment options requests from merchant website
 */
namespace App\Http\Controllers;

use App\Http\Requests;
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
            $selectedMtn ="MTN Money";
            $methods["MTN"] = $selectedMtn;
        }
        $airtel = DB::table('company_informations')->where('id', $id)->value('airtel');
        if($airtel == 1){
            $selectedAirtel = "Airtel Money";
            $methods["Airtel"] = $selectedAirtel;
        }
        $zoona = DB::table('company_informations')->where('id', $id)->value('zoona');
        if($zoona == 1){
            $selectedZoona = "Zoona";
            $methods["Zoona"] = $selectedZoona;
        }
        $cardservice = DB::table('company_informations')->where('id', $id)->value('cardservices');
        if($cardservice == 1){
            $selectedCard = "Visa";
            $methods["Card Service"] = $selectedCard;
        }
        $xapit = DB::table('company_informations')->where('id', $id)->value('xapit');
        if($xapit == 1){
            $selectedXapit = "Xapit";
            $methods["Xapit"] = $selectedXapit;
        }
        return response(array(
            'error' => false,
            'method'=>$methods,
        ),200);
    }
}
