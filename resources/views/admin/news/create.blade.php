@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create News Post
                    </div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="post" action="/admin/news" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-3">News Title</div>
                                <div class="col-lg-7">
                                    <input type="text" name="title" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">URL</div>
                                <div class="col-lg-7">
                                    <input type="text" name="url" class="form-control" value="" autocomplete="off">
                                    <div class="help-block">This can be a link to articles etc.</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Youtube Link</div>
                                <div class="col-lg-7">
                                    <input type="text" name="video_url" class="form-control" value="" autocomplete="off">
                                    <div class="help-block">Embed link from Youtube.</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Post Content</div>
                                <div class="col-lg-7">
                                    <textarea name="post_body" class="form-control" rows="15" id="redactor"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Image</div>
                                <div class="col-lg-7">
                                    <input type="file" name="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Published Date</div>
                                <div class="col-lg-7">
                                    <input type="text" name="published_date" class="form-control" value="" autocomplete="off" id="datepicker">
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
