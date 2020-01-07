@extends('frontend.layout')

@section('content')
	<div class="col-md-8">
		<div class="panel-body panel-info panel-bg-black">

		@if(count($reviews))
			<h5>{{ count($reviews) }} {{ str_plural('comments', $reviews->count()) }}</h5>
			<br /><br />
			@foreach($reviews as $review)
			<div class="media">
				  <div class="media-left" style="border:none;">
				    <a href="#">
				      <img class="media-object" src="/images/logo-sm.png" style="border:none;">
				    </a>
				  </div>
				  <div class="media-body" style="padding: 5px 10px;">
				    <h5 class="media-heading">{{ $review->name }} says..</h5>
				    	<small class="date-sm">{{ $review->created_at->toFormattedDateString() }}</small>
				    	<p>{!! $review->comments !!}</p>
				  </div>
				</div>
				{{-- @if(count($review->replies))
					@foreach($review->replies as $reply)
						<p class="text-muted" style="margin: 30px 0px 10px 95px;">{{ $reply->name }} said - {{ $reply->reply }}</p>
					@endforea --}}ch
				@endif
				<br />

				{{-- <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#replyModal">Reply</button> --}}

				<!-- Modal -->
				{{-- <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel" style="color: #000;">Leave a reply</h4>
				      </div>
				      <div class="modal-body">
				        	<form class="form-horizontal" method="post" action="{{  url('reviews/reply/' . $review->id) }}">
								{{ csrf_field() }}
								
								<div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
							        <div class="col-sm-3" style="color: #000;">Comment</div>
							        <div class="col-lg-9">
							        	<textarea name="comments" class=" form-control" rows="13"></textarea>
							            {!! $errors->first('comments', '<span class="help-block">:message</span>') !!}
							        </div>
							    </div>

							    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							        <div class="col-sm-3" style="color: #000;">Your Name</div>
							        <div class="col-lg-9">
							            <input type="text" name="name" class=" form-control" value="{!! old('name') !!}">
							            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
							        </div>
							    </div>

							     <div class="form-group">
							      <div class="col-lg-3">
							         <button class="btn btn-success">Leave Reply</button>
							      </div>
							    </div>
							</form>
				      </div>
				     
				    </div>
				  </div>
				</div> --}}
	      
					    
				<hr />
			@endforeach
		</div>


		<div class="panel-body panel-info panel-bg-black">
			<h4>Leave a comment</h4>
			<p><small>Your email will not be published, all fields are required.</small></p><br />
			<form class="form-horizontal" method="post" action="{{  url('reviews') }}">
				{{ csrf_field() }}
				
				<div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
                    <div class="col-sm-3">Comment</div>
                    <div class="col-lg-9">
                    	<textarea name="comments" class="black-input form-control" rows="13"></textarea>
                        {!! $errors->first('comments', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <div class="col-sm-3">Your Name</div>
                    <div class="col-lg-9">
                        <input type="text" name="name" class="black-input form-control" value="{!! old('name') !!}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>

                 <div class="form-group">
                  <div class="col-lg-3">
                     <button class="btn btn-success">Comment</button>
                  </div>
                </div>

			</form>
		
			@else
				<p>Sorry there are no reviews at this time.</p>
				<div class="panel-body panel-info panel-bg-black">
			<h4>Leave a comment</h4>
			<p><small>Your email will not be published, all fields are required.</small></p><br />
			<form class="form-horizontal" method="post" action="{{  url('reviews') }}">
				{{ csrf_field() }}
				
				<div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
                    <div class="col-sm-3">Comment</div>
                    <div class="col-lg-9">
                    	<textarea name="comments" class="black-input form-control" rows="13"></textarea>
                        {!! $errors->first('comments', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <div class="col-sm-3">Your Name</div>
                    <div class="col-lg-9">
                        <input type="text" name="name" class="black-input form-control" value="{!! old('name') !!}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <div class="col-sm-3">Email</div>
                    <div class="col-lg-9">
                        <input type="text" name="email" class="black-input form-control" value="{!! old('email') !!}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>

                 <div class="form-group">
                  <div class="col-lg-3">
                     <button class="btn btn-success">Comment</button>
                  </div>
                </div>

			</form>
		</div>

			@endif
		</div>
	</div>
@endsection
