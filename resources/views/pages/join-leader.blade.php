@extends('layouts.app', ['elementName' => 'join-leader'])

@section('content')    
<div class="content-wrapper p-0">
    <section class="join-leader-sec section-light">
      <div class="container">
        <div class="row py-5 px-3">
          <div class="col-md-7">
            <div class="leader-wrapper">
              <h2 class="title">Join <span class="text-success">as <br>a</span> leader</h2>
              <p class="description">Free to get started, instant online activation</p>
            </div>
            <form method="post" action="create-leader-acc.php" autocomplete="off" id="leadercategory_form">
              <div class="d-flex flex-row input-btn-group justify-content-start pt-4">
                <!-- <div class="d-flex grouped-input-wrapper position-relative">
                  <input id="leadercategory" name="leadercategory" type="text" class="form-control form-control-lg" placeholder="What service do you provide?" autocomplete="off">
                  <input type="hidden" id="sub_category_id" name="sub_category_id" value="" />
                  <div id="name_error"></div>
                  <ul id="suggestlist" class="w-75"></ul>
                </div> -->
                <!-- <div class="pl-1 pl-lg-2 d-flex align-items-center grouped-btn-wrapper">
                  <div class="large-search-button">
                    <button id="submit_btn" type="button" class="btn btn-success btn-lg create-user-button">Get started</button>
                  </div>
                </div> -->
                <div class="pl-1 pl-lg-2 d-flex align-items-center grouped-btn-wrapper">
                  <div class="large-search-button">
                    <a href="/customer-login" id="submit_btn" type="button" class="btn btn-success btn-lg create-user-button">Login</a>
                  </div>
                </div>
                <div class="pl-1 pl-lg-2 d-flex align-items-center grouped-btn-wrapper">
                  <div class="large-search-button">
                    <a href="/leader-register" id="submit_btn" type="button" class="btn btn-success btn-lg create-user-button">Sign up</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 d-none d-lg-block">
            <img class="img-fluid rounded" src="https://leadwithusproject.com/assets/images/apple-1851464_640.jpg">
          </div>
        </div>
      </div>
    </section>
    <section class="">
      <div class="container">
        <div class="row how-it-works-summary py-5">
          <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0">
            <div class="how-it-works-content">
              <div class="d-flex r-icon h-25 w-25 align-items-center justify-content-center border rounded">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
              </div>
              <h4 class="pt-3 font-weight-bold">Create your free account in minutes</h4>
              <ul class="pt-2 list mb-4">
                <li><i class="fa fa-check"></i> Tell us what you do and where you do it</li>
                <li><i class="fa fa-check"></i> Get a Bark Profile and improve your web presence</li>
                <li><i class="fa fa-check"></i> Instant online activation</li>
              </ul>
              <div>
                <a class="btn btn-success mt-2" href="how-it-works.php">How it works</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0">
            <div class="how-it-works-content">
              <div class="d-flex r-icon h-25 w-25 align-items-center justify-content-center border rounded">
                <i class="fa fa-comments" aria-hidden="true"></i>
              </div>
              <h4 class="pt-3 font-weight-bold">Start receiving leads immediately</h4>
              <ul class="pt-2 list mb-4">
                <li><i class="fa fa-check"></i> Get instant access to live leads from customers looking now</li>
                <li><i class="fa fa-check"></i> See details of exactly what the customer is looking for</li>
                <li><i class="fa fa-check"></i> Only receive leads you're interested in</li>
              </ul>
              <div>
                <a class="btn btn-success mt-2" href="#">See an Example Lead</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 mb-4 mb-lg-0">
            <div class="how-it-works-content">
              <div class="d-flex r-icon h-25 w-25 align-items-center justify-content-center border rounded">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
              </div>
              <h4 class="pt-3 font-weight-bold">Great value and simple to use</h4>
              <ul class="pt-2 list mb-4">
                <li><i class="fa fa-check"></i> We charge a small fee per introduction</li>
                <li><i class="fa fa-check"></i> Review all the details of the lead before you buy</li>
                <li><i class="fa fa-check"></i> No commission, no hidden fees</li>
              </ul>
              <div>
                <a class="btn btn-success mt-2" href="#">See More About Pricing</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-light">
      <div class="container">
        <div class="row py-5">
          <div class="col-12 col-md-5 text-center text-md-left">
            <div class="d-flex flex-column flex-wrap h-100 align-items-center align-items-md-start justify-content-center mw-100 pb-4 pb-md-0 w-100">
              <div class="section-title">
                <h2 class="font-weight-bold pr-md-5 mb-0">
                  Join a buzzing marketplace
                </h2>
              </div>
              <div class="py-4 px-2 px-md-0 pr-lg-3">
                <p class="mb-0">Hundreds of thousands of small businesses have found new customers on leads</p>
              </div>
              <div class="btn-wrapper text-center mb-4">
                <button class="btn btn-success btn-lg">Join them</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 offset-md-1">
            <div class="d-flex flex-row stats-cards-row flex-wrap justify-content-between text-center">
              <div class="d-flex flex-column border rounded-extra stat-card align-items-center pb-4">
                <div class="d-flex stat-icon-wrapper align-items-center justify-content-center border my-4">
                  <i class="fa fa-commenting" aria-hidden="true"></i>
                </div>
                <div class="headline-stat">
                  <h2 class="larger font-weight-bold ">
                    10,000<span class="small-s">s</span>
                  </h2>
                </div>
                <div class="section-text stats-blurb">
                  leads a day
                </div>
              </div>
              <div class="d-flex flex-column border rounded-extra pb-4 stat-card align-items-center text-center">
                <div class="d-flex stat-icon-wrapper align-items-center justify-content-center border my-4">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="headline-stat">
                  <h2 class="larger font-weight-bold">
                    $1M<sup>+</sup>
                  </h2>
                </div>
                <div class="section-text px-xl-5 stats-blurb">
                  daily business done on Leads
                </div>
              </div>
              <div class="d-flex flex-column border rounded-extra pb-4 stat-card align-items-center text-center">
                <div class="d-flex stat-icon-wrapper align-items-center justify-content-center border my-4">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                </div>
                <div class="headline-stat">
                  <h2 class="larger font-weight-bold">
                    1,000<sup>+</sup>
                  </h2>
                </div>
                <div class="section-text stats-blurb">
                  services offered
                </div>
              </div>
              <div class="d-flex flex-column border rounded-extra pb-4 stat-card align-items-center text-center">
                <div class="d-flex stat-icon-wrapper align-items-center justify-content-center border my-4">
                  <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="headline-stat">
                  <h2 class="larger font-weight-bold">
                    500k<sup>+</sup>
                  </h2>
                </div>
                <div class="section-text stats-blurb">
                  small businesses
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row our-word-section-container py-5">
          <div class="col-12 col-md-8 mx-auto text-center">
            <div class="section-title px-md-5">
              <h2 class="larger font-weight-bold">Customer success stories</h2>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 mx-auto text-center pt-3">
            <div class="section-text px-lg-5">
              See what other small businesses have to say about Leads
            </div>
          </div>
          <div class="row flex-nowrap comment-cards-row pt-4 pt-md-6 overflow-auto scroll-touch pb-6">
            <div class="col-8 col-md-4 pr-0">
              <div class="d-flex flex-column comment-card bg-white rounded p-3 px-md-2 px-lg-3 border">
                <div class="avatar-wrapper d-flex align-self-center mb-3 cursor-pointer">
                  <img class="img-fluid avatar-circle rounded-circle loading" src="https://d1w7gvu0kpf6fl.cloudfront.net/img/pro_centre/vid_thumb/stefan_wesley.jpg" alt="" width="200" height="200" data-was-processed="true">
                </div>
                <div class="quote-text text-center">
                  <q>Our biggest client contacted us through Bark and we’ll continue to bring on new clients through the platform.</q>
                </div>
                <div class="hr-divider primary">
                  <hr class="hr-primary border-primary border-1 w-50 hr-3">
                </div>
                <div class="author text-center">
                  <h5 class="font-weight-bold">Stefan Wesley</h5>
                  <p class="text-muted">Sigma Digital</p>
                </div>
              </div>
            </div>
            <div class="col-8 col-md-4 pr-0">
              <div class="d-flex flex-column comment-card bg-white rounded p-3 border">
                <div class="avatar-wrapper d-flex align-self-center mb-3 cursor-pointer">
                  <img class="rounded-circle img-fluid loading" src="https://d1w7gvu0kpf6fl.cloudfront.net/img/pro_centre/vid_thumb/leanne_osbourne.jpg" alt="" width="200" height="200" data-was-processed="true">

                </div>
                <div class="quote-text text-center">
                  <q>We get 82% of our clients through Bark. They are coming to us and we can choose who we want to take on.</q>
                </div>
                <div class="hr-divider warning">
                  <hr class="hr-primary border-warning border-1 w-50 hr-3">
                </div>

                <div class="author text-center">
                  <h5 class="font-weight-bold">Leanne Osbourne</h5>
                  <p class="text-muted">Paradigm Cleaning Solution</p>
                </div>
              </div>
            </div>
            <div class="col-8 col-md-4">
              <div class="d-flex flex-column comment-card bg-white rounded p-3 px-md-4 px-lg-3 border">
                <div class="avatar-wrapper d-flex align-self-center mb-3 cursor-pointer">
                  <img class="img-fluid avatar-circle rounded-circle loading" src="https://d1w7gvu0kpf6fl.cloudfront.net/img/pro_centre/vid_thumb/richard_gray.jpg" alt="" width="200" height="200" data-was-processed="true">

                </div>
                <div class="quote-text text-center">
                  <q>Leads has been far the most effective website I’ve used. It gives me a solid flow of potential work.</q>
                </div>
                <div class="hr-divider danger">
                  <hr class="hr-primary border-danger border-1 w-50 hr-3">
                </div>
                <div class="author text-center">
                  <h5 class="font-weight-bold"> Richard Gray</h5>
                  <p class="text-muted">Rugfoot Photography</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-light">
      <div class="container">
        <div class="row py-5">
          <div class="col-12 text-center section-title">
            <h2 class="larger pb-3 font-weight-bold">Larger businesses use <br>leads too</h2>
          </div>
          <div class="col-12">
            <div class="d-inline-flex flex-row no-wrap overflow-hidden align-items-center justify-content-between w-100">
              <div class="px-3 d-sm-inline-block">
                <img alt="Microsoft logo" width="125" height="27" title="Microsoft logo" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/microsoft.png!d=2bpiX" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/microsoft.png!d=2bpiX 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/microsoft.png!d=770uML 2x" class="loading" data-was-processed="true">
              </div>
              <div class="px-3 d-sm-inline-block">
                <img alt="Ford logo" width="118" height="46" title="Ford logo" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/ford.png!d=m74TJk" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/ford.png!d=m74TJk 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/ford.png!d=NZjs4e 2x" class="loading" data-was-processed="true">
              </div>
              <div class="px-3 d-none d-sm-inline-block">
                <img alt="General Electric logo" width="58" height="58" title="General Electric logo" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/general-electric.png!d=Qwju16" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/general-electric.png!d=Qwju16 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/general-electric.png!d=jEeCQG 2x" class="loading" data-was-processed="true">
              </div>
              <div class="px-3 d-none d-sm-inline-block">
                <img alt="JP Morgan logo" width="136" height="28" title="JP Morgan logo" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/jp-morgan.png!d=mz6s8" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/jp-morgan.png!d=mz6s8 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/jp-morgan.png!d=Nm7HzO 2x" class="loading" data-was-processed="true">
              </div>
              <div class="px-3 d-none d-sm-inline-block">
                <img alt="CNN logo" width="84" height="40" title="CNN logo" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/cnn.png!d=GROuq" srcset="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/cnn.png!d=GROuq 1x, https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/company-logos/cnn.png!d=7MEsMe 2x" class="loading" data-was-processed="true">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
