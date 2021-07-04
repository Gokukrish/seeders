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
                         
    <div class="container ">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>
