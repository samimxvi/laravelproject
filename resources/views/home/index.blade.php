@extends('layouts.app')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide mt-n4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/storage/uploads/home-1.jpg" class="d-block w-100 carousel-img" alt="..." >
      <div class="black-overlay"></div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Guitars</h5>
        <p>The history of music is mortal, but the idiocy of the guitar is eternal.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/storage/uploads/home-2.jpg" class="d-block w-100 carousel-img" alt="...">
      <div class="black-overlay"></div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Drums</h5>
        <p>The most persistent sound which reverberates through man's history is the beating of war drums.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/storage/uploads/home-3.jpg" class="d-block w-100 carousel-img" alt="...">
      <div class="black-overlay"></div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Pianos - Keyboards</h5>
        <p>One does not play the piano with one's fingers: one plays the piano with one's mind.</p>
      </div>
    </div>+
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h3 class="mt-3 mt-lg-5">Popular Products</h3>
<div class="card-deck">
  @foreach($products as $product)
  <div class="col-12 col-sm-6 col-md-5 col-lg-3 col-xl-3 mx-auto my-4 my-lg-4 px-0 px-xl-3">
    <div class="card border-0 shadow h-100">
      <img src="/storage/{{ $product->image }}" class="card-img-top music-img" alt="{{ $product->title }}">
      <div class="card-body py-2">
        <h6 class="card-title font-weight-bold">{{ $product->title }}</h6>
        <h6>Price: <span>{{ $product->price }}</span> EUR</h6>
      </div>
      <div class="d-flex justify-content-around px-2 pt-0 pb-2">
        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Details</a>
        <a href="{{ route('product.addToCart', $product->id) }}" class="btn btn-success">+ Add to Cart</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

<h3 class="mt-2 mt-lg-3">Categories</h3>
<div class="list-group my-2 my-sm-3 my-lg-4">
  <a href="#" class="list-group-item list-group-item-action active bg-success">
    Categories
  </a>
  <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action" style="color: black">All</a>
  @foreach($categories as $category)
  <a href="{{ route('product.indexByCategory', $category->id) }}" class="list-group-item list-group-item-action"
    style="color: black">{{ $category->name }}</a>
  @endforeach
</div>

<h3 class="mt-3 mt-lg-4">Follow Us</h3>
<div class="row mt-3 mt-lg-4 mb-3 mb-lg-4 px-3 social-links " style="height: 100px">
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

@section('script')
@if(session('success'))
<script>
  toastr.success("Order created successfully");
</script>
@endif
@endsection

@endsection