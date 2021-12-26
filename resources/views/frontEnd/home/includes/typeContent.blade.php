<ul class="portfolio-area clearfix p-0 m-0 row">
				@foreach($publishedTypeProducts as $publishedTypeProduct)
				<li class="portfolio-item2 content" data-id="id-1" data-type="cat-item-1">
				<div class="col-md-10 blog-grid">
					<a href="single.html"><img src="{{asset($publishedTypeProduct->eventImage)}}" alt="" height="200" width="220"></a>
					<div class="events_info">
						<h5>Oct 12,2017</h5>
						<h4><a href="single.html">Talent Programmes</a></h4>
						<p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p>

					</div>
				</div>
				</li>
				
				@endforeach
				
			</ul>
