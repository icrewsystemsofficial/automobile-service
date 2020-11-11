@extends('layouts.layout')

@section('content')
<div>
<section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" 
 style="background-image: url('{{ asset('theme/assets/images/backgrounds/img-1.jpg') }}')">
        <!-- <span class="mask bg-primary alpha-7"></span> -->
        <div class="spotlight-holder py-lg pt-lg-xl">
          <div class="container d-flex align-items-center no-padding">
            <div class="col">
              <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                <div class="col-md-7">
                  <div class="text-center mt-5">
                    <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
                      <span class="font-weight-400" style="font-size: 75px;">Billy's</span> Auto Services
                    </h2>
                    <p class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp" data-animation-delay="2500" style="font-size: 22px;">
                    We are a family-owned business offering professional automotive repair and auto maintenance services in a friendly atmosphere.        
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

<!-- services we offer -->
<section>
    <div class="py-5">
        <div class="container">
           <h1 class="text-center mb-5" style="font-size: 45px;">Our Services</h1>
          <div class="row mx-auto">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block" src="{{ asset('theme/assets/images/prv/img-1.jpg') }} " alt="thumbnail">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Oil and Oil filter service</h3>
                    </div>
                    <p>To maximize the protection of your vehicle, you should regularly change the oil and oil filter, at least every 3 months. Our auto technicians can easily help you.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block" src="{{ asset('theme/assets/images/prv/img-2.jpg') }}" alt="thumbnail">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Cooling System Service</h3>
                    </div>
                    <p>Our team can quickly fix the cooling system of your engine: flush it, check connections, hoses, and cap, and also conduct a pressure test.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block" src="{{ asset('theme/assets/images/prv/img-3.jpg') }}" alt="thumbnail">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Air Conditioning Service</h3>
                    </div>
                    <p>Our professional technicians will examine your car’s air conditioner, replace the lubricating oil, and carry out a system leak test.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block" src="{{ asset('theme/assets/images/prv/img-4.jpg') }}" alt="thumbnail">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Fuel Induction Cleanup</h3>
                    </div>
                    <p>With the help of the specialized equipment, our technicians will do all the needed cleaning. They will take care of intake valves and manifolds.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block" src="{{ asset('theme/assets/images/prv/img-5.jpg') }}" alt="thumbnail">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Car Customizing</h3>
                    </div>
                    <p>Feeling your Car is looking bored?.Our team is here to help you out. Bring your car to our garage and see the results.</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block" src="{{ asset('theme/assets/images/prv/img-6.jpg') }} " alt="thumbnail">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>Car Rental Service</h3>
                    </div>
                    <p>Are you gonna take your horse to the Old Town Road? But don't have car. No worries we provide you a car rental service for your trip at low cost.</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

<!-- process section -->
<section class="bg-light ">
  <div class="container">
    <h1 class="text-center" style="font-size: 45px;">Our Process</h1>
    <div class="row mx-auto p-5">
      <div class="col-md-4">
        <h3> 
          <span style="color: tomato">1.</span>
          Choose a Service
        </h3>
      </div>
      <div class="col-md-4 ">
        <h3> 
          <span style="color: tomato;">2.</span>
         Confirm a Request
        </h3>
      </div>
      <div class="col-md-4 ">
        <h3> 
          <span style="color: tomato;">3.</span>
          Get Your Car
        </h3>
      </div>
    </div>
  </div>
</section>

<!-- why choose us -->
<section>
  <div class="py-5">
    <div class="container">
      <div class="text-center mb-5"><h1>Why Choose Us</h1></div>
        <div class="row mx-auto">
          <div class="col-md-4">
            <div class="text-center">
              <i class="fas fa-hand-holding-heart fa-7x"></i>
              <h5>Friendly and Honest Service</h5>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center">
              <i class="fas fa-fire fa-7x"></i>
              <h5>24/7 Emergency Vehicle Repair</h5>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center">
              <i class="fas fa-couch fa-7x "></i>
              <h5>Comfortable Waiting Area with Free WiFi</h5>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center">
            <i class="fas fa-tools fa-7x"></i>
              <h5>Ase Certified Technicians</h5>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="text-center">
            <i class="fas fa-award fa-7x"></i>
              <h5>12-Month/12,000 Mile Warranty</h5>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="text-center">
            <i class="far fa-handshake fa-7x"></i>
              <h5>Clients Trust Us for Over 28 Years</h5>
            </div>
          </div>
          
        </div>
    </div>
  </div>
