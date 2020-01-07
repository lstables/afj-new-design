@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Video Link
                    </div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="post" action="/admin/video">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-3">Youtube Link</div>
                                <div class="col-lg-7">
                                    <input type="text" name="video_url" class="form-control" value="" autocomplete="off">
                                    <div class="help-block">Embed link from Youtube.</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-3">
                                    <button class="btn btn-success">Create</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection