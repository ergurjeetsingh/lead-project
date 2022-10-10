@extends('layouts.app', ['elementName' => 'leader-register'])

@section('content')    
<div class="content-wrapper">
<section class="create-leader-acc-section">
        <div class="container">
            <div class="row create-leader-acc-form">
                <div class="col-md-12">
                    <div class="text-center mb-4">
                        <h3>Just a few details to get started</h3>
                        <p>You're one step away from seeing our Web Design leads</p>
                    </div>
                    <div class="px-5 py-4 border rounded bg-white">
                        <form id="leader_reg" method="post" action="#">
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <h5 class="mb-3">Where would you like to see leads from?</h5>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="location1" name="location" onclick="remove_disabled()" class="custom-control-input" checked="">
                                    <label class="custom-control-label" for="location1">I serve customers within</label>
                                </div>
                                <select id="select_mile" name="leader_srange" class="custom-select custom-select-md mb-3">
                                    <option value="1">1 miles</option>
                                    <option value="5">5 miles</option>
                                    <option value="10">10 miles</option>
                                    <option value="20">20 miles</option>
                                    <option value="30">30 miles</option>
                                    <option value="50" selected="selected">50 miles</option>
                                </select>
                                <div class="form-group">
                                    <input id="zip_code" class="form-control pac-target-input" name="leader_pcode" placeholder="Enter Zip Code" required="required" autocomplete="off">
                                    <input id="zip_latitude" type="hidden">
                                    <input id="zip_longitude" type="hidden">
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="location2" name="location" onclick="disable_input()" value="I serve customers nationwide" class="custom-control-input">
                                    <label class="custom-control-label" for="location2">I serve customers nationwide</label>
                                </div>
                            </div>
                            <div class="tab">
                                <h5 class="mb-3">Tell us about your business</h5>
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="leader_name" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Enter name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="Company_name">Company Name</label>
                                    <input type="text" name="leader_cmpny" class="form-control" id="Company_name" aria-describedby="emailHelp" placeholder="Enter company name" required="">
                                    <small id="emailHelp" class="form-text text-muted">If you aren't a business or don't have this information, you can leave this blank</small>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" name="leader_email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" max="10" name="leader_phoneno" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter phone number" required="">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Service</label>
                                    <input type="text" max="10" name="leader_service" class="form-control" id="service" aria-describedby="emailHelp" placeholder="Enter your service" required="">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website (optional)</label>
                                    <input type="text" name="leader_web" class="form-control" id="website" aria-describedby="emailHelp" optional="true" placeholder="Enter website">
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div>
                                    <a href="https://leadwithusproject.com/leader" type="button" class="btn btn-lg btn-success">Cancel</a>
                                    <button type="submit" name="submit" class="btn btn-lg btn-success float-right">See leads</button>
                                </div>
                            </div>
                    </form></div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
