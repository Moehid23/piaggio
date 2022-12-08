@extends('layouts.app')
@section('title','detail vehicle')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Most Popular Vehicles
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <!-- details -->
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Vespa x Justin Beiber</h1>
              <p>I love Vespa, and working with this classic brand is really cool.</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ url('frontend/img/Gallery-1.jpg')}}" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/img/Gallery-1.jpg')}}">
                </div>
                <div class="xzoom-thumbs">
                  <a href="{{ url('frontend/img/Gallery-1.jpg')}}">
                    <img src="{{ url('frontend/img/Gallery-1.jpg')}}" class="xzoom-gallery" width="128px" xpreview="{{ url('frontend/img/Gallery-1.jpg')}}">
                  </a>
                  <a href="{{ url('frontend/img/Gallery-2.jpg')}}">
                    <img src="{{ url('frontend/img/Gallery-2.jpg')}}" class="xzoom-gallery" width="128px" xpreview="{{ url('frontend/img/Gallery-2.jpg')}}">
                  </a>
                  <a href="{{ url('frontend/img/Gallery-3.jpg')}}">
                    <img src="{{ url('frontend/img/Gallery-3.jpg')}}" class="xzoom-gallery" width="128px" xpreview="{{ url('frontend/img/Gallery-3.jpg')}}">
                  </a>
                  <a href="{{ url('frontend/img/Gallery-4.jpg')}}">
                    <img src="{{ url('frontend/img/Gallery-4.jpg')}}" class="xzoom-gallery" width="128px" xpreview="{{ url('frontend/img/Gallery-4.jpg')}}">
                  </a>
                  <a href="{{ url('frontend/img/Gallery-5.jpg')}}">
                    <img src="{{ url('frontend/img/Gallery-5.jpg')}}" class="xzoom-gallery" width="128px" xpreview="{{ url('frontend/img/Gallery-5.jpg')}}">
                  </a>
                </div>
              </div>
              <h2>About Vespa</h2>
              <p>JUSTIN BIEBER X VESPA was launched with a 150cc engine, a capacity that has made Vespa history, now fully revamped keeping in mind the latest environmental regulations. The vehicle's fresh and youthful geometry forms a light yet protective body, while the handlebar features evocative rectangular headlamps, supporting a very modern full color TFT multifunction display in sync with all smartphone functions. Full-LED headlights and spectacular 12-inch alloy wheels are the best result of this fusion of style and technology.</p>
              <p>“I love Vespa, and working with this classic brand is really cool. Being able to express myself, whether through art, music, visuals, or aesthetics, being able to create something from scratch - that's a part of who I am. In the end, the goal in creating and designing is to always present your unique self in things," said Justin Bieber.</p>
              <div class="features row">
                <div class="col-md-6">
                <div class="description">
                  <img src="{{ url('frontend/img/category-1__1_-removebg-preview.png')}}" class="features-image">
                  <div class="description">
                    <h3>Helmet & Accesories Riding</h3>
                    <p>for your safety</p>
                  </div>
                </div>
              </div>
              <br><br>
                <div class="col-md-6 border-left">
                <div class="description">
                  <img src="{{ url('frontend/img/category-3__1_-removebg-preview.png')}}" class="features-image">
                  <div class="description">
                    <h3>Apparel & Others</h3>
                    <p>for your appearance</p>
                  </div>
                </div>
              </div>
            </dis>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-details card-right">
          <h2>Customer Prioritas</h2>
          <div class="members my-2">
            <img src="{{ url('frontend/img/Picsart_22-11-18_20-27-05-468.png')}}" class="member-image mr-1"
            />
            <img src="{{ url('frontend/img/Picsart_22-11-18_20-27-34-877.png')}}" class="member-image mr-1"
            />
            <img src="{{ url('frontend/img/Picsart_22-11-18_20-27-58-787.png')}}" class="member-image mr-1"
            />
            <img src="{{ url('frontend/img/Picsart_22-11-20_10-25-43-685.png')}}" class="member-image mr-1"
            />
            <img src="{{ url('frontend/img/Picsart_22-11-20_10-29-50-792.png')}}" class="member-image mr-1"
            />
          </div>
          <hr>
          <h2>Vehicle Informations</h2>
          <table class="vehicle-informations">
            <tr>
              <th width="50%">Date Of Released</th>
              <td width="50%" class="text-right">11 Apr,2022</td>
            </tr>
            <tr>
              <th width="50%">Machine</th>
              <td width="50%" class="text-right">150cc</td>
            </tr>
            <tr>
              <th width="50%">type</th>
              <td width="50%" class="text-right">Vespa Sprint</td>
            </tr>
            <tr>
              <th width="50%">Price</th>
              <td width="50%" class="text-right">$4.972,11</td>
            </tr>
          </table>  
        </div>
        <div class="checkout-container">
          <a href="{{ route('checkout')}}" class="btn btn-block btn-checkout-now mt-3 py-2">
            Checkout Now
          </a>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/library/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/library/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function(){
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      xoffset: 15
    });
  });
</script>
@endpush
    
