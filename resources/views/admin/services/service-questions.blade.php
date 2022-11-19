@extends('layouts.adminApp', ['elementName' => 'service-questions'])

@push('css')
    <!-- Bootstrap Datepicker css -->
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Select2 Plugins css -->
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endpush

@section('content')    
<!-- Begin page -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Service</a></li>
                                <li class="breadcrumb-item active">Service Questions</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Service Questions</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                <form role="form" method="POST" action="">
                    @csrf
                                    <div class="mb-3">
                                        <label for="service_name" class="form-label">Service Questions</label>
                                        <input type="text" id="service_name" name="service_name" class="form-control" placeholder="Enter Service Question" value="{{ old('name', (isset($result)) ? $result->service_name:'') }}">
                                        @if ($errors->has('service_name'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('service_name') }}</strong>
                                        </span>  
                                        @endif             
                                    </div>
                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Select Type</label>
                                        <select class="form-control select2" data-toggle="select2">
                                            <option>Select</option>
                                            <option value="radio">Radio button</option>
                                            <option value="checkbox">Check Box</option>
                                        </select>        
                                    </div> 
                                    <div class="option">
                                    <div class="mb-3">
                                        <label for="question_option" class="form-label">Question Option</label>
                                        <input type="text" id="question_option" class="form-control">
                                    </div>
                                    </div>
                                    <div class="text-end"><button id="add_option" type="button" class="btn btn-success btn-sm">Add New Option</button></div>
                                                                       
                                    <button type="submit" class="btn btn-dark">Add Service Questions</button>
                                    </form>
                                </div> <!-- end col-->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
</div>

<script>
    jQuery(document).ready(function(){
        jQuery('#add_option').click(function(){
            jQuery('.option').append('<div class="mb-3"><label for="question_option" class="form-label">Question Option</label><input type="text" id="question_option" class="form-control"></div>');
        });
    });
</script>

@endsection
