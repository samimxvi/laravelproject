@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Create New Product</h3>
    <a href="{{ route('product.list') }}" class="btn btn-secondary shadow align-self-center">
      Back To Products </a>
  </div>

  <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
        value="{{ old('title') }}" required autocomplete="title" autofocus>

      @error('title')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="price">Price <span class="text-muted">(in EUR)</span></label>
      <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price"
        value="{{ old('price') }}" required autocomplete="price" autofocus min="0" step="0.01">

      @error('price')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity"
        value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

      @error('quantity')
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

    <div class="custom-file">
      <input type="file" class="custom-file-input" id="image" name="image">
      <label for="image" class="custom-file-label">Choose Image...</label>

      @error('image')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group pt-3">
      <label for="description">Description</label>
      <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
        rows="3" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

      @error('description')
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

@section('script')
<script>
  $(document).ready(function () {
      $('.custom-file-input').on("change", function () {
          var fileName = $(this).val().split("\\").pop();
          $(this).next('.custom-file-label').html(fileName);
      });
  });
</script>
@endsection