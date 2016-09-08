<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PaymentMethodController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id, $method, $clientID, $amount)
    {
        //check which payment method it is
       if($method == 1){
            $method = 'MTN';
            //check if client is registered with the payment method
            $client = DB::table('m_t_n_moneys')->where('phone', $clientID)->first();
            if($client == null){
                return response(array(
                    'error' => false,
                    'message'=> 'Transaction Unsuccesful',
                ),200);
            }else{
                    $current_balance = DB::table('m_t_n_moneys')->where('phone',$clientID)->value('balance');
                    $newbalance = $current_balance - $amount;
                    if($newbalance > 0){
                        DB::table('m_t_n_moneys')
                            ->where('phone', $clientID)
                            ->update(['balance' => $newbalance]);
                        DB::table('transactions')->insert(
                            ['item' => 'Item Name', 'amount' => $amount, 'date'=> Carbon::today(),
                                'payment_type'=>$method,
                                'merchantID'=> $id,
                            ]);
                        $response = response(array(
                            'error' => false,
                            'message'=> 'Transaction Completed Successfully',
                        ),200);
                    }else{
                        $response = response(array(
                            'error' => false,
                            'message'=> 'Transaction Unsuccessful',
                        ),200);
                    }
                    return $response;
            }
        }elseif($method == 2){
           $method = 'Airtel';
           //check if client is registered with the payment method
           $client = DB::table('airtel_moneys')->where('phone', $clientID)->first();
           if($client == null){
               return response(array(
                   'error' => false,
                   'message'=> 'Transaction Unsuccesful',
               ),200);
           }else{
               $current_balance = DB::table('airtel_moneys')->where('phone',$clientID)->value('balance');
               $newbalance = $current_balance - $amount;
               if($newbalance > 0){
                   DB::table('airtel_moneys')
                       ->where('phone', $clientID)
                       ->update(['balance' => $newbalance]);
                   DB::table('transactions')->insert(
                       ['item' => 'Item Name', 'amount' => $amount, 'date'=> Carbon::today(),
                           'payment_type'=>$method,
                           'merchantID'=> $id,
                       ]);
                   $response = response(array(
                       'error' => false,
                       'message'=> 'Transaction Completed Successfully',
                   ),200);
               }else{
                   $response = response(array(
                       'error' => false,
                       'message'=> 'Transaction Unsuccessful',
                   ),200);
               }
               return $response;
           }
        }
    }
}
