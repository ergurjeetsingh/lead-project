<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\Service;
use App\Models\User;

class ServiceController extends Controller
{
    public function index( Request $request ){
        $service = Service::orderby('created_at','desc')->get();
        $data = array(
            'title' => "Admin Services",
            'results' => $service,
        );
        return view('admin.services.index')->with($data);
    }

    public function createService( Request $request, $id = NULL ){

        if (!empty($id)) {
            $service = Service::findOrFail($id);
        }     

        if ($request->all()) {            
            
            Validator::make(
                $request->all(),
                [                                        
                    'service_name' => 'required|string|max:250',
                    'service_category' => 'required',                    
                ]
            )->validate();
            
            $data = array(
                'service_name' => $request->service_name,            
                'service_category' => $request->service_category,                            
            );                        

            if (!empty($id)) {                
                $service->update($data);
                return Redirect::to(route('adminServices'))->withsuccess('Service Updated Successfully.');
            }else{
                $service = Service::create($data);
                return Redirect::to( route('adminServices') )->withsuccess('Service Created successfully');
            }

        }else{
            if (!empty($id)) {                
                $data['result'] = $service;                
                $data['title'] = "Update Service";
            }else{                
                $data['title'] = "Create Service";
            }
            
            return view('admin.services.form')->with($data);
        }
    }

    public function deleteService( Request $request, $id = NULL ){
        Service::where('id', $id)->delete();        
        return Redirect::to(route('adminServices'))->withsuccess('Service Deleted Successfully.');
    }
}
