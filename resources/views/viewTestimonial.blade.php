@extends('layouts.layout')

@section('content')
<section class="py-5">
    <div class="container">
        
        <div class="row align-items-center mb-5">
                <div class="col-8">
                  <h2 class="heading h3 mb-0">What our clients say</h2>
                </div>
                <div class="col-4 text-right">
                  <a href="add" class="btn btn-sm btn-info text-white">Add your's</a>
                </div>
        </div>

     <div class="row">
         @foreach($data as $item)
         <div class="col-md-4 mb-3">
         <div class="card bg-dark text-center p-4" style="width: 20rem;">
            <div class="card-body">
              <p class="card-text text-muted" style="font-size: 18px; font-weight: bold;">"{{ $item->msg }}"<p>
                <h3 class="text-white">
                  {{$item->name}}
                </h3>
            </div>
        </div>
      </div>
         @endforeach
     </div>
    </div>
</section>

@endsection