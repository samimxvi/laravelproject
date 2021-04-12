@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Create New Category</h3>
    <a href="{{ route('category.list') }}" class="btn btn-secondary shadow align-self-center">
      Back To Categories </a>
  </div>

  <form action="{{ route('category.store') }}" method="POST">
    @csrf

    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus>

      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success btn-lg px-5 shadow">Create</button>
    </div>
  </form>
</div>
@endsection