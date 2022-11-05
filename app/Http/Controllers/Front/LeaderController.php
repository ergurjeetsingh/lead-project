<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
// use App\Mail\SendForgetPasswordLinkEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LeaderController extends Controller
{
    public function index( Request $request ){
        $data = array(
            'title' => "Leader Dashboard"
        );
        return view('front.leaders.dashboardLeader')->with($data);
    }

}
