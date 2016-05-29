<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function getLogin(){
        return view('admin.login');
    }
    //public function postLogin(){
    public function postLogin(Request $request){
        $this->validate($request, [
            'username'=> 'required',
            'password'=>'required'
        ]);
        if(!Auth::attempt([
            'username'=>$request['username'],
            'password'=>$request['password']
        ])){
            return redirect()->back()->with(['fail'=>'Login Failed']);
        }
        return redirect()->route('admin.dashboard');

    }
    public function dashboard()
    {
        return view('admin.admindashboard');
    }
    public function client()
    {
        return view('admin.clientinfo');
    }
    public function ongoing()
    {
        return view('admin.ongoingtrans');
    }
    public function completed()
    {
        return view('admin.completedtrans');
    }
}
