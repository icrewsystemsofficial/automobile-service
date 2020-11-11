@extends('layouts.layout')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <div class="card-header bg-light text-gray">
                         <h4>Send us a message</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message_sent'))
                               <div class="alert alert-success" role="alert">
                                   {{Session::get('message_sent')}}
                               </div>     
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter your name" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your mail" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Enter your contact number" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <textarea name="msg" placeholder="Your message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection