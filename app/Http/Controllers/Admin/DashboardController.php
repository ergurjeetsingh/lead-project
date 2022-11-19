<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
// use App\Mail\SendForgetPasswordLinkEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DashboardController extends Controller
{
    public function index( Request $request ){
        $data = array(
            'title' => "Admin Dashboard"
        );
        return view('admin.adminDashboard')->with($data);
    }

}
