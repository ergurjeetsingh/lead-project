<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    
    public function login( Request $request ){

        if ($request->all()) {            
            Validator::make(
                $request->all(),
                [                    
                    'email' => 'required|email|max:250',
                    'password' => 'required|max:250',
                ]
            )->validate();
            
            if ( \Auth::attempt( $request->only('email','password') ) ) {
                return Redirect::to( route('dashboard') );
            }
            
            return Redirect::to( route('customerLogin') )->witherrors('Login detials are not valid');            

        }else{
            $data = array(
                'title' => "Login"
            );
            return view('auth.customerLogin')->with($data);
        }
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
    
}
