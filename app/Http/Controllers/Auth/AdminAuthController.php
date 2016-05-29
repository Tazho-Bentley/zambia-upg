<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Routing\Controller;

class AdminAuthController extends controller{

    public function authenticate(){
        if(Auth::attempt([
            'username'=>'username',
            'password'=>'password'
        ]))
        {
            return redirect()->intended('admin.admindashboard');
        }
    }
}