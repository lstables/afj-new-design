@extends('frontend.layout')

@section('title', 'Contact Us')

@section('content')
    <div class="row">

            <div class="col">
                <p>
                    For all bookings and enquiries<br /><br />
                <p><a href="mailto: rickyafj1@gmail.com">rickyafj1@gmail.com</a> - 07947 346956<br />
                    <a href="mailto: firestarmusicgroup@gmail.com">firestarmusicgroup@gmail.com</a> - 07772 682074</p>

                <p><a href="https://s3.eu-west-2.amazonaws.com/afjgallery/GENERIC+NEW+POSTER+FOR+VENUES+AWARDS+BANNER.jpg" target="_blank" class="btn btn-sm btn-light">Download Poster</a><br /><br />
                    <a href="https://s3.eu-west-2.amazonaws.com/afjgallery/B9CC8A19AF8148BCAD89B0F99C593C90.png" target="_blank" class="btn btn-sm btn-light">Info for Venues</a></p>
                </p>
            </div>
            <div class="col">
                <form class="form-horizontal" method="post" action="/contact/send">

                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name') ? 'is-invalid' : '' }}">
                        <div class="col-sm-3">Your Name</div>
                        <div class="col-lg-7">
                            <input type="text" name="name" class="form-control" value="{!! old('name') !!}">
                            {!! $errors->first('name', '<small class="form-text">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'is-invalid' : '' }}">
                        <div class="col-sm-3">Email</div>
                        <div class="col-lg-7">
                            <input type="text" name="email" class="form-control" value="{!! old('email') !!}">
                            {!! $errors->first('email', '<small class="form-text">:message</small>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-3">Phone</div>
                        <div class="col-lg-7">
                            <input type="text" name="phone" class="form-control" value="{!! old('phone') !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-3">Comments</div>
                        <div class="col-lg-7">
                            <textarea name="comments" class="form-control" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-3">
                            <button class="btn btn-outline-light"><i class="fa fa-paper-plane"></i> Send</button>
                        </div>
                    </div>

                </form>
            </div>

    </div>

@endsection
