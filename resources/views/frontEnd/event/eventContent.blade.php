@extends('frontEnd.master')

@section('mainContent')
<div class="inner_page_agile">
		<h3>{{$eventById->eventName}}</h3>
		<p>{{$eventById->eventShortDescription}}</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>{{$eventById->eventName}}</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Some More Info </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div >
					<div class="single-left1">
						<img src="{{asset($eventById->eventImage)}}" alt=" " class="img-responsive" />
						</div>
						<div class="single-left1">
							<h3>Date: {{$eventById->eventDate}}</h3>
						</div>
						<div class="single-left1">
							<h3>Location: {{$eventById->eventLocation}}</h3>
						</div>
						<div class="single-left1">
						<h3>Sed ut perspiciatis unde omnis iste natus error sit facilisis erat posuere erat</h3>

						<h4>Sed ut perspiciatis unde omnis iste natus error sit facilisis erat posuere erat</h4>
						
						<p>In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse
							ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
							rhoncus nec nibh non, mollis sodales odio. Nullam facilisis diam non magna porta luctus. Aenean facilisis erat posuere
							erat ornare ultrices. Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.
							<i>Nunc a urna turpis. Aenean vestibulum elementum nisi. Aenean aliquet nec mi et 
							lacinia. Aliquam maximus iaculis mi elit in scelerisque malesuada, tellus leo viverra massa, sed efficitur orci efficitur nec.</i>							In consectetur, elit in scelerisque malesuada, tellus leo viverra massa, nec malesuada turpis lectus ac urna. Suspendisse
							ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit amet, fermentum viverra eros. Praesent neque purus,
							rhoncus nec nibh non, mollis sodales odio.</p>
					</div>
					<div class="admin">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i> But I must explain to you how all this mistaken idea of denouncing
							pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings
							of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
							itself.
						</p>
						<a href="#"><span>John Frank</span></a>
					</div>
					
				</div>
				<p align="center">
					<a href="#" class="btn btn-success btn-block" role="button">Apply</a>
				</p>

   				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	@endsection