@extends('frontEnd.master')

@section('mainContent')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Improving workplace <span>Productivity.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3><span>innovation.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>PUB Football Turnament <span>2020.</span></h3>
						<p>The biggest Turnament in Bogura</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Programing Contest <span>2021</span></h3>
						<p>Show your Skill and Get Price</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg scroll" href="#welcome" role="button">Read More »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<section class="w3-gallery">
	<!-- Portfolio -->
	<div class="portfolio py-5">
		<div class="container py-lg-5">

			<h3 class="title-w3 mb-2 text-center text-bl font-weight-bold">EVENTS<span class="dot-1"></span></h3>

			<!-- /Portfolio-grids -->
			<ul class="portfolio-categ filter my-md-5 my-4 p-0 text-center">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				@foreach($publishedTypes as $publishedType)
				<li class="cat-item-1">
					<a href="#" title="Category 1">{{$publishedType->typeName}}</a>
				</li>
				@endforeach
			<ul class="portfolio-area clearfix p-0 m-0 row">
				<li class="portfolio-item2 content" data-id="id-1" data-type="cat-item-1">
				<div class="col-md-10 blog-grid">
					<a href="single.html"><img src="{{asset('frontEnd/images/')}}/e6.jpg" alt=""></a>
					<div class="events_info">
						<h5>Oct 12,2017</h5>
						<h4><a href="single.html">Talent Programmes</a></h4>
						<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>

					</div>
				</div>
				</li>
				<li class="portfolio-item2 content" data-id="id-2" data-type="cat-item-2">
					<span class="image-block">

					<div class="col-md-10 blog-grid one">
					<a href="single.html"><img src="{{asset('frontEnd/images/')}}/e5.jpg" alt=""></a>
					<div class="events_info">
						<h5>Oct 26,2017</h5>
						<h4><a href="single.html">Talent Programmes</a></h4>
						<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
					</div>
				</div>
					</span>
				</li>
				<li class="portfolio-item2 content" data-id="id-3" data-type="cat-item-3">
					<span class="image-block">

						<div class="col-md-10 blog-grid one">
					<a href="single.html"><img src="{{asset('frontEnd/images/')}}/e5.jpg" alt=""></a>
					<div class="events_info">
						<h5>Oct 26,2017</h5>
						<h4><a href="single.html">Talent Programmes</a></h4>
						<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
					</div>
				</div>
					</span>
				</li>
				<li class="portfolio-item2 content" data-id="id-4" data-type="cat-item-2">
					<span class="image-block">

						<div class="col-md-10 blog-grid one">
					<a href="single.html"><img src="{{asset('frontEnd/images/')}}/e5.jpg" alt=""></a>
					<div class="events_info">
						<h5>Oct 26,2017</h5>
						<h4><a href="single.html">Talent Programmes</a></h4>
						<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>
					</div>
				</div>
					</span>
				</li>

				
			</ul>

			<!--end portfolio-area -->
			<!-- /Portfolio-grids -->
		</div>
		 <!-- gallery -->
    <div class="gallery pb-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-2 text-center text-bl font-weight-bold">Our <span>Gallery</span></h3>
            <p class="text-center title-w3 mb-md-5 mb-4">Excepteur sint occaecat cupidatat</p>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="{{asset('frontEnd/images/')}}//g1.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="{{asset('frontEnd/images/')}}//g2.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="{{asset('frontEnd/images/')}}//g3.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <div class="row news-grids text-center no-gutters">
                <div class="col-md-4 gal-img">
                    <a href="#gal4"><img src="{{asset('frontEnd/images/')}}//g4.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="{{asset('frontEnd/images/')}}//g5.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal6"><img src="{{asset('frontEnd/images/')}}//g6.jpg" alt="Gallery Image" class="img-fluid"></a>
                </div>
            </div>
            <!-- gallery popups -->

	</div>
		<link rel="stylesheet" href="{{asset('frontEnd/')}}/assets/css/style-starter.css">

</section>
	@endsection