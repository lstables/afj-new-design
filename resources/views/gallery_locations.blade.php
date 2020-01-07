@extends('frontend.layout')

@section('title', $name->location)

@section('content')
    <div class="row">
        <div class="col">
            <a href="/gallery" class="btn btn-sm btn-outline-secondary">&laquo; back to gallery</a>
        </div>
    </div>
    <hr />
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col col-xs-12">
            <a href="{{ $gallery->payload }}" data-lightbox="{{ $gallery->location }}"><img src="{{ $gallery->payload }}?w=300&h=300&fit=crop" class="images"><br /><br /></a>
        </div>
        @endforeach
        {{ $galleries->links() }}
    </div>
@endsection
