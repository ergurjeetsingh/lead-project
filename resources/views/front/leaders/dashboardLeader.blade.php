@extends('layouts.app', ['elementName' => 'dashboard-leader'])

@section('content')    
<div class="content-wrapper" style="background-color: #f4f4f4;">
        <section>
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 mb-4">
                        <div class="welcome border p-4 rounded bg-white">
                            <h4>Good Afternoon </h4>
                            <p class="text-muted">
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="p-4 bg-white border rounded">
                            <div class="border-bottom pb-2">
                                <img src="">
                                <h3>leader name</h3>
                            </div>
                            <div class="row mt-2">
                                <div class="col-9">
                                    <p class="mt-1">Your profile is 50% complete</p>
                                </div>
                                <div class="col-3 text-right">
                                    <a class="btn btn-link d-block" href="#">Edit</a>
                                </div>
                                <div class="col-12">
                                    <div class="progress mb-3">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                                    </div>
                                    <div class="">
                                        Completing your profile is a great way to appeal to customers ·
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="py-3 border rounded bg-white">
                            <div class="border-bottom p-3">
                                <h4>Lead preferences</h4>
                            </div>
                            <div class="row p-3">
                                <div class="col-9">
                                    <h5>Services</h5>
                                </div>
                                <div class="col-3 text-right">
                                    <a href="#" class="btn btn-link">Edit</a>
                                </div>
                                <div class="col-12">
                                    <p>You'll receive leads in these categories</p>
                                    <div class="flex-row flex-wrap">
                                        <div class="d-inline-flex border rounded category-button mr-2">
                                            <a class="p-2" href="#">Service</a>
                                        </div>
                                        <!-- <div class="d-inline-flex border rounded category-button mr-2">
                                            <a class="p-2" href="#">Construction</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="p-3 border rounded bg-white">
                            <div class="row border-bottom p-3 mb-3">
                                <div class="col-9 pl-0">
                                    <h4>Lead</h4>
                                </div>
                                <div class="col-3 text-right pr-0">
                                    <a href="#" class="btn btn-link">View</a>
                                </div>
                            </div>
                            <div class="text-center border-bottom mb-3 p-3">
                                <h3 class="">0</h3>
                                <a href="#">View Leads</a>
                            </div>
                            <div>
                                <a href="site_url"><span class="text-dark mr-1">0</span>Unread leads</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-widgets">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget-1">
                            <h4>Help</h4>
                            <p class="text-center mb-0">Visit our <a href="#">help center</a> for tips & <br>advice.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget-2">
                            <h4>Email</h4>
                            <p class="text-center mb-0">Email us at <a href="#">info@leadwithus.com</a></p>
                            <p class="text-center mb-0"><a href="#">team@leadwithus.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget-3">
                            <h4>Call</h4>
                            <p class="text-center mb-0">Call <a href="#"></a><br>Mon-Fri 9am-8pm Eastern</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
