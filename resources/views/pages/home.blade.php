@extends('layouts.app', ['elementName' => 'home'])

@section('content')    
<div class="content-wrapper">

<section class="home-section">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="p-3">
               <h2 class="hero-title">Search here for <span class="text-success">Perfect<br> Business</span> Professionals</h2>
            </div>
            <div class="p-3">
               <form action="" method="post">
                  <div class="input-group form-group row" id="home_search_query">
                     <input id="find_service" type="text" name="search_query" class="form-control col-md-9 col-sm-12" value="" placeholder="What service are you looking for?">
                     <input type="hidden" name="sub_category_id" value="" />
                     <div id="name_error"></div>
                     <input id="zip_code" name="zipcode" class="form-control col-md-3 hidden-sm" placeholder="Zip Code" autocomplete='off'>
                     <input id="zip_latitude" name="zip_latitude" type="hidden">
                     <input id="zip_longitude" name="zip_longitude" type="hidden">
                     <ul id="autocomplete" style="display: none;"></ul>
                     <div class="input-group-append move-icon-up">
                        <button name="search" class="search_button" id="home_search_button">
                        <img src="{{('images/srch2.png')}}" class="srch2">
                        </button>
                     </div>
                  </div>
                  <p><span class="font-weight-bolder text-success" style="font-size: 20px;font-weight: 500;">Popular</span> : Moving, Cleaning, Web Designing, Gardening</p>
               </form>
            </div>
         </div>
         <div class="col-md-5">
            <img class="man-img" src="{{('images/man-lead.png')}}">
         </div>
      </div>
   </div>
</section>
<!-- tabs section start here-->
<section>
   <div class="container">
   <div class="row py-5 home-tabs">
   <div class="col-md-12">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
            <a class="nav-link active" id="hard_labor_services_tab" data-toggle="tab" href="#hard_labor_services" role="tab" aria-controls="home" aria-selected="true">Hard Labor Services</a>
         </li>
         <li class="nav-item">
            <a class="nav-link " id="events_tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false">Events</a>
         </li>
         <li class="nav-item">
            <a class="nav-link " id="bussiness_services_tab" data-toggle="tab" href="#bussiness" role="tab" aria-controls="contact" aria-selected="false">Business Services</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="tech_tab" data-toggle="tab" href="#tech" role="tab" aria-controls="tech" aria-selected="false">Tech</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="health_tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="false">Health</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="education_tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
         </li>
      </ul>
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade active show" id="hard_labor_services" role="tabpanel" aria-labelledby="hard_labor_services_tab">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service1" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/truckloading.jpg')}}" class="">
                           </div>
                           <p class="service-title p-3 mb-0">Moving</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service2" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/239GeneralPlumbing.jpg')}}" class="">
                           </div>
                           <p class="service-title p-3 mb-0">Plumbing</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/240elecrician.jpg')}}">
                           </div>
                           <p class="service-title p-3 mb-0">Electrician</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/cleaning-image.jpg')}}">
                           </div>
                           <p class="service-title p-3 mb-0">Cleaning</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/242gardening.jpg')}}" class="">
                           </div>
                           <p class="service-title p-3 mb-0">Gardening</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/243hconstruction.jpg')}}" class="">
                           </div>
                           <p class="service-title p-3 mb-0">Construction</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events_tab">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h5>Events</h5>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h5>Events</h5>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h5>Events</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade " id="bussiness" role="tabpanel" aria-labelledby="bussiness-tab">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h5>Bussiness Services</h5>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h5>Bussiness Services</h5>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h5>Bussiness Services</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade " id="tech" role="tabpanel" aria-labelledby="tech_tab">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-6 mb-5">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/Web development.jpg')}}" class="239">
                           </div>
                           <p class="service-title p-3 mb-0">Web Development</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mb-5">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/SEO.jpg')}}" class="239">
                           </div>
                           <p class="service-title p-3 mb-0">SEO</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mb-5">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/Social Media.jpg')}}" class="239">
                           </div>
                           <p class="service-title p-3 mb-0">Social Media</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mb-5">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/Digital marketing.jpg')}}" class="239">
                           </div>
                           <p class="service-title p-3 mb-0">Digital Media</p>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mb-5">
                     <div class="service-item">
                        <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                           <div class="service-image-wrapper img-fluid">
                              <img src="{{('images/Help with managing websites.jpg')}}" class="239">
                           </div>
                           <p class="service-title p-3 mb-0">Helping With Managing websites</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade " id="health" role="tabpanel" aria-labelledby="health_tab">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h4>Health</h4>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h4>Health</h4>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="border p-5 rounded">
                        <h4>Health</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- tabs section End -->
