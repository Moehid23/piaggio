@extends('layouts.app')

@section('title')
    Piaggio
@endsection

@section('content')
      <!-- Header -->
  <header class="text-center">
    <h1>
      explore your beautiful vehicle
      <br/>
      as easy one click
    </h1>
    <p class="mt-3">
      you will see vehicle 
      <br/>
      you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>
  <!-- main -->
  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>17k+</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>11</h2>
          <p>provinces</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>55</h2>
          <p>Delears</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>4</h2>
          <p>Brands</p>
        </div>
      </section>
    </div>
  <section class="section-popular" id="popular">
    <div class="container">
    <div class="row">
      <div class="col text-center section-popular-heading">
        <h2>Most Popular Vehicles of 2022</h2>
        <p>something that you never try
        <br>
          before in this world</p>
      </div>
    </div>  
    </div>
  </section>
<!-- chard -->
  <section class="section-popular-content" id="popularcontent">
    <div class="container">
      <div class="section-popular-vehicles row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-vehicles text-center d-flex flex-column"
          style="background-image:url('frontend/img/card-1\ \(1\).jpg')">
            <div class="vehicles-vespa"><img src="frontend/img/logo-light.png" width="50%"></div>
            <br>
            <div class="vehicles-name">Vespa x Justin Beiber</div>
            <div class="vehicles-button mt-auto">
              <a href="{{ route('detail')}}" class="btn btn-vehicles-details px-4">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-vehicles text-center d-flex flex-column"
          style="background-image:url('frontend/img/card-2\ \(1\).jpg')">
            <div class="vehicles-vespa"><img src="frontend/img/logo-light.png" width="50%"></div>
            <br>
            <div class="vehicles-name">Vespa x 946 DIOR</div>
            <div class="vehicles-button mt-auto">
              <a href="{{ route('detail')}}" class="btn btn-vehicles-details px-4">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-vehicles text-center d-flex flex-column"
          style="background-image:url('frontend/img/slide-04\ \(1\).jpg')">
            <div class="vehicles-vespa"><img src="frontend/img/download.png" width="50%"></div>
            <br>
            <div class="vehicles-name">Aprilia RS 660</div>
            <div class="vehicles-button mt-auto">
              <a href="{{ route('detail')}}" class="btn btn-vehicles-details px-4">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-vehicles text-center d-flex flex-column"
          style="background-image:url('frontend/img/banner\ \(1\).jpg')">
            <div class="vehicles-vespa"><img src="frontend/img/Image-Aprilia-100-Years-1080w-removebg-preview.png" width="50%"></div>
            <br>
            <div class="vehicles-name">New V7 Stone Centennial Livery</div>
            <div class="vehicles-button mt-auto">
              <a href="{{ route('detail')}}" class="btn btn-vehicles-details px-4">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Our brands -->
<section class="section-brands" id="brands">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2>Our Brands</h2>
        <p>A Home Away <br/> from Home</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="frontend/img/0-removebg-preview.png" class="img-partner">
      </div>
    </div>
  </div>
</section>
<!-- testimonial -->
<section class="section-testimonial-heading" id="testimonialheading">
<div class="container">
  <div class="row">
    <div class="col text-center">
      <h2>They Are Loving Us</h2>
      <p>Moment were giving them <br/> the best experience</p>
    </div>
  </div>
</div>
</section>
<!-- Our Testimonial -->
<section class="section section-testimonial-content" id="testimonialcontent">
  <div class="container">
    <div class="container">
      <div class="section-popular-vehicle row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/img/Picsart_22-11-18_20-27-05-468.png" class="md-4 rounded-circle">
              <h3 class="md-4">Raffi Ahmad</h3>
              <p class="testimonial">"It's actually a gift for my wife who has been requesting it, and it's extremely cool to tour other home improvement projects."</p>
            </div>
            <hr>
            <p class="vehicles-to mt-2">Vespa x 946 DIOR</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/img/Picsart_22-11-18_20-27-34-877.png" class="md-4 rounded-circle">
              <h3 class="md-4">Arief Muhammad</h3>
              <p class="testimonial">"I worked with Vespa and Preppstudio to create a 100-piece limited edition motorbike, which I will show to my friends and followers."</p>
            </div>
            <hr>
            <p class="vehicles-to mt-2">Vespa x Preppstudio</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="frontend/img/Picsart_22-11-18_20-27-58-787.png" class="md-4 rounded-circle">
              <h3 class="md-4">Den Dimas</h3>
              <p class="testimonial">"Being all white makes it difficult to use, especially during the wet season. Justine has never ridden a motorcycle before, which is an issue."</p>
            </div>
            <hr>
            <p class="vehicles-to mt-2">Vespa x Justin Beiber</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col 12 text-center">
      <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help...</a>
      <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
    </div>
  </div>
</section>
</main>
@endsection