@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Create New Tag</h3>
    <a href="{{ route('tag.list') }}" class="btn btn-secondary shadow align-self-center">
      Back To Tags </a>
  </div>

  <form action="{{ route('tag.store') }}" method="POST">
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
      <label for="category_id">Category</label>
      <select id="category_id" class="custom-select @error('category') is-invalid @enderror" name="category_id" required
        autofocus>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>

      @error('category')
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