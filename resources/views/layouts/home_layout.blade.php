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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
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
        </nav> --}}

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-weight: bold">Art In Heart</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item dropdown dropdown-slide dropdown-hover">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Discovery
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('discover/featured')}}">Feature Art</a>
                        <a class="dropdown-item" href="{{url('discover/week')}}">Art of The Week</a>
                        <a class="dropdown-item" href="{{url('discover/gift')}}">Gift</a>
                        </div>
                    </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('artist')}}">Artist</a>
                </li>
                <li class="nav-item dropdown dropdown-slide dropdown-hover">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Art Work
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('art_work/all')}}">All Art</a>
                    <a class="dropdown-item" href="{{url('art_work/painting')}}">Painting</a>
                    <a class="dropdown-item" href="{{url('art_work/sculpture')}}">Sculpture</a>
                    <a class="dropdown-item" href="{{url('art_work/photography')}}">Photography</a>
                    </div>
                </li>
                    
                <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
  
        <main class="">
            @yield('home')
        </main>
    </div>
     <!-- Footer -->
     <footer class="py-5 bg-dark">
            <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy; Art In Heart <?php echo date('Y') ?></p>
            </div>
            <!-- /.container -->
          </footer>
    <script>
    $('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
     let dropdown=$(e.target).closest('.dropdown-hover');
      dropdown.addClass('show');
      
    setTimeout(function(){
          dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
      },300);
  });
    </script>
</body>
</html>
