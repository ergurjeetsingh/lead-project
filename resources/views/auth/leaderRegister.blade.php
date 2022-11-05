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
                        @include('layouts.alerts.errors')             
                        @include('layouts.alerts.success')     
                        <form role="form" id="leader_reg" method="POST" action="{{ route('leaderRegister') }}">
                        @csrf
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <h5 class="mb-3">Where would you like to see leads from?</h5>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="location1" name="location" onclick="remove_disabled()" class="custom-control-input" checked="">
                                    <label class="custom-control-label" for="location1">I serve customers within</label>
                                </div>
                                <select id="select_mile" name="miles" class="custom-select custom-select-md mb-3">
                                    <option value="1">1 miles</option>
                                    <option value="5">5 miles</option>
                                    <option value="10">10 miles</option>
                                    <option value="20">20 miles</option>
                                    <option value="30">30 miles</option>
                                    <option value="50" selected="selected">50 miles</option>
                                </select>
                                <div class="form-group">
                                    <input id="zip_code"  name="zipcode" value="{{ old('zipcode') }}" class="form-control pac-target-input" placeholder="Enter Zip Code" required="required" autocomplete="off">
                                    <input id="zip_latitude" name="ziplat" type="hidden" value="{{ old('ziplat') }}">
                                    <input id="zip_longitude" name="ziplong" type="hidden" value="{{ old('ziplong') }}">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="location2" name="location" onclick="disable_input()" value="" class="custom-control-input">
                                    <label class="custom-control-label" for="location2">I serve customers nationwide</label>
                                </div>
                            </div>
                            <div class="tab">
                                <h5 class="mb-3">Tell us about your business</h5>
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control" id="company_name" aria-describedby="emailHelp" placeholder="Enter company name">
                                    <small id="emailHelp" class="form-text text-muted">If you aren't a business or don't have this information, you can leave this blank</small>
                                    @if ($errors->has('company_name'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('company_name') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label"> Password: </label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required />
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label"> Confirm Password: </label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required />
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" max="10" name="phone" value="{{ old('phone') }}" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter phone number" required>
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label for="service">Service</label>
                                    <input type="text" max="10" name="service" value="{{ old('service') }}" class="form-control" id="service" aria-describedby="emailHelp" placeholder="Enter your service">
                                    @if ($errors->has('service'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('service') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <label for="website">Website (optional)</label>
                                    <input type="text" name="website" value="{{ old('website') }}" class="form-control" id="website" aria-describedby="emailHelp" optional="true" placeholder="Enter website">
                                    @if ($errors->has('website'))
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>  
                                    @endif  
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div>
                                    <a href="{{route('dashboard')}}" type="button" class="btn btn-lg btn-success">Cancel</a>
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
