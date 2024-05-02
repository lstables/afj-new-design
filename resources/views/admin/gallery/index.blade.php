@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gallery Listings
                        <div class="pull-right">
                            <a href="/admin/gallery/create" class="btn btn-sm btn-info">Create New Gallery</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(count($galleries) && ! empty($galleries))
                            <table class="bootstrap-table bootstrap-table-striped">
                                <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>Year</th>
                                    <th></th>
                                </tr>
                                </thead>

                                @foreach($galleries as $gallery)
                                    <tbody>
                                    <tr>
                                        <td>{{ $gallery->location or ''}}</td>
                                        <td>{{ $gallery->year or '' }}</td>
                                        <td><a href="/admin/gallery/edit/{{ $gallery->id }}" class="btn btn-sm btn-danger">Edit</a></td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>

                            {{ $galleries->render() }}
                        @else
                            <p>Nothing to display</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection