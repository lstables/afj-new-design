@extends('frontend.layout')

@section('title', $post->title)

@section('content')

    <div class="row">
        <div class="col mb-4 mt-3">
            <div class="row">
                <div class="col mb-2">
                    <small class="float-left">
                        <div class="sharethis-inline-share-buttons"></div>
                    </small>
                </div>
            </div>
            <p>{!! $post->post_body !!}</p>
            @if(! empty($post->img))
                <img class="mr-3 img-fluid" src="{{ $post->img }}" alt="{{ $post->title }}" width="500">
            @endif
        </div>
    </div>

@endsection
