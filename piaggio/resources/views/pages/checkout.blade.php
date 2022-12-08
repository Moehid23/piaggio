@extends('layouts.checkout')
@section('title','checkout')

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
                <li class="breadcrumb-item">
                  Details
                </li>
                <li class="breadcrumb-item active">
                  Checkout
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <!-- details -->
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Your Items Checkout</h1>
              <p>Vehicle & Accesories</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Type</td>
                      <td>Color</td>
                      <td>Pick Up</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/img/11zon_cropped (1).png')}}" class="rounded-circle" height="60">
                      </td>
                      <td class="align-middle">
                        Vespa x Justin Beiber
                      </td>
                      <td class="align-middle">
                        Vespa Sprint
                      </td>
                      <td class="align-middle">
                        White
                      </td>
                      <td class="align-middle">
                        Available
                      </td>
                      <td class="align-middle">
                        <img src="{{ url('frontend/img/closed.png') }}" width="20px">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/img/black-vulcano-top-box-large-body.png')}}" height="60">
                      </td>
                      <td class="align-middle">
                        Accesories
                      </td>
                      <td class="align-middle">
                        Top Box Large (Incl. Rear Carrier)
                      </td>
                      <td class="align-middle">
                        Black
                      </td>
                      <td class="align-middle">
                        None
                      </td>
                      <td class="align-middle">
                        <img src="{{ url('frontend/img/closed.png') }}" width="20px">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/img/helmet (1).png')}}" height="60">
                      </td>
                      <td class="align-middle">
                        Accesories
                      </td>
                      <td class="align-middle">
                        HELMET VESPA FF HERITAGE BIANCO
                      </td>
                      <td class="align-middle">
                        White
                      </td>
                      <td class="align-middle">
                        Available
                      </td>
                      <td class="align-middle">
                        <img src="{{ url('frontend/img/closed.png')}}" width="20px">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Vehicle & Accesories</h2>
                <form class="form-inline">
                  <label for="inputUsername" class="sr-only">Name</label>
                  <input type="text" name="inputUsername" id="inputUsername" class="form-control mb-2 mr-sm-2" placeholder="Vehicle & Accesories"/>
  
                  <label for="inputPayment" class="sr-only">Color</label>
                  <select name="inputPayment" id="inputPayment" class="custom-select mb-2 mr-sm-2">
                    <option value="payment" selected>Color</option>
                    <option value="payment" >White</option>
                    <option value="payment" >Black</option>
                    <option value="payment" >Red</option>
                    <option value="payment" >Blue</option>
                  </select>
  
                  <label for="dateCheckout" class="sr-only">Pick Up Date</label>
                  <div class="input-group mb-2 mr-sm-2">
                  <input type="text" name="dateCheckout" id="dateCheckout" class="form-control datepicker" placeholder="Pick Up Date"/>
                  </div>
  
                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                  </button>
                </form>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">You can only add vehicles or accessories that have been registered with nomads</p>
              </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-details card-right">
          <h2>Checkout Informations</h2>
          <table class="vehicle-informations">
            <tr>
              <th width="50%">Items</th>
              <td width="50%" class="text-right">3 Items</td>
            </tr>
            <tr>
              <th width="50%">Vehicle</th>
              <td width="50%" class="text-right">$ 4.645,54</td>
            </tr>
            <tr>
              <th width="50%">Accesories</th>
              <td width="50%" class="text-right">$ 381,83
              </td>
            </tr>
            <tr>
              <th width="50%">Sub Price</th>
              <td width="50%" class="text-right">$ 5.040,55</td>
            </tr>
            <tr>
              <th width="50%">Total (+ Discount)</th>
              <td width="50%" class="text-right text-total">
                <span class="text-blue">$ 4.995,</span>
                <span class="text-orange">55</span>
              </td>
            </tr>
          </table>  
          <hr>
          <h2>Payment Instructions</h2>
          <p class="payment-instructions">Please complete your payment before to contineu the dream vehicle</p>
          <div class="bank">
            <div class="bank-item pd-3 mt-2">
              <img src="{{ url('frontend/img/card.png')}}" class="bank-image">
              <div class="descriptions">
                <h3>PT.Piaggio.Grup</h3>
                <p>114590504 <br> Bank Negara Indonesia</p>
              </div>
              <div class="clearfix"></div>
              <div class="bank-item pd-3 mt-2">
                <img src="{{ url('frontend/img/card.png')}}" class="bank-image">
                <div class="descriptions">
                  <h3>PT.Piaggio.Grup</h3>
                  <p>123828481234 <br> Bank Mandiri</p>
                </div>
              <div class="clearfix"></div>
              <div class="bank-item pd-3 mt-2">
                <img src="{{ url('frontend/img/card.png')}}" class="bank-image">
                <div class="descriptions">
                  <h3>PT.Piaggio.Grup</h3>
                  <p>1238221411234 <br> Bank Republik Indonesia</p>
                </div>
              <div class="clearfix"></div>
              <div class="bank-item pd-3 mt-2">
                <img src="{{ url('frontend/img/card.png')}}" class="bank-image">
                <div class="descriptions">
                  <h3>PT.Piaggio.Grup</h3>
                  <p>8481234 <br> Bank Central Asia</p>
                </div>
              <div class="clearfix"></div>
              <br>
            </div>
          </div>
        </div>
        <div class="checkout-container">
          <a href="{{ route('checkout-success')}}" class="btn btn-block btn-checkout-now mt-3 py-2">
            I have made payment
          </a>
        </div>
        <div class="text-center mt-3">
          <a href="{{ route('detail')}}" class="text-muted">
            Cancel Payment
          </a>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/library/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/library/gijgo/js/gijgo.min.js')}}"></script>
    <script>
      $(document).ready(function(){
        $('.datepicker').datepicker({
          uilibrary:'bootstrap4',
          icons:{
            rightIcons:'<img src="{{ url('frotend/img/calendar.png')}}"/>'
          }
        });
      });
    </script>
@endpush