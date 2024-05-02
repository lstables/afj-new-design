@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mailing List
                        <div class="pull-right"><a href="">Create</a></div>
                    </div>

                    <div class="panel-body">
                    @if(count($lists))
                        <table class="bootstrap-table bootstrap-table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Date Joined</th>
                                </tr>
                            </thead>

                            @foreach($lists as $list)
                            <tbody>
                                <tr>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->email }}</td>
                                    <td>{{ $list->location }}</td>
                                    <td>{{ $list->created_at }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

                        {{ $lists->render() }}
                    @else
                        <p>Nothing to display</p>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection