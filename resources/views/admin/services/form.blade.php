@extends('layouts.adminApp', ['elementName' => 'admin-services'])

@push('css')
    <!-- Bootstrap Datepicker css -->
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Select2 Plugins css -->
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">{{$title}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{$title}}</h4>
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
                                        <label for="service_name" class="form-label">Service Name</label>
                                        <input type="text" id="service_name" name="service_name" class="form-control" placeholder="Enter Service name" value="{{ old('name', (isset($result)) ? $result->service_name:'') }}">
                                        @if ($errors->has('service_name'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('service_name') }}</strong>
                                        </span>  
                                        @endif             
                                    </div>
                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Select Service Category</label>
                                        <select class="form-control select2" data-toggle="select2" name="service_category">
                                            <option value="">Select</option>
                                            <option value="Hard Labor Services" {{ ((old('service_category', (isset($result)) ? $result->service_category:'') ) == 'AZ')  ? 'selected':''  }} >Hard Labor Services</option>
                                            <option value="Events" {{ ((old('service_category', (isset($result)) ? $result->service_category:'') ) == 'CO')  ? 'selected':''  }}>Events</option>
                                            <option value="Business Services" {{ ((old('service_category', (isset($result)) ? $result->service_category:'') ) == 'ID')  ? 'selected':''  }}>Business Services</option>
                                            <option value="Tech" {{ ((old('service_category', (isset($result)) ? $result->service_category:'') ) == 'MT')  ? 'selected':''  }}>Tech</option>
                                            <option value="Health" {{ ((old('service_category', (isset($result)) ? $result->service_category:'') ) == 'NE')  ? 'selected':''  }}>Health</option>
                                            <option value="Education" {{ ((old('service_category', (isset($result)) ? $result->service_category:'') ) == 'NM')  ? 'selected':''  }}>Education</option>
                                        </select>        
                                        @if ($errors->has('service_category'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('service_category') }}</strong>
                                        </span>  
                                        @endif             
                                    </div>                                    
                                    <button type="submit" class="btn btn-dark">{{$title}}</button>
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

@endsection
