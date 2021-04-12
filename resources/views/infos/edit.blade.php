@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Edit Product Info</h3>
    <a href="{{ route('product.list') }}" class="btn btn-secondary shadow align-self-center">
      Back To Products</a>
  </div>

  <form action="{{ route('info.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    @foreach($infos as $info)
    <div class="form-group">
      <input type="hidden" name="ids[]" value="{{ old('id') ?? $info->id }}">
      <label for="value-{{ $info->id }}">{{ $info->tag->name }}</label>
      <input id="value-{{ $info->id }}" type="text" class="form-control @error('value') is-invalid @enderror"
        name="values[]" value="{{ old('value') ?? $info->value }}" required autocomplete="value" autofocus>

      @error('value')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    @endforeach

    <div class="form-group">
      <button type="submit" class="btn btn-success btn-lg px-5 shadow">Update</button>
    </div>
  </form>
</div>

@section('script')
@if($isUpdated)
<script>
  toastr.success("Info updated successfully");
</script>
@endif
@endsection
@endsection