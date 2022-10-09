@extends('layouts.app', ['elementName' => 'customer-register'])

@section('content')    
<div class="content-wrapper">
<div class="container">
   <div class="row">
      <div class="col-12">
         <div>
            <form action="" method="post" class="pb-3">
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Full Name: </label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" value="" required="" />
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Email: </label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email" value="" required="" />
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Password: </label>
                  <input type="password" class="form-control" name="pass" placeholder="Enter Password" required="" />
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Confirm Password: </label>
                  <input type="password" class="form-control" name="con_pass" placeholder="Confirm Password" required="" />
               </div>
               <div class="form-group">
                  <label class="form-control-label font-weight-bold"> Phone No: </label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone No" value="" required="" />
               </div>
               <input type="submit" name="register" class="btn btn-success btn-block" value="Register Now" />
            </form>

         </div>
      </div>
   </div>
</div>
</div>
@endsection
