@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between">
  <h3>Order Items</h3>
  @if (Auth::User()->is_admin)
  <a href="{{ route('order.list') }}" class="btn btn-secondary shadow align-self-center">
    Back To Orders </a>
  @else
  <a href="{{ route('user.orders') }}" class="btn btn-secondary shadow align-self-center">
    Back To Orders </a>
  @endif

</div>
<div class="card-deck">
  @foreach($orderItems as $item)
  <div class="col-12 col-lg-6 my-3">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-primary text-white">
        <h5 class="m-0">{{ $item->product->title }}</h5>
      </div>
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="/storage/{{ $item->product->image }}" class="card-img h-100" alt="Product image">
        </div>
        <div class="col-md-7">
          <div class="card-body py-0">
            <div class="card-text mt-2"><span class="font-weight-bold">Category: </span>
              {{ $item->product->category->name }}</div>
            <div class="card-text mt-2"><span class="font-weight-bold">Price: </span> {{ $item->product->price }} EUR
            </div>
            <div class="card-text mt-2"><span class="font-weight-bold">Quantity: </span> {{ $item->quantity }}</div>
            <div class="card-text mt-2"><span class="font-weight-bold">Total Price: </span>
              {{ $item->product->price * $item->quantity }}.00 EUR</div>
            <a href="{{ route('product.show', $item->product->id) }}"
              class="btn btn-success btn-block mt-2 mb-3 shadow">View Product</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection