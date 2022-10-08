<header class="border-bottom">
    <div class="topbar border-bottom" style="background-color: #f7f7f9;">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-6 col-sm-6 col-8">
                    <div class="pl-lg-3">
                        <p class="mb-0 mt-1"><i class="fa fa-envelope text-success mr-1" aria-hidden="true"></i><span>info@leadwithus.com</span></p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-4">
                    <div class="text-right pr-lg-4">
                        <a class="btn btn-link mr-2 text-dark" href="/customer-login">Login</a>

                        <a class="btn btn-success hidden-xs" href="#" role="button"><i class="fa fa-user-circle-o text-white" aria-hidden="true"></i> Join as a Leader</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- login modal starts-->

    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- login modal ends -->

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img class="desktop" src="{{('images/lead-logo.png')}}" width="210" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Product Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/faq">Faq's</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--All modals are here-->

<!-- Registration Modal starts -->

<div class="modal fade" id="register-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal-header Starts -->

                <i class="fa fa-user-plus"></i>

                <h5 class="modal-title">Register Account</h5>

                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>

            <!-- modal-header Ends -->

            <div class="modal-body">
                <!-- modal-body Starts -->

                <ul class="list-unstyled mb-0">
                    <li class="list-unstyled-item"></li>
                </ul>
            </div>

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

                <input type="hidden" class="form-control" name="referral" value="" />

                <input type="hidden" class="form-control" name="referral" value="" />

                <input type="submit" name="register" class="btn btn-success btn-block" value="Register Now" />
            </form>

            <div class="clearfix"></div>

            <div class="text-center mt-3 text-muted">
                <a href="#" class="text-success" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Already have an account? Log In.</a>
            </div>
        </div>

        <!-- modal-body Ends -->
    </div>
</div>

<!-- Forgot password starts -->

<div class="modal fade login" id="forgot-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Modal header starts -->

                <i class="fa fa-meh-o fa-log"></i>

                <h5 class="modal-title">Forgot Password</h5>

                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <!-- Modal header ends -->

            <div class="modal-body">
                <!-- Modal body starts -->

                <p class="text-muted text-center mb-2">
                    Enter your email to recieve a password reset link.
                </p>

                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="forgot_email" class="form-control" placeholder="Enter Email" required />
                    </div>

                    <input type="submit" class="btn btn-success btn-block" value="Submit" name="forgot" />
                </form>
            </div>

            <!-- Modal body ends -->
        </div>
    </div>
</div>

<!-- Forgot password ends -->

<!--  model View  start-->

