<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- script --}}
{{-- <script src="{{asset('dashboard/vendor/jquery/jquery.min.js')}}"></script> --}}
      <script src="{{asset('dashboard/js/bootbox.min.js')}}"></script>
    <script src="{{asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('dashboard/vendor/datatables/jquery.dataTables.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('dashboard/vendor/datatables/jquery.dataTables.js')}}vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{asset('dashboard/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('dashboard/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('dashboard/js/sb-admin-datatables.min.js')}}"></script>
    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{-- css --}}
<link href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
<link href="{{asset('dashboard/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('dashboard/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
<link href="{{asset('dashboard/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
