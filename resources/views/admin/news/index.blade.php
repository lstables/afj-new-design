@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        News Posts
                        <div class="pull-right">
                            <a href="/admin/news/create" class="btn btn-sm btn-info">Create Post</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        
                        @if(count($posts))
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Published Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($posts as $post)
                                    <tbody>
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->published_date }}</td>
                                        <td>
                                            <a href="/admin/news/{{ $post->id }}/edit" title="Edit" class="btn btn-sm btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/admin/news/{{ $post->id }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to remove this?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                            {{ $posts->render() }}
                        @else
                            <p>Nothing to display</p>
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection