@extends('layouts.layout')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <div class="card-header bg-light text-gray">
                        Contact Us
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
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea name="msg" class="form-control" required></textarea>
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