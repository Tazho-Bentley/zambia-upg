<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CompanyInformation;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;


class EditPaymentMethod extends Controller
{
    //
    /**
     * Create a new payment method instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        // Validate the request...
        $data = $request->all();
        $id = \Illuminate\Support\Facades\Auth::User()->id;
        $companyID = DB::table('company_informations')->where('userID', $id)->value('id');
        $company_info = CompanyInformation::findorfail($companyID);
        $request = array_except($request, ['_token']);
        $company_info->where('id', $companyID)->update($request->all());
        //$company_info->where('id', $companyID)->update($request->except(['_token']));
        /*([
            'mtn'=> $data['mtn'],
            'airtel'=>$data['airtel'],
            'cardservices'=>$data['cardservices'],
            'zoona'=>$data['zoona'],
            'xapit'=>$data['xapit']
        ]);*/
        return redirect()->back()->with('success','Payment Methods Updated');
    }
}
