@extends('layouts.app', ['elementName' => 'customer-login'])

@section('content')    
<div class="content-wrapper">
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <h2 class="text-center">Login To Lead With Us</h2>
                <div class="box-login mt-4">
                    <h2 class="text-center mb-3 mt-3"><i class="fa fa-unlock-alt"></i></h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" name="customer_username" class="form-control" placeholder="Username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="customer_pswrd" class="form-control" placeholder="Password" id="pass" required>
                            <i class="fa fa-eye" id="show"></i>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-success btn-block" value="Login" required>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" data-toggle="modal" data-target="#register-modal">
                            <i class="fa fa-user-plus"></i> Sign Up
                        </a>
                        &nbsp; &nbsp; | &nbsp; &nbsp;
                        <a href="#" data-toggle="modal" data-target="#forgot-modal">
                            <i class="fa fa-meh-o"></i> Forgotten Password?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
