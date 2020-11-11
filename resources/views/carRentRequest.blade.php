@extends('layouts.layout')

@section('content')
<section>
    <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <div class="card-header bg-light text-gray">
                        <h3>Car Rent</h3>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message_sent'))
                               <div class="alert alert-success" role="alert">
                                   {{Session::get('message_sent')}}
                               </div>     
                        @endif
                        <form action="{{ route('car.request') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter your name" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Enter your phone" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Type of car you need?" name="cartype" class="form-control" />
                        </div>

                        <div class="form-group">
                            <textarea name="addr" placeholder="Your address" class="form-control" required></textarea>
                        </div>
                        

                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection