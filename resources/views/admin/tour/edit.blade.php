@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Date for "{{ $tour->name }}"
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="/admin/tour/{{ $tour->id }}">
                            <input type="hidden" name="_method" value="PUT">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-3">Venue Name</div>
                                <div class="col-lg-7">
                                    <input type="text" name="name" class="form-control" value="{{ $tour->name }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Venue Location</div>
                                <div class="col-lg-7">
                                    <input type="text" name="venue" class="form-control" value="{{ $tour->venue }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Date</div>
                                <div class="col-lg-7">
                                    <input type="text" name="date" class="form-control" value="{{ $tour->date }}" autocomplete="off" id="datepicker">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Ticket URL</div>
                                <div class="col-lg-7">
                                    <input type="text" name="ticket_url" class="form-control" value="{{ $tour->ticket_url }}" autocomplete="off">
                                    <div class="help-block">The ticket link i.e http://ticketmaster.com/afj/2017/tickets.htm etc</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Box Office No</div>
                                <div class="col-lg-7">
                                    <input type="text" name="box_no" class="form-control" value="{{ $tour->box_no }}" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-3">
                                    <button class="btn btn-success">Update</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection