@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Edit Category</h3>
    <a href="{{ route('category.list') }}" class="btn btn-secondary shadow align-self-center">
      Back To Categories </a>
  </div>

  <form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') ?? $category->name }}" required autocomplete="name" autofocus>

      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success btn-lg px-5 shadow">Update</button>
    </div>
  </form>
</div>

@section('script')
@if($isUpdated)
<script>
  toastr.success("Category updated successfully");
</script>
@endif
@endsection

@endsection