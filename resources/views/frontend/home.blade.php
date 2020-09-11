
@extends('frontend/layouts/App')

@section('title','Home')

@section('content')
<header class="head-banner">
  <div class="container h-100" >
    <div class="row h-100">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="align-self-center py-5 my-5">
          <h1 class="mb-0">Get New Experience</h1>
          <h3 class="text-secondary">Create all you need about technology</h3>
          <p class="py-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          </p>
          <div class="d-flex">
            <button class="btn btn-primary btn-lg">Continue The Adventure</button>
            <button class="btn btn-secondary btn-lg mx-3 btn-responsive-hidden"><img src="{{asset('images/home/play.svg')}}"/></button>
          </div>
          <button class="btn btn-secondary btn-lg my-3 btn-responsive"><img src="{{asset('images/home/play.svg')}}"/> Check Our Video</button>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="align-self-center text-center">
          <img src="{{asset('images/home/balloon1.svg')}}" class="img-fluid banner-balloon-1 d-responsive-none"/>
          <img src="{{asset('images/home/balloon2.svg')}}" class="img-fluid banner-balloon-2 d-responsive-none"/>
        </div>
      </div>
    </div>
  </div>
</header>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="align-self-center text-center about-image-all">
          <img src="{{asset('images/home/about.png')}}" class="img-fluid img-about"/>
          {{-- <img src="{{asset('images/global/cloud.png')}}" class="img-fluid position-absolute img-cloud-1"/> --}}
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="align-self-center">
          <h2>We Have Good Hospitallity</h2>
          <p class="py-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          </p>
          <button class="btn btn-primary btn-md">Read More</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services">
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>We Have Good Services</h2>
        <p class="py-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="row col-services align-self-center bg-light p-3">
          <div class="col-md-5 text-center">
            <img src="{{asset('images/home/enterprise-system.svg')}}" class="img-fluid"/>
          </div>
          <div class="col-md-6 services-content">
            <h5>Enterprise System</h5>
            <p class="caption">
              Lorem ipsum dolor sit amet, consectetur
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="row col-services align-self-center bg-light p-3">
          <div class="col-md-5 text-center">
              <img src="{{asset('images/home/ecommerce-system.svg')}}" class="img-fluid"/>
          </div>
          <div class="col-md-6 services-content">
            <h5>Enterprise System</h5>
            <p class="caption">
              Lorem ipsum dolor sit amet, consectetur
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="row col-services align-self-center bg-light p-3">
          <div class="col-md-5 text-center">
            <img src="{{asset('images/home/crm-system.svg')}}" class="img-fluid"/>
          </div>
          <div class="col-md-6 services-content">
            <h5>Enterprise System</h5>
            <p class="caption">
              Lorem ipsum dolor sit amet, consectetur
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="row col-services align-self-center bg-light p-3">
          <div class="col-md-5 text-center">
            <img src="{{asset('images/home/supply-chain-system.svg')}}" class="img-fluid"/>
          </div>
          <div class="col-md-6 services-content">
            <h5>Enterprise System</h5>
            <p class="caption">
              Lorem ipsum dolor sit amet, consectetur
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="row col-services align-self-center bg-light p-3">
          <div class="col-md-5 text-center">
            <img src="{{asset('images/home/decision-support.svg')}}" class="img-fluid"/>
          </div>
          <div class="col-md-6 services-content">
            <h5>Enterprise System</h5>
            <p class="caption">
              Lorem ipsum dolor sit amet, consectetur
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="row col-services align-self-center bg-light p-3">
          <div class="col-md-5 text-center">
            <img src="{{asset('images/home/pos.svg')}}" class="img-fluid"/>
          </div>
          <div class="col-md-6 services-content">
            <h5>Enterprise System</h5>
            <p class="caption">
              Lorem ipsum dolor sit amet, consectetur
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="benefit">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>We Have Good Hospitallity</h2>
          <p class="py-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{asset('images/home/benefit.svg')}}" class="img-fluid img-benefit"/>
      </div>
    </div>
  </div>
</section>
@endsection