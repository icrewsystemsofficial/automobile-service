<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>                          
    <meta name="author" content="Webpixels">
    <title>Car Repair Website</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('theme/assets/css/theme.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://fontawesome.com/"> -->
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbar_1_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                    <a class="dropdown-item" href="#">Oil and Oil Filter</a>
                    <a class="dropdown-item" href="#">Cooling System</a>
                    <a class="dropdown-item" href="#">Air Conditioning Service</a>
                    <a class="dropdown-item" href="#">Fuel/Air Induction Checkup</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Any Other Work?</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="#"><i class="fas fa-cogs"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" id="navbar_1_dropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                    <div class="py-3 px-3">
                        <h5 class="heading h6 mb-0">Notifications</h5>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-img">
                                <span class="avatar bg-purple">JD</span>
                            </div>
                            <div class="list-group-content">
                                <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-img">
                                <span class="avatar bg-pink">TC</span>
                            </div>
                            <div class="list-group-content">
                                <div class="list-group-heading">Tom Cruise <small>10:05 PM</small></div>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-img">
                                <span class="avatar bg-blue">WS</span>
                            </div>
                            <div class="list-group-content">
                                <div class="list-group-heading">Will Smith <small>10:05 PM</small></div>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                    </div>
                    <div class="py-3 text-center">
                        <a href="#" class="link link-sm link--style-3">View all notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">User menu</h6>
                    <a class="dropdown-item" href="#">
                        <span class="float-right badge badge-primary">4</span>
                        <i class="fas fa-envelope text-primary"></i>Messages
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cog text-primary"></i>Settings
                    </a>
                    <div class="dropdown-divider" role="presentation"></div>
                    <a class="dropdown-item" href="{{ route('login') }} ">
                    @if (Route::has('login'))
                     <div>
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">
                        <i class="fa fa-home"></i>Home</a>
                    @else
                      <a href="{{ route('login') }}">Login</a> 
                    @endif
                  </div>
                  @endif
                        <!-- <i class="fas fa-sign-out-alt text-primary"></i>Sign out -->
                    </a>
                </div>
            </li>
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
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
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
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="d-flex align-items-center">
          <span class="">
            &copy; 2018 <a href="https://webpixels.io/" class="footer-link" target="_blank">Webpixels</a>. All rights reserved.
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