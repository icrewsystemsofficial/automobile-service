@extends('layouts.layout')

@section('content')
<section>
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <div class="card-header bg-light text-gray">
                       <h3>Say your experience with us</h3>
                    </div>
                    <div class="card-body">
                        @if(Session::has('added'))
                               <div class="alert alert-success" role="alert">
                                   {{Session::get('added')}}
                               </div>     
                        @endif
                        <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your name" class="form-control" required />
                        </div>
                        
                        <div class="form-group">
                            <textarea name="msg" placeholder="Your message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection