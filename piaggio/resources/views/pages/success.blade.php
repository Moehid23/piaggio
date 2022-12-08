@extends('layouts.success')
@section('title','checkout success')

@section('content')
<main>
    <div class="suction-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/img/28480717_Mobile_payment_transfer_flat_vector_illustration-removebg-preview.png')}}" width="50%">
        <h1>Yay! Success</h1>
        <p>we've send email for your to pick up available dealer units <br> Please read it as well</p>
        <a href="{{ route('home')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        <br><br><br>
        </div>
      </div>
    </div>
  </main>
@endsection