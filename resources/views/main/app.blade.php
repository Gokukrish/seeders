<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ url('css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ url('css/base.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Agri</title>
</head>

<body> 
    <section class="wrapper header-wrapper">
        <div class="container header-container">
            <h1 class="logo">
                <a href="http://agri.py.gov.in" alt="Department of Agriculture &amp; Farmers Welfare, Government of Puducherry">
                <strong>வேளாண் மற்றும் விவசாயிகள் நலத்துறை</strong> 
                  <span>DEPARTMENT OF AGRICULTURE &amp; FARMERS WELFARE</span>
               Government of Puducherry
                </a>
                </h1>
                </h1>
                <div class="header-right clearfix">
                    <div class="right-content clearfix">
                        <div class="float-element">
                        <img src="{{ URL::asset('/images/farm.png') }}" alt="Farm Fest Logo">
                            <a class="sw-logo" target="_blank" onclick="return external_alert()" href="https://swachhbharat.mygov.in/"><img src="{{ URL::asset('/images/swach-bharat.png') }}" alt="Swachh Bharat"></a>
                             <img src="{{ URL::asset('/images/pdy.png') }}" alt="Puducherry Portal">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    AGRICULTURE DEPARTMENT
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
                         
    <div class="container ">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>