<!-- ************************************** -->
<!-- owl-carousel-->
<!-- ************************************** -->
<section class="section-light">
   <div class="container">
      <div class="row py-5">
         <div class="col-md-12">
            <div class="text-center mb-5">
               <h2 class="font-weight-bold">Popular Professional Services</h2>
               <p>Get your project done on time by highly skilled professionals</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--We do we use it?-->
<section class="">
   <div class="container">
      <div class="row pt-5 px-lg-5">
         <div class="col-md-6 col-sm-12 mb-2">
            <div class="mt-5 pt-5">
               <h3 class="mt-5 mb-3 font-weight-bold">We do We use it?</h3>
               <p class="">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
               <button class="btn btn-lg btn-success">Learn More</button>
            </div>
         </div>
         <div class="col-md-6 col-sm-12">
            <div class="text-center">
               <img src="{{('images/we-do.png')}}" style="width:100%;height:auto;">
            </div>
         </div>
      </div>
   </div>
</section>
<!------------------------------------------>
<!--------------Hard Labor Service start
   here---------------------------------------->
<section class="section-light">
   <div class="container">
      <div class="row py-5 pb-3">
         <div class="col-6">
            <div>
               <h4 class="font-weight-bold">Hard Labor Service</h4>
            </div>
         </div>
         <div class="col-6">
            <div class="text-right">
               <a href="#" class="btn btn-link btn-lg">View</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#" class="services" data-toggle="modal" data-target="#service1" data-whatever="@mdo" value="">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/truckloading.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Moving</p>
               </a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/239GeneralPlumbing.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Plumbing</p>
               </a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#" class="services" data-toggle="modal" data-target="#service" data-whatever="@mdo" value="">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/240elecrician.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Electrician</p>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- *************Travel Services start****************************** -->
<section class="">
   <div class="container">
      <div class="row py-5 pb-3">
         <div class="col-6">
            <div>
               <h4 class="font-weight-bold">Travel</h4>
            </div>
         </div>
         <div class="col-6">
            <div class="text-right">
               <a href="#" class="btn btn-link btn-lg">View</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/default.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Travel service 1</p>
               </a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/default.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Travel service 2</p>
               </a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/default.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Travel service 3</p>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- *************Travel Services End****************************** -->
<!-- *************Animal Services Start****************************** -->
<section class="section-light">
   <div class="container">
      <div class="row py-5 pb-3">
         <div class="col-6">
            <div>
               <h4 class="font-weight-bold">Animal</h4>
            </div>
         </div>
         <div class="col-6">
            <div class="text-right">
               <a href="#" class="btn btn-link btn-lg">View</a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/default.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Animal 1</p>
               </a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/default.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Animal 2</p>
               </a>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mb-1">
            <div class="service-item">
               <a href="#">
                  <div class="service-image-wrapper img-fluid">
                     <img src="{{('images/default.jpg')}}" class="">
                  </div>
                  <p class="service-title p-3 mb-0">Animal 3</p>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- *************Animal Services End****************************** -->
<section>
   <div class="container">
      <div class="row py-5 px-lg-5">
         <div class="col-md-3 col-sm-12">
            <div>
               <img src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/techcrunch2.png!d=7MZFY">
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <div>
               <img src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/new-york-times.png!d=6JdSn">
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <div>
               <img src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/techcrunch2.png!d=7MZFY">
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <div>
               <img src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/directory/press-logos/techcrunch2.png!d=7MZFY">
            </div>
         </div>
      </div>
   </div>
</section>
</div>
@endsection
