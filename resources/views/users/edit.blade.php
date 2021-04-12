@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Edit Profile</h3>
  </div>

  <form action="{{ route('user.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') ?? $user->email }}" required autocomplete="email" autofocus>

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
        value="{{ old('address') ?? $user->address }}" required autocomplete="address" autofocus>

      @error('address')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
        value="{{ old('phone') ?? $user->phone }}" required autocomplete="phone" autofocus>

      @error('phone')
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
  toastr.info("User updated successfully");
</script>
@endif
@endsection

@endsection