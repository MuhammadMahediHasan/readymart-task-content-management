@extends('frontend.index')
@section('main_section')
<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
	  	<!-- Post Content Column -->
	  	<div class="col-lg-8 page_details_section">

		    <!-- Title -->
		    <h1 class="mt-4">{{ $data->title }}</h1>
		    <hr>
		    <p>Posted on {{ date('d-F-Y h:i A', strtotime( $data->created_at )) }}</p>
		    <hr>

		    <!-- Preview Image -->
		    @if( $data->video_or_post == 2 )
			<img class="img-fluid rounded" src="{{ asset( $data->file ) }} " alt="Image">
          	@else
          	<div class="main_image">
	    		<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{ $data->file }}/maxresdefault.jpg" alt="Image">
	    		<div class="overlay_image">
	            	<a href="https://www.youtube.com/watch?v={{ $data->file }}" target="_blank">
	              		<img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
	              	</a>
	          	</div>
          	</div>
          	@endif
		    <hr>

		    <!-- Post Details -->
		    <p> {{ $data->description }} </p>
		    <hr>

		    <div class="row">
		    	<div class="col-lg-6"><h4 class="mt-1">Share Now</h4></div>
		    	<div class="col-lg-6">
		    		<ul class="share_now">
				    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				    	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				    	<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				    	<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				    </ul>
		    	</div>
		    </div>
		    <hr>

		    <!-- Comments Form -->
		    <div class="card my-4">
		      <h5 class="card-header">Leave a Comment:</h5>
		      <div class="card-body">
		        <form>
		          <div class="form-group">
		            <textarea class="form-control" rows="3"></textarea>
		          </div>
		          <button type="submit" class="btn btn-primary">Submit</button>
		        </form>
		      </div>
		    </div>

		    <!-- Single Comment -->
		    <div class="media mb-4">
		      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
		      <div class="media-body">
		        <h5 class="mt-0">Commenter Name</h5>
		        Comments
		      </div>
		    </div>
	  	</div>
	</div>
</div>
@stop