@extends('layouts.app')

@section('content')
<h3 class="mb-3">Contact</h3>
<div class="row mb-4">
  <div class="col-12 col-lg-4 my-2 my-lg-0">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">MuzioA</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Retail Store</div>
        <div class="card-text">Assam</div>
        <div class="card-text"><a href="#">064/65-98-642</a></div>
        <div class="card-text"><a href="#">011/4562-841</a></div>
        <div class="card-text">10:00 - 18:00</div>
        <div class="card-text"><a href="#">sami@muzio.com</a></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 my-2 my-lg-0">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">MuzioB</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Retail Store</div>
        <div class="card-text">Bangalore</div>
        <div class="card-text"><a href="#">069/52-46-123</a></div>
        <div class="card-text"><a href="#">011/6521-874</a></div>
        <div class="card-text">09:00 - 17:00</div>
        <div class="card-text"><a href="#">musicians@muzio.com</a></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 my-2 my-lg-0">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">MuzioP</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Retail Store</div>
        <div class="card-text">Panjab</div>
        <div class="card-text"><a href="#">065/45-85-751</a></div>
        <div class="card-text"><a href="#">011/4126-751</a></div>
        <div class="card-text">10:00 - 16:00</div>
        <div class="card-text"><a href="#">lpu@muzio.com</a></div>
      </div>
    </div>
  </div>
</div>

<h4 class="my-3">Follow Us</h4>
<div class="row px-3 social-links mb-4" style="height: 100px">
  <div class="col-12 col-lg-4 p-0">
    <a href="https://www.facebook.com" target="_blank"
      class="social social-facebook d-flex justify-content-center align-items-center">
      <div>Facebook</div>
    </a>
  </div>
  <div class="col-12 col-lg-4 p-0 text-center">
    <a href="https://www.instagram.com" target="_blank"
      class="social social-instagram d-flex justify-content-center align-items-center">
      <div>Instagram</div>
    </a>
  </div>
  <div class="col-12 col-lg-4 p-0 text-center">
    <a href="https://www.twitter.com" target="_blank"
      class="social social-twitter d-flex justify-content-center align-items-center">
      <div>Twitter</div>
    </a>
  </div>
</div>

<h4>Find Us</h4>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.726564801247!2d75.70295481498906!3d31.
255991981457804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!
2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1618220970289!5m2!1sen!2sin" frameborder="0"
    style="border:0; height: 100%; width: 100%" allowfullscreen></iframe>
</div>

@endsection