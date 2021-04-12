@extends('layouts.app')

@section('content')
<h3>Products</h3>
<div class="row">
  <div class="col-12 col-lg-3">
    <div class="list-group my-2 my-sm-3 my-lg-4">
      <a href="#" class="list-group-item list-group-item-action active">
        Categories
      </a>
      <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action" style="color: black">All</a>
      @foreach($categories as $category)
      <a href="{{ route('product.indexByCategory', $category->id) }}" class="list-group-item list-group-item-action"
        style="color: black">{{ $category->name }}</a>
      @endforeach
    </div>
  </div>
  <div class="col-12 col-lg-9">
    <div class="card-deck">
      @foreach($products as $product)
      <div class="col-12 col-sm-6 col-lg-4 mx-auto my-4 my-lg-4 px-0 px-xl-3">
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
  </div>
</div>

@section('script')
@if($isAdded)
<script>
  toastr.success("Product added to cart successfully");
</script>
@endif
@endsection

@endsection