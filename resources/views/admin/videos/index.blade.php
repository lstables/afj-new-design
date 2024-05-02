@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Videos
                        <div class="pull-right">
                            <a href="/admin/video/create" class="btn btn-sm btn-info">Create</a>
                        </div>
                    </div>

                    <div class="panel-body">

                        @if(count($videos))
                            <table class="bootstrap-table bootstrap-table-striped">
                                <thead>
                                <tr>

                                    <th>Video</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($videos as $video)
                                    <tbody>
                                    <tr>
                                        <td><iframe width="100" height="100" src="https://www.youtube.com/embed/{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>

                                        </td>
                                        <td>
                                            <form action="/admin/video/{{ $video->id }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to remove this?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                            {{ $videos->render() }}
                        @else
                            <p>Nothing to display</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection