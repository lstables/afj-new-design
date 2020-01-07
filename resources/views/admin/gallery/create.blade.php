@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create New Gallery
                    </div>

                    <div class="panel-body">

                        <form action="/admin/gallery/upload" method="post" class="form-horizontal" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-3">Gallery Year</div>
                                <div class="col-lg-7">
                                    <input type="text" name="year" class="form-control" value="2017" id="year" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Location</div>
                                <div class="col-lg-7">
                                    <input type="text" name="location" class="form-control" id="location" value="" autocomplete="off" placeholder="example: sheffield, london">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-lg-7">
                                    {{--{!! Form::file('file') !!}--}}
                                    <div id="app" class="dropzone"></div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="col-lg-3">
                                 <button class="btn btn-success">Upload</button>
                              </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
   <script>
       Dropzone.autoDiscover = false;

       $(document).ready(function() {
           $("div#app").dropzone({
               url: "/admin/gallery/upload",
               maxFilesize: 150,
               autoDiscover: false,
               autoProcessQueue: false,
               uploadMultiple: true,
               parallelUploads: 200,
               addRemoveLinks: true,
               acceptedFiles: 'image/*',
               createImageThumbnails: true,

               init: function() {

                   /** define */
                   var submitButton = $(".btn-success");
                   var thisDropzone = this;

                   /** onclick event */
                   submitButton.on("click", function (event) {

                       /** prevent submission of form */
                       event.preventDefault();

                       /** process dropzone queue and form data */
                       thisDropzone.processQueue();
                   });


                   this.on("sending", function(file, xhr, formData) {
                       formData.append('year', $("#year").val());
                       formData.append('location', $("#location").val());
                   });

                   this.on("complete", function(xhr, formData) {

                       swal(
                           {
                               title: "Success",
                               text: "Files successfully uploaded",
                               type: "success",
                               timer: 3000,
                               showConfirmButton: false
                           },
                           setTimeout(function () {
                               location.reload();
                           }, 2400)
                       );
                   });

                   this.on("error", function(xhr, formData) {
                       swal(
                           {
                               title: "Whoops!",
                               text: "Files not uploaded, there was a problem.",
                               type: "error",
                               timer: 3000,
                               showConfirmButton: false
                           },
                           setTimeout(function () {
                               location.reload();
                           }, 2000)
                       );
                   });
               }
           });
       });

   </script>
@endsection