<div class="modal fade" id="service1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--button clas="close" id="close_Service">&times;</button-->

            <form method="POST" action="#">
                <div id="loading_ajax" class="loader_ajax" style="display: none;">
                    <div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>

                    <div>Please Wait</div>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnclose">
                    <span aria-hidden="true">x</span>
                </button>

                <div class="error alert alert-danger" role="alert" style="display: none;"></div>

                <div class="con_tab">
                    <div class="tab tab0 active" data-row="1">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">Are you looking for movers to pack items into boxes?</p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Yes</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Yes" name="order_q1" /> <span class="checkmark"></span></p>
                        </div>
                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">No</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="No" name="order_q1" /> <span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Not Sure</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Not Sure" name="order_q1" /> <span class="checkmark"></span></p>
                        </div>

                        <div class="tab_btns">
                            <button type="button" id="nextBtn" onclick="nextPrev(1)" style="display: none;">Next</button>

                            <button type="button" id="validate_btn" value="1">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab1" data-row="2">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">Choose move size:</p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Room or less</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Room or less" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Studio apartment</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Studio apartment" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Small 1 bedroom apartment</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Small 1 bedroom apartment" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Large 1 bedroom apartment</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Large 1 bedroom apartment" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Small 2 bedroom apartment</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Small 2 bedroom apartment" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Large 2 bedroom apartment</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Large 2 bedroom apartment" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">3 bedroom apartment</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="3 bedroom apartment" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">2 bedroom house/townhouse</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="2 bedroom house/townhouse" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">3 bedroom house/townhouse</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="3 bedroom house/townhouse" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">4 bedroom house/townhouse</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="4 bedroom house/townhouse" name="order_q2" /><span class="checkmark"></span></p>
                        </div>

                        <!-- <div class="main_div_innr radio radio_other">

            <p class="tab_inner_radio radio radio_other"><input id="other2" type="radio" value="" name="order_q2"><span class="checkmark"></span><input type="text" placeholder="Other" value="" class="other_text form-control" name="order_q2"></p>

          </div> -->

                        <div class="tab_btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(0)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(2)" style="display: none;">Next</button>
                            <button type="button" id="validate_btn" value="2">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab2" data-row="3">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">What date are you looking to move on?</p>
                        </div>

                        <div class="main_div_innr form-group date">
                            <p class="tab_inner_title date">Select a date</p>

                            <p class="tab_inner_radio date"><input type="date" class="form-control" name="order_q3" id="datepicker" placeholder="Select date" /><span class="checkmark"></span></p>
                        </div>

                        <div class="tab_btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(3)" style="display: none;">Next</button>
                            <button type="button" id="validate_btn" value="3">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab3" data-row="4">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">What is your prefered time?</p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Earliest: ( can choose their own time)</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Earliest: ( can choose their own time)" name="order_q4" /><span class="checkmark"></span></p>
                        </div>

                        <div class="main_div_innr form-group radio">
                            <p class="tab_inner_title radio">Latest: ( can choose their own time)</p>

                            <p class="tab_inner_radio radio"><input type="radio" value="Latest: ( can choose their own time)" name="order_q4" /><span class="checkmark"></span></p>
                        </div>

                        <div class="tab_btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(2)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(4)" style="display: none;">Next</button>
                            <button type="button" id="validate_btn" value="4">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab4" data-row="5">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">Where are you moving from?</p>
                        </div>

                        <div class="main_div_innr form-group pincode">
                            <p class="tab_inner_title pincode">zip pin code</p>

                            <p class="tab_inner_radio textbox"><input type="textbox" value="" name="order_q5" /></p>
                        </div>

                        <div class="tab_btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(3)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(5)" style="display: none;">Next</button>
                            <button type="button" id="validate_btn" value="5">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab5" data-row="6">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">Where are you moving to?</p>
                        </div>

                        <div class="main_div_innr form-group pincode">
                            <p class="tab_inner_title pincode">zip pin code</p>

                            <p class="tab_inner_radio textbox"><input type="textbox" value="" name="order_q6" /></p>
                        </div>

                        <div class="tab_btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(4)">Previous</button><button type="button" id="nextBtn" onclick="nextPrev(6)" style="display: none;">Next</button>
                            <button type="button" id="validate_btn" value="6">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab6" data-row="7">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title">Please Enter Your Area Zipcode Where you need Service?</p>
                        </div>

                        <div class="main_div_innr form-group textbox">
                            <p class="tab_inner_title textbox">zip pin code</p>

                            <p class="tab_inner_radio textbox"><input type="textbox" value="" name="order_q7" /></p>
                        </div>

                        <div class="tab_btns">
                            <button type="button" id="prevBtn" onclick="nextPrev(5)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(7)" style="display: none;">Next</button>
                            <button type="button" class="wait_btn" id="validate_btn" value="7">Next</button>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab7" data-row="8">
                        <div id="leader_serching">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                style="margin: auto; background: #fff; display: block;"
                                width="200px"
                                height="200px"
                                viewBox="0 0 100 100"
                                preserveAspectRatio="xMidYMid"
                            >
                                <circle cx="50" cy="50" r="13.1904" fill="none" stroke="#f8981d" stroke-width="2">
                                    <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;40" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="-0.5s"></animate>

                                    <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="-0.5s"></animate>
                                </circle>

                                <circle cx="50" cy="50" r="32.8164" fill="none" stroke="#a15757" stroke-width="2">
                                    <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;40" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline"></animate>

                                    <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline"></animate>
                                </circle>
                            </svg>
                            <br />

                            <p class="text-center">Finding Leader in Your Area...</p>
                        </div>

                        <div id="leader_serched" style="display: none;">
                            <div class="svg-container">
                                <svg class="ft-green-tick" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                    <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"></circle>

                                    <path class="tick" fill="none" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="5" d="M14 27l5.917 4.917L34 17"></path>
                                </svg>
                            </div>

                            <p class="text-center">Leader Found In your Area!</p>

                            <div class="tab_btns"><button type="button" id="nextBtn" onclick="nextPrev(8)" style="display: none;">Go</button> <button type="button" id="validate_btn" value="8">Go</button></div>
                        </div>
                    </div>

                    <div style="display: none;" class="tab tab8" data-row="9">
                        <div class="main_div_innr form-group title">
                            <p class="tab_inner_title title test">Get your quotes now!</p>
                        </div>

                        <div class="main_div_innr form-group name">
                            <p class="tab_inner_title name">Name</p>

                            <p class="tab_inner_radio name"><input class="form-control" type="name" value="" name="name" required="required" /></p>
                        </div>

                        <div class="main_div_innr form-group email">
                            <p class="tab_inner_title email">Email</p>

                            <p class="tab_inner_radio email"><input class="form-control" type="email" value="" name="email" required="required" /></p>
                        </div>

                        <div class="main_div_innr form-group phone">
                            <p class="tab_inner_title phone">Phone</p>

                            <p class="tab_inner_radio phone"><input class="form-control" type="phone" value="" name="phone_no" required="required" /></p>
                        </div>

                        <p class="tab_inner_radio formid"><input type="hidden" value="Form submitted" name="submit" /></p>
                        <input type="submit" name="submit" id="submit_btn" value="Submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--  model View  End-->
