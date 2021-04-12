@extends('layouts.app')

@section('content')
<div>
  <div class="d-flex justify-content-between mb-3">
    <h3>Checkout</h3>
    <a href="{{ route('product.cart') }}" class="btn btn-secondary shadow align-self-center">
      Back To Cart </a>
  </div>

  @if(session()->has('cart'))
  <form action="/order" method="POST">
    @csrf

    <table class="table table-hover shadow">
      <thead class="table-primary">
        <tr>
          <th style="width: 20px;">Number</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col" style="width: 140px;">Price</th>
          <th scope="col" style="width: 80px">In Stock</th>
          <th style="width: 100px" scope="col">Quantity</th>
          <th scope="col" style="width: 140px;">Full Price</th>
        </tr>
      </thead>
      <tbody class="bg-white cart-items">
        @foreach($products as $product)
        <tr class="cart">
          <td>{{ $num++ }}</td>
          <td class="align-middle">{{ $product['item']['title'] }}</td>
          <td class="align-middle">{{ $product['item']['category']['name'] }}</td>
          <td class="text-right align-middle price">{{ $product['item']['price'] }} EUR</td>
          <td class="text-right align-middle">{{ $product['item']['quantity'] }}</td>
          <td class="align-middle"><input type="number" class="w-100 cart-item-quantity"
              value={{ $product['quantity'] }} name="quantity-{{ $product['item']['id'] }}" min="1"
              max="{{ $product['item']['quantity'] }}" />
          </td>
          <td class="text-right align-middle full-price">{{ $product['price'] }} EUR</td>
        </tr>
        @endforeach
        <tr class="table-primary" id="last-row">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="text-right">TOTAL: </td>
          <td class="text-right" id="total">{{ $totalPrice }} EUR</td>
        </tr>
      </tbody>
    </table>

    <input type="hidden" name="total" id="inputTotal" value="{{ $totalPrice }}" />
    <button type="submit" class="btn btn-success btn-lg">Make Order</button>
  </form>
  @endif

</div>

@endsection