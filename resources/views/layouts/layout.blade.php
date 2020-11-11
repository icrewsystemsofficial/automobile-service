<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="billy autoservices in chennai,billy autoservices,billy automivie service,onlie car repair request sevices, car repair service,automobile services, oil services,car customizing, car customization,autmobile painting services,automobile workshop near me,car rental services near me, car rental service,car garage ,fuel induction cleaning service, cooling system service, car air cooler serivce near me, car repair services in chennai, automobile garage in chennai, billy autoservices in chennai , billy's auto services in india, count kustoms, ricks restoration , car restoring service, workshop, car garage , car rental for low price,  car rental for long trips , luxury car's for rental , luxury car's rental for low price, paint job work for low price , best automobile workshop in chennai, best automobile workshop near me, best oil and oil filter services near me, best fuel induction cleanup near me, mechanics near me , meachnical workshop near me, best mechanical work shop, mechanical work for low cost">                        
    <meta name="author" content="Thirumalai Raj">
    <title>Billy's Auto serivce</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('theme/assets/css/theme.css') }}" rel="stylesheet">
    <link rel="text/css" href="{{ asset('theme/assets/css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/14f3a83351.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fontawesome.com/">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Billy Auto Services</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_example_1" aria-controls="navbar_example_1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar_example_1">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }} ">Home<span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="about us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewtestimonial') }}">Testimonials</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbar_1_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                    <a class="dropdown-item" href="{{ route('repairwork') }}">Repair work</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('carrent') }}">Need a Car?</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          @guest
           @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login')}}">{{ __('Login') }}</a>
            </li>
            @endif
            
            @if(Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else

            <li class="nav-item dropdown">
              <a href="#" id="navbarDropdown" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <i class="fas fa-user mr-1"></i>  {{ Auth::user()->name}}
               <i class="fas fa-caret-down ml-1"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}" style="margin-left: 10px" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                 {{ __('Logout')}}        
                </a>

                <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
     </nav>
  </header>

    <div class="app">
     @yield('content')
    </div>


    <footer class="pt-5 pb-3 footer  footer-dark bg-tertiary">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="pr-lg-5">
              <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>Billy's</strong>Auto Services</h1>
              <p>Billy’s Auto Services has been one of the best auto repair shops in NYC for over 28 years.</p>
            </div>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Service</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Oil and Oil Filter Service</a></li>
              <li><a class="text-muted" href="#">Air Conditioning Service</a></li>
              <li><a class="text-muted" href="#">Fuel Induction Clean up </a></li>
              <li><a class="text-muted" href="#">Car Cutomization</a></li>
              <li><a class="text-muted" href="#">Car Rental</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Solutions</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
    
        </div>
        <hr>
        <div class="d-flex align-items-center">
          <span class="">
            &copy; 2020 <a href="https://webpixels.io/" class="footer-link" target="_blank">Billy Auto Services</a>. All rights reserved.
          </span>
          <ul class="nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://facebook.com/webpixels" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/webpixels" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank"><i class="fab fa-dribbble"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="{{ asset('theme/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- FontAwesome 5 -->
    <script src="{{ asset('theme/assets/vendor/fontawesome/js/fontawesome-all.min.js') }}" defer></script>
    <!-- Page plugins -->
    <script src="{{ asset('theme/assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/input-mask/input-mask.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/nouislider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('theme/assets/vendor/textarea-autosize/textarea-autosize.min.js') }}"></script>
    <!-- Theme JS -->
   
</body>
</html>