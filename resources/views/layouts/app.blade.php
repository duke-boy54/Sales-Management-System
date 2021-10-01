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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css\aos.css')}}">
    <link rel="stylesheet" href="{{asset('css\adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css\swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <div class="d-flex flex-column">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Sales and Inventory Management System') }}
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>

    
    <main class="py-4">
        <header>

            <div class="d-flex flex-column nav nav-stacked">
      
          <div class="profile">
            <div class="row">
                <div class="col-2">
                   <nav id="navbar" class="nav-menu navbar-expand bg-dark">
                  <img src="{{ asset('assets\img\logo3.jpg')}}" alt="dash" class="img-circle rounded-circle pl-2" style="height:100px">
                  
              {{-- <nav id="navbar" class="nav-menu navbar bg-dark"> --}}
                  
                <ul>
                  <li><a href="{{url('/home')}}" class="nav-link scrollto "><i class="fas fa-home"></i> <span>Home</span></a></li>
                  <li><a href="{{route('item.index')}}" class="nav-link scrollto"><i class="fas fa-shopping-cart"></i> <span>item </span></a></li>
                  <li><a href="{{ route('sale.index') }}" class="nav-link scrollto"><i class="fas fa-dolly"></i> <span>sales</span></a></li>
                  <li><a href="{{route('purchase.index') }}" class="nav-link scrollto"><i class="fas fa-coins"></i> <span>Purchase</span></a></li>
                  <li><a href="{{route('supplier.index') }}" class="nav-link scrollto"><i class="fas fa-user-circle"></i> <span>supplier</span></a></li>
                  <li><a href="{{route('supplier.index') }}" class="nav-link scrollto"><i class="fas fa-book"></i> <span>Transactions</span></a></li>
                 

                  <ul class="list-unstyled components mb-5">
                    <li>
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chart-bar"></i>Report</a>
                      <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#"><i class="far fa-circle nav-icon"></i>Sales Report</a></li>
                            <li><a href="#"><i class="far fa-circle nav-icon"></i>Purchase Report</a></li>
                            <li><a href="#"><i class="far fa-circle nav-icon"></i>Profit & loss Report</a></li>
                      </ul>
                
                  
                  <li><a href="#contact" class="nav-link scrollto"><i class="fas fa-user-plus"></i> <span>Users</span></a></li>
                </ul>
              </nav><!-- .nav-menu -->
                </div>
            
                <div class="col-10 ml-0 ">
                  <h2 class="mb-4"><marquee behavior="" direction="">Welcome To ESL sales And Inventory Management System</marquee>  </h2>
                   @yield('content')
                </div>
            </div>
            
        </div>
      </header>

    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/popper.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/sweetalert2.js') }}" ></script>
    
</body>
@yield('script')
</html>

