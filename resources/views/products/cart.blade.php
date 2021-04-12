@extends('layouts.app')

@section('content')
<div>
  @if(session()->has('cart'))
  <div class="d-flex justify-content-between mb-3">
    <h2>Cart</h2>
    <a href="{{ route('product.clearCart') }}" class="btn btn-warning shadow align-self-center">Clear cart</a>
  </div>
  <table class="table table-hover">
    <thead class="table-primary">
      <tr>
        <th style="width: 20px;">Number</th>
        <th scope="col">Product</th>
        <th scope="col">Category</th>
        <th scope="col" style="width: 120px;">Price</th>
        <th scope="col" style="width: 60px;">Quantity</th>
        <th scope="col" style="width: 200px;">Remove</th>
      </tr>
    </thead>
    <tbody class="bg-white cart-items">
      @foreach($products as $product)
      <tr class="cart">
        <td class="align-middle">{{ $num++ }}</td>
        <td class="align-middle">{{ $product['item']['title'] }}</td>
        <td class="align-middle">{{ $product['item']['category']['name'] }}</td>
        <td class="text-right align-middle price">{{ $product['item']['price'] }} EUR</td>
        <td class="text-right align-middle price">{{ $product['quantity'] }}</td>
        <td class="align-middle">
          <a href="{{ route('product.removeFromCart', $product['item']['id']) }}" class="btn btn-danger remove">Remove
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="/checkout" class="btn btn-primary btn-lg">Checkout</a>

  @else
  <h2>Cart</h2>
  <h4 class="text-danger">Cart is empy. Add some products.</h4>

  @endif
</div>

@section('script')
@if($isRemoved)
<script>
  toastr.success("Product removed from cart successfully");
</script>
@endif

@if($isCleared)
<script>
  toastr.success("Cart cleared successfully");
</script>
@endif
@endsection

@endsection