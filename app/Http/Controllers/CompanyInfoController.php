<?php

namespace App\Http\Controllers;

use App\CompanyInformation;
use Illuminate\Http\Request;

use App\Http\Requests;

class CompanyInfoController extends Controller
{
    //

    public function storeCompanyInfo(Request $request)
    {
        // Validate and store the company information
        $this->validate($request,[
            'c_name' => 'required|alpha',
            'c_address'=>'required|alpha_num',
            'c_number'=>'required'
        ]);

        $company_info= new CompanyInformation();
        $company_info->c_name = $request['c_name'];
        $company_info->c_address = $request['c_address'];
        $company_info->c_number = $request['c_number'];
        $company_info->id =
        return view('');
    }
}
