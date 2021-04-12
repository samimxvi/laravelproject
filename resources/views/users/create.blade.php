@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
  <div class="d-flex justify-content-between mb-3">
    <h3>Create New User</h3>
    <a href="{{ route('user.list') }}" class="btn btn-secondary shadow align-self-center">
      Back To Users </a>
  </div>

  <form action="{{ route('user.store') }}" method="POST">
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
      <label for="email">Email</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email" autofocus min="0" step="0.01">

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
        value="{{ old('address') }}" required autocomplete="address" autofocus>

      @error('address')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>

      <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
        value="{{ old('phone') }}" required autocomplete="phone" autofocus>

      @error('phone')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="password">Password</label>

      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        value="{{ old('password') }}" required autocomplete="password" autofocus>

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="is_admin">Role</label>
      <select id="is_admin" class="custom-select @error('is_admin') is-invalid @enderror" name="is_admin" required
        autofocus>
        <option value="1">Admin</option>
        <option value="0">User</option>
      </select>

      @error('is_admin')
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