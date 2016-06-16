<?php

namespace App\Http\Controllers;

use App\CompanyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class CompanyInfoController extends Controller
{
    //

    public function storeCompanyInfo(Request $request)
    {
        // Validate and store the company information
       /* $this->validate($request,[
            'company_name' => 'required|alpha',
            'company_address'=>'required|alpha_num',
            'company_telephone'=>'required|alpha_num'
        ]);*/

        $id = Auth::User()->id;

        DB::table('company_informations')
            ->where('userID', $id)->update([
                'c_name' => $request['company_name']
            ]);

        return redirect()->back();
    }
}
