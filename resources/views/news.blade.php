@extends('frontend.layout')

@section('title', 'News')

@section('content')

@if(count($posts))
    @foreach($posts as $post)
    <div class="media">
        @if(! empty($post->img))
            <img class="mr-3 img-fluid rounded" src="{{ $post->img }}" alt="{{ $post->title }}" width="250">
        @else
            <img class="mr-3 img-fluid" src="/images/no-image.png">
        @endif
        <div class="media-body">
            <div class="row">
               <div class="col mb-2">
                   <small class="float-left">
                       <div class="sharethis-inline-share-buttons"></div>
                   </small>
               </div>
            </div>
            <h5 class="mt-0">{{ $post->title }}</h5>
            <h6 class="text-muted">Posted on {{ $post->published_date->toFormattedDateString() }}</h6>

            <p>{!! str_limit($post->post_body, 150, '...') !!}</p>

            @if(! empty($post->video_url))
                <div class="embed-responsive embed-responsive-16by9 images">
                    <div class="fb-video" data-href="{{ $post->video_url }}" data-width="500" data-show-text="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="{{ $post->video_url }}">
                                <a href="{{ $post->video_url }}">Share</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            @endif
            <a href="{{ url('news/article/' . $post->slug) }}">Read More &raquo;</a>
        </div>
    </div>
    <hr class="line" />
    @endforeach
@endif

@endsection
