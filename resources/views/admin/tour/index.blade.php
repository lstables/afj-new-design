@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tour Dates
                        <div class="pull-right">
                            <a href="/admin/tour/create" class="btn btn-sm btn-info">Create Date</a>
                        </div>
                    </div>

                    <div class="panel-body">
                    @if(count($tour_dates))
                        <table class="bootstrap-table bootstrap-table-striped">
                            <thead>
                                <tr>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach($tour_dates as $tours)
                            <tbody>
                                <tr>
                                    <td>{!! $tours->venue !!}</td>
                                    <td>{!! $tours->day !!}&nbsp;{!! $tours->month !!}</td>
                                    <td>
                                        <a href="/admin/tour/{{ $tours->id }}/edit" title="Edit" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <form action="/admin/tour/{{ $tours->id }}" method="post">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to remove this?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

                        {{ $tour_dates->render() }}
                        @else
                            <p>Nothing to display</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection