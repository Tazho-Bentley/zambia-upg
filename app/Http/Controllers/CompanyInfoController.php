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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCompanyInfo(Request $request)
    {
        // Validate and store the company information
        /*$this->validate($request,[
            'company_name' => 'required|alpha',
            'company_address'=>'required|alpha_num',
            'company_telephone'=>'required|alpha_num'
        ]);*/

        $id = Auth::User()->id;
        $exists = DB::table('company_informations')->where('userID', $id)->first();

        if(!$exists){
            // not there
            $res = DB::table('company_informations')->insert([
                ['c_name' => $request->company_name, 'c_address' => $request->company_address,
                    'c_telephone' => $request->company_telephone,'userID' => $id]
            ]);

            if($res)
                $request->session()->flash('flash_message', 'Company Information Added!');
            return redirect()->back();
        }
        else{
            $res = DB::table('company_informations')->where('userId', $id)
                    ->update([
                        'c_name' => $request->company_name, 'c_address' => $request->company_address,
                        'c_telephone' => $request->company_telephone]
                    );
            if($res)
                $request->session()->flash('flash_message', 'Company Information Updated!');
            return redirect()->back();
        }
    }
}
