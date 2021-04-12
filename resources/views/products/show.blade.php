@extends('layouts.app')

@section('content')
<div>
  <div class="d-flex justify-content-between mb-3">
    <h3>{{ $product->title }}</h3>
    <a href="{{ route('product.index') }}" class="btn btn-secondary shadow align-self-center">
      Back To Products </a>
  </div>
  <div class="row">
    <div class="col-12 col-lg-5">
      <img src="/storage/{{ $product->image }}" class="img-responsive mw-100" />
    </div>
    <div class="col-12 col-lg-7">
      <h4>Price: <span>{{ $product->price }}</span> RSD</h4>
      @if($product->quantity > 0)
      <h5 class="text-success">Available</h5>
      @else
      <h5 class="text-danger">Not Available</h5>
      @endif
      <a href="{{ route('product.addToCart', $product->id) }}" class="btn btn-success">+ Add to Cart</a>
      <h5 class="mt-2">Category: {{ $product->category->name }}</h5>
      <h5 class="mt-2">Description:</h5>
      <p>{{ $product->description }}</p>
    </div>
  </div>

  <h3 class="mt-4">Details</h3>
  <table class="table table-hover">
    <thead class="table-primary">
      <tr>
        <th scope="col">Tag</th>
        <th scope="col">Info</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product->infos as $info)
      <tr>
        <th>{{ $info->tag->name }}</th>
        <td>{{ $info->value }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection