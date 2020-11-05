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
                <div class="col-7">
                  <div class="text-center mt-5">
                    <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
                      <span class="font-weight-700">Billy's</span> Auto Services
                    </h2>
                    <p class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp" data-animation-delay="2500">
                    We are a family-owned business offering professional automotive repair and auto maintenance services in a friendly atmosphere.        
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

<section class="slice slice-lg">
    <div class="container">
      <div class="row mb-4 mt-10">
          <div class="ml-auto mr-auto">
              <h1 class="heading h1 mb-0 ">Services We Offer</h1>
          </div>
      </div>
         <div class="d-flex ">      
            <div class="col-3">
                <div class="card" style="width: 16rem">
                    <img class="card-img-top" src="//res2.weblium.site/res/5c5a122f3e1ac40022940561/5c600e2ae692c00022c41d49_optimized_1662_c1397x929-0x109" alt="Card image cap" class="img-fluid">
                       <div class="card-body">
                            <h5 class="card-title">Oil and Oil Filter Service</h5>
                            <p class="card-text mb-1">To maximize the protection of your vehicle, you should regularly change the oil and oil filter, at least every 3 months. Our auto technicians can easily help you</p>
                            <a href="#">Learn More</a>
                       </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="//res2.weblium.site/res/5c5a122f3e1ac40022940561/5c60133e1413f20023023f58_optimized_1396" alt="Card image cap" class="img-fluid">
                       <div class="card-body">
                            <h5 class="card-title">Cooling System</h5>
                            <p class="card-text">Our team can quickly fix the cooling system of your engine: flush it, check connections, hoses, and cap, and also conduct a pressure test.</p>
                            <a href="#">Learn More</a>
                       </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="//res2.weblium.site/res/5c5a122f3e1ac40022940561/5c601318b004200029f474bb_optimized_1920_c1391x927-264x97" alt="Card image cap" class="img-fluid">
                       <div class="card-body">
                            <h5 class="card-title">Air Conditioning Service</h5>
                            <p class="card-text">Our professional technicians will examine your car’s air conditioner, replace the lubricating oil, and carry out a system leak test.</p>
                            <a href="#">Learn More</a>
                       </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="//res2.weblium.site/res/5c5a122f3e1ac40022940561/5c6302bfe692c00022c7159c_optimized_1270" alt="Card image cap" class="img-fluid">
                       <div class="card-body">
                            <h5 class="card-title">Fuel/Air Induction Cleanup</h5>
                            <p class="card-text">With the help of the specialized equipment, our technicians will do all the needed cleaning. They will take care of intake valves and manifolds.</p>
                            <a href="#">Learn More</a>
                       </div>
                </div>
            </div>
         </div>
    </div>
</section>

<!-- <section class="bg-light">
    <div class="container">
    <div class="row mb-4 ">
          <div class="ml-auto mr-auto">
              <h1 class="heading h1 mb-0">Why Choose Us</h1>
          </div>

      </div>
    </div>
</section> -->
<section class="bg-light">
    <div class="container">
    <div class="column mb-4 mt-10">
          <div>
              <h1 class="heading text-center h1 mb-0 ">See Our Work In Action</h1>
          </div>
          <div class="">
              <img src="//res2.weblium.site/res/5c5a122f3e1ac40022940561/5c62da03e692c00022c6eed2_optimized_1395_c1395x930-0x0" alt="" style="height: 600px">
          </div>
      </div>
    </div>
</section>
</div>
@endsection