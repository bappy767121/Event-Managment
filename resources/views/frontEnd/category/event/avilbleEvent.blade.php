@extends('frontEnd.master')

@section('mainContent')
	<div class="inner_page_agile">
		<h3>{{$categoryByid->categoryName}}s</h3>
		<p>{{$categoryByid->categoryDescription}}</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>{{$categoryByid->categoryName}}</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">

			</div>
			
				@foreach($publishedCategoryProducts as $publishedCategoryProduct)
				<div class="col-md-4 blog-grid one">
					<a href="single.html"><img src="{{asset($publishedCategoryProduct->eventImage)}}" alt="" width="200" height="240"></a>
					<div class="events_info" alt>
						<h5>{{$publishedCategoryProduct->eventDate}}</h5>
						<h5><a href="{{url('/detiels/'.$publishedCategoryProduct->id)}}">{{$publishedCategoryProduct->eventName}}</a></h>
						<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
					</div>
				</div>
				@endforeach
				<div class="clearfix"></div>

			</div>

		</div>
	</div>
@endsection