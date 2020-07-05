@extends('frontend.index')
@section('main_section')

<!-- Page Content -->
    <div class="container" id="AppHome">
      <div class="row">
        <!-- Section One -->
        <div class="col-lg-8 section-1">
          <div class="row">
              <div class="col-lg-7 section-1-lg">
              	@foreach( $section1 as $key => $value )
              	@if( $loop->first )

              	@php
              		$section_one_first_data = $section1->first();
              	@endphp

                <div class="main_image">
                	@if( $section_one_first_data['video_or_post'] == 2 )
                  	<img class="img-fluid rounded" src="{{ asset($section_one_first_data['file']) }} " alt="Image">
                  	@else
                  	<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{$section_one_first_data['file']}}/maxresdefault.jpg" alt="Image">
                  	@endif

                  	@if( $section_one_first_data['video_or_post'] == 1 )
                  	<div class="overlay_image">
	                	<a href="https://www.youtube.com/watch?v={{ $value['file'] }}" target="_blank">
                      		<img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
                      	</a>
                  	</div>
                  	@endif
                  	<a href="/post_details/{{ $section_one_first_data['id'] }}">
                  		<p> {{ substr($section_one_first_data['title'], 0, 30).'...' }} </p>
                  	</a>
                </div>
                @endif
                @endforeach
                
              </div>
              <div class="col-lg-5">
                <div class="row">
                	@foreach($section1 as $key => $value)
                	@if ($loop->first) @continue @endif
                  	<div class="col-lg-6 section-1-sm">
                  		<div class="main_image">
		                  	@if( $value['video_or_post'] == 2 )
		                  	<img class="img-fluid rounded" src="{{ asset( $value['file'] ) }} " alt="Image">
		                  	@else
		                  	<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{ $value['file'] }}/maxresdefault.jpg" alt="Image">
		                  	@endif

		                  	@if( $value['video_or_post'] == 1 )
		                  	<div class="overlay_image">
	                			<a href="https://www.youtube.com/watch?v={{ $value['file'] }}" target="_blank">
		                      		<img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
		                      	</a>
		                  	</div>
		                  	@endif
		                  	<a href="/post_details/{{ $value['id'] }}">
			                	<p> {{ substr($value['title'], 0, 25).'...' }} </p>
			                </a>
	                  	</div>
                  	</div>
                  	@endforeach
                </div>
              </div>
          </div>
        </div>

        <!-- Section Two -->
        <div class="col-lg-4 section-2">
            <div class="row">
              	<div class="col-lg-12 section-2-lg">
	                @foreach( $section2 as $key => $value )
	              	@if( $loop->first )

	              	@php
	              		$section_two_first_data = $section2->first();
	              	@endphp

	                <div class="main_image">
	                	@if( $section_two_first_data['video_or_post'] == 2 )
		                <img class="img-fluid rounded" src="{{ asset($section_two_first_data['file']) }} " alt="Image">
	                  	@else
		        		<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{$section_two_first_data['file']}}/maxresdefault.jpg" alt="Image">
	                  	@endif
	                  	
	                  	@if( $section_two_first_data['video_or_post'] == 1 )
	                  	<div class="overlay_image">
	               			<a href="https://www.youtube.com/watch?v={{ $value['file'] }}" target="_blank">
	                      		<img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
	               			</a>
	                  	</div>
	                  	@endif
	                  	<a href="/post_details/{{ $section_two_first_data['id'] }}">
	                  		<p> {{ substr($section_two_first_data['title'], 0, 30).'...' }} </p>
	                  	</a>
	                  	
	                </div>
	                @endif
	                @endforeach
              	</div>
	            <div class="col-lg-12">
	                <div class="row">
	                  	@foreach($section2 as $key => $value)
	                	@if ($loop->first) @continue @endif
	                  	<div class="col-lg-6 section-2-sm">
	                  		<div class="main_image">
			                  	@if( $value['video_or_post'] == 2 )
	                			<img class="img-fluid rounded" src="{{ asset( $value['file'] ) }} " alt="Image">
			                  	@else
		                		<img class="img-fluid rounded" src="https://img.youtube.com/vi/{{ $value['file'] }}/maxresdefault.jpg" alt="Image">
			                  	@endif

			                  	@if( $value['video_or_post'] == 1 )
			                  	<div class="overlay_image">
	                				<a href="https://www.youtube.com/watch?v={{ $value['file'] }}" target="_blank">
			                      		<img src="{{ asset('frontend_assets/images/playbutton.png') }}" alt="Image" />
			                      	</a>
			                  	</div>
			                  	@endif
			                  	<a href="/post_details/{{ $value['id'] }}">
				                	<p> {{ substr($value['title'], 0, 25).'...' }} </p>
				                </a>
			                  	
		                  	</div>
	                  	</div>
	                  	@endforeach
	                </div>
              	</div>
            </div>
        </div>

      </div>
    </div>

@stop
