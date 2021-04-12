@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
  <h3>My Orders</h3>
</div>

<table id="table" class="table table-hover shadow" style="width:100%">
  <thead class=" bg-primary text-white">
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Phone</th>
      <th>Date</th>
      <th>Items</th>
      <th class="text-right">Total</th>
      <th style="width: 140px;">Actions</th>
    </tr>
  </thead>
  <tbody class="bg-white">
    @foreach ($orders as $order)

    <tr>
      <td class="align-middle">{{ $order->id }}</td>
      <td class="align-middle">{{ $order->user->name }}</td>
      <td class="align-middle">{{ $order->user->phone }}</td>
      <td class="align-middle">{{ $order->date }}</td>
      <td class="align-middle">{{ count($order->orderItems) }}</td>
      <td class="align-middle text-right">{{ $order->total }} EUR</td>
      <td class="d-flex justify-content-between">
        <a href="{{ route('orderItem.index', $order->id) }}" class="btn btn-secondary">Order Items</a>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@section('script')
<script>
  $(document).ready(function () {
    $('#table').DataTable();
  });
</script>

@if($isCreated)
<script>
  toastr.success("Order created successfully");
</script>
@endif
@endsection

@endsection