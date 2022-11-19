@extends('layouts.adminApp', ['elementName' => 'admin-services'])

@section('content')    
<!-- Begin page -->

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row mb-2 mt-2">
                <div class="col-sm-4">
                    <a href="{{route('adminCreateService')}}" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i>Add New Service</a>
                </div>
                <div class="col-sm-8">
                    <div class="text-sm-end">
                        <div class="btn-group mb-3">
                            <button type="button" class="btn btn-primary">All</button>
                        </div>
                        <div class="btn-group mb-3 ms-1">
                            <button type="button" class="btn btn-light">Ongoing</button>
                            <button type="button" class="btn btn-light">Finished</button>
                        </div>
                        <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                            <button type="button" class="btn btn-secondary"><i class="ri-function-line"></i></button>
                        </div>
                        <div class="btn-group mb-3 d-none d-sm-inline-block">
                            <button type="button" class="btn btn-link text-muted"><i class="ri-list-check-2"></i></button>
                        </div>
                    </div>
                </div><!-- end col-->
            </div> 
            <!-- end row-->
            @include('layouts.alerts.errors')             
            @include('layouts.alerts.success')   
            <div class="row">
                <div class="col-12">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Service Category name</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $results as $key=>$value )
                            <tr>
                                <td>{{$value->service_name}}</td>
                                <td>{{$value->service_category}}</td>                                
                                <td>
                                    <span class="btn btn-warning">Questions</span>
                                    <a href="{{route('adminCreateService',['id'=>$value->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('adminDeleteService',['id'=>$value->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach                                                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
