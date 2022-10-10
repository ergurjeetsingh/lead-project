@extends('layouts.app', ['elementName' => 'forget-password'])

@section('content')    
<div class="content-wrapper">
<div class="container">
   <div class="row ">
      <div class="col-3"></div>
      <div class="col-6">
      <h2 class="text-center mb-4">Forget Password</h2>
      @include('layouts.alerts.errors')             
      @include('layouts.alerts.success')     
      <div class="p-4 shadow rounded">         
		<form role="form" method="POST" action="{{ route('forgetPassword') }}">
              @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Enter Email" required autofocus>
                        @if ($errors->has('email'))
                           <span class="invalid-feedback d-block" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                           </span>  
                        @endif  
                    </div>

                    <input type="submit" class="btn btn-success btn-block" value="Submit" name="forgot">
                </form>

         </div>
      </div>
      <div class="col-3"></div>
   </div>
</div>
</div>
@endsection
