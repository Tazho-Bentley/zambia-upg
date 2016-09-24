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
     * Create a new payment method update instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        //Update Payment Methods
        $id = \Illuminate\Support\Facades\Auth::User()->id;
        $companyID = DB::table('company_informations')->where('userID', $id)->value('id');
        $company_info = CompanyInformation::findorfail($companyID);
        $request = array_except($request, ['_token']);
        DB::table('company_informations')
            ->where('id', $companyID)
            ->update([
                'mtn'=> 0,
                'airtel'=>0,
                'cardservices'=>0,
                'zoona'=>0,
                'xapit'=> 0,
            ]);
        $company_info->where('id', $companyID)->update($request->all());
        return redirect()->back()->with('success','Payment Methods Updated');;
    }
}