</section>

<!-- about us -->
<section class="about_section">
  <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 d-flex flex-column justify-content-center">
        <img class="img-fluid" src="{{ asset('theme/assets/images/backgrounds/about.jpg') }}">
        </div>
        <div class="col-sm-12 col-md-6 d-flex flex-column justify-content-center">
          <h1 class="mb-3" style="font-size: 35px;">Shortly About Us</h1>
          <p style="font-size: 20px;" >Billy’s Auto Services is one of the oldest and the most qualified auto body and repair shops in New York City. Our team of highly-trained and certified auto technicians has years of practical experience. We do our best to satisfy our clients, providing high-quality customer service and always strive for excellent results.
        </p>
        <p style="font-size: 20px;" >We serve all the vehicle brands and can guarantee the highest level of service at reasonable prices.</p>
        </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-5">
  <div class="container">
    <h1 class="text-center">Testimonials</h1>
    <div class="row mx-auto">
      <div class="col-md-4 mb-3">
        <div class="card bg-dark text-center p-4" style="width: 20rem;">
            <div class="card-body">
              <p class="card-text text-muted" style="font-size: 18px; font-weight: bold;">"My car’s engine got too noisy, so I decided to get it checked up. Billy’s Auto Services did a great job: ran a thorough diagnostics and updated all the engine management software. One of the fastest and cheapest engine checks I’ve ever had. Brilliant!"<p>
                <h3 class="text-white">
                  <span style="font-size: 18px; font-weight: bold;">October 28 2020</span><br>
                  Amanda 
                </h3>
            </div>
        </div>
      </div>
      <div class="col-md-4  mb-3">
        <div class="card bg-dark text-center p-4" style="width: 20rem;">
            <div class="card-body">
              <p class="card-text text-muted" style="font-size: 18px; font-weight: bold;">"My car’s engine got too noisy, so I decided to get it checked up. Billy’s Auto Services did a great job: ran a thorough diagnostics and updated all the engine management software. One of the fastest and cheapest engine checks I’ve ever had. Brilliant!"<p>
                <h3 class="text-white">
                  <span style="font-size: 18px; font-weight: bold;">October 25 2020</span><br>
                 John Doe
                </h3>
            </div>
        </div>
      </div>
      <div class="col-md-4  mb-3">
        <div class="card bg-dark m text-center p-4" style="width: 20rem;">
            <div class="card-body">
              <p class="card-text text-muted" style="font-size: 18px; font-weight: bold;">"My car’s engine got too noisy, so I decided to get it checked up. Billy’s Auto Services did a great job: ran a thorough diagnostics and updated all the engine management software. One of the fastest and cheapest engine checks I’ve ever had. Brilliant!"<p>
                <h3 class="text-white">
                  <span style="font-size: 18px; font-weight: bold;">October 15 2020</span><br>
                  Jeff Gordon
                </h3>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- partners section -->
<section class="bg-light mb-5" >
    <div class="contianer"> 
      <h1 class="text-center">Our Partners</h1>
      <div class="row mx-auto py-2">
        <div class="col-md-4 mb-5">
          <center>
            <img src="{{ asset('theme/assets/images/brand/benz.png') }}"  alt="benz logo">
          </center>
        </div>
        <div class="col-md-4 mb-5">
          <center>
            <img src="{{ asset('theme/assets/images/brand/lukoil.png') }}" alt="lukoil logo">
          </center>
        </div>
        <div class="col-md-4 mb-5">
          <center>
            <img src="{{ asset('theme/assets/images/brand/mobil.png') }}" alt="mobil logo">
          </center>
        </div>
      </div>
    </div>
</section>

</div>
@endsection