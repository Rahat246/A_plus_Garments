<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginform()
    {
        return view('Auth.loginform');
    }

    public function loginSubmit(Request $request){
        // dd($request->all());
        $credentials=$request->except('_token');
        $authentication = auth()->attempt($credentials);
        if($authentication){
            
            return to_route('admin.page');
        } else {
           
            return to_route('admin.login');
        }
    }


    public function logout()
    {
       
        Auth::logout();
        return to_route('admin.login');
    }

}
