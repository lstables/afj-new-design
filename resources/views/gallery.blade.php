@extends('frontend.layout')

@section('title', 'Gallery')

@section('content')
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col">
            <div class="card card-deck navbar-dark">
                <div class="card-body">
                    <a href="/gallery/{{ $gallery->location }}">
                        <img src="{{ $gallery->payload }}?w=300&h=300&fit=crop" class="images"><br />
                        {{ ucwords($gallery->location) }} {{ $gallery->year }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
