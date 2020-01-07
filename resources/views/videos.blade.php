@extends('frontend.layout')

@section('title', 'Videos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="700" height="315" src="https://www.youtube.com/embed/4xTPvW7ONYE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="row">
        @if(count($videos))
            @foreach($videos as $video)
            <div class="col">
                <div class="embed-responsive embed-responsive-16by9 images">
                    <iframe class="embed-responsive-item" width="700" height="315" src="https://www.youtube.com/embed/{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            @endforeach
            {{ $videos->links() }}
        @endif
    </div>
@endsection
