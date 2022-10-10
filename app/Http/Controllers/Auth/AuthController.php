<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
// use App\Mail\SendForgetPasswordLinkEmail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
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

    public function register( Request $request ){

        if ($request->all()) {            
            Validator::make(
                $request->all(),
                [                    
                    'email' => 'required|max:200|email|unique:users,email',
                    'name' => 'required|string|max:250',
                    'password' => 'required',
                    'password_confirmation' => 'required|same:password',
                    'phone' => 'required|max:20',
                ]
            )->validate();
            
            $data = array(
                'email' => $request->email,            
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'role_id' => '2',
            );                        
    
            $user = User::create($data);

            return Redirect::to( route('customerLogin') )->withsuccess('Customer registered successfully');            

        }else{
            $data = array(
                'title' => "Register"
            );
            return view('auth.customerRegister')->with($data);
        }
    }

    public function forgetPassword( Request $request ){

        if ($request->all()) {            
            Validator::make(
                $request->all(),
                [                    
                    'email' => 'required|max:200|email|exists:users,email',
                ]
            )->validate();
                        
            // $user = User::create($data);

            return Redirect::to( route('forgetPassword') )->withsuccess('Sent a link on email, please check it.');            


        }else{
            $data = array(
                'title' => "Forget Password"
            );
            return view('auth.forgetPassword')->with($data);
        }
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
    
}
