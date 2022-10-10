@extends('layouts.app', ['elementName' => 'customer-register'])

@section('content')    
<div class="content-wrapper">
<div class="container">
   <div class="row ">
      <div class="col-3"></div>
      <div class="col-6">
      <h2 class="text-center mb-4">Sign Up To Lead With Us</h2>
         <div class="p-4 shadow rounded">         
              @include('layouts.alerts.errors')             
              @include('layouts.alerts.success')     
              <form role="form" method="POST" action="{{ route('customerRegister') }}">
              @csrf
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Full Name: </label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" value="{{ old('name') }}" required autofocus />
                  @if ($errors->has('name'))
                     <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                     </span>  
                  @endif  
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Email: </label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}" required />
                  @if ($errors->has('email'))
                     <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                     </span>  
                  @endif  
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Password: </label>
                  <input type="password" class="form-control" name="password" placeholder="Enter Password" required />
                  @if ($errors->has('password'))
                     <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>  
                  @endif  
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Confirm Password: </label>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required />
                  @if ($errors->has('password_confirmation'))
                     <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                     </span>  
                  @endif  
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Phone No: </label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone No" value="{{ old('phone') }}" required />
                  @if ($errors->has('phone'))
                     <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                     </span>  
                  @endif  
               </div>
               <input type="submit" name="register" class="btn btn-success btn-block" value="Register Now" />
            </form>

         </div>
      </div>
      <div class="col-3"></div>
   </div>
</div>
</div>
@endsection
