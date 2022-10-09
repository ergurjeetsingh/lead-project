@extends('layouts.app', ['elementName' => 'forget-password'])

@section('content')    
<div class="content-wrapper">
<div class="container">
   <div class="row ">
      <div class="col-3"></div>
      <div class="col-6">
      <h2 class="text-center mb-4">Forget Password</h2>
         <div class="p-4 shadow rounded">         
		 <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="forgot_email" class="form-control" placeholder="Enter Email" required="">
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
