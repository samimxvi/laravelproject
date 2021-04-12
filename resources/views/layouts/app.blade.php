<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/toastr.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body style="background-color: #cbc4b7">
  <div id="app">
    @guest
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-md">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          MuziC
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.index') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.cart') }}">
                Shopping Cart
                <span
                  class="badge-pill badge-success">{{ session()->has('cart') ? session('cart')->totalQuantity : '' }}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    @endguest

    @auth
    @if (Auth::User()->is_admin)
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          AdminPanel
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.index') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.cart') }}">
                Shopping Cart
                <span
                  class="badge-pill badge-success">{{ session()->has('cart') ? session('cart')->totalQuantity : '' }}</span>
              </a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.list') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.list') }}">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('order.list') }}">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('category.list') }}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('tag.list') }}">Tags</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('user.orders') }}">My Orders</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @else
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          Muzio
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.index') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('product.cart') }}">
                Shopping Cart
                <span
                  class="badge-pill badge-success">{{ session()->has('cart') ? session('cart')->totalQuantity : '' }}</span>
            </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Profile</a>
                <a class="dropdown-item" href="{{ route('user.orders') }}">My Orders</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @endif
    @endauth

    <main class="pt-4 container">
      @yield('content')
    </main>
    <footer class="footer text-white">
      <div class="container">
        <div class="col-8 mx-auto">
          <div class="row nav-footer justify-content-start mt-2">
            <div class="col-12 col-lg-4">
              <ul>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('product.index') }}">Products</a></li>
                <li><a href="{{ route('home.contact') }}">Contact</a></li>
                @guest
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                @endguest
                @auth
                <li><a href="{{ route('user.edit') }}">Edit Profile</a></li>
                <li><a href="{{ route('user.orders') }}">My Orders</a></li>
                @endauth
              </ul>
            </div>
            <div class="col-12 col-lg-4">
              <ul>
                <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
                <li><a href="https://www.youtube.com" target="_blank">Youtube</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-4">
              <ul>
                <li>0651234567</li>
                <li>0114567891</li>
                <li>49, Panjab</li>
                <li>India</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  @yield('script')
</body>

</html>