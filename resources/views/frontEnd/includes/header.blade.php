	<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="{{url('/')}}">
							<h1><span class="fa" aria-hidden="true"></span>PUB<label>Event Management</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{url('/')}}" class="effect-3">Home</a></li>
								
								<li class="dropdown">
									<a href="jobs.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Events<b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-2">
										<div class="row">
											<div class="col-sm-6">
												<ul class="multi-column-dropdown">
													@foreach($publishedCategories as $publishedCategory)
													<li><a href="{{url('/event/avilable/'.$publishedCategory->id)}}">{{$publishedCategory->categoryName}}</a></li>
													@endforeach
													
												</ul>
										</div>
									</ul>
								</li>
								<li><a href="events.html" class="effect-3">Gellary</a></li>
								<li><a href="contact.html" class="effect-3">Contact</a></li>

								<li class="dropdown">
									<a href="jobs.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Profile<b class="caret"></b></a>
									
									<ul class="dropdown-menu multi-column columns-2">
										<div class="row">
											<div class="col-sm-6">
												<ul class="multi-column-dropdown">
													<li><a href="{{url('/login')}}">Sing in</a></li>
													<li><a href="{{url('/register')}}">Sing up</a></li>
												</ul>
										</div>
									</ul>
								</li>
								
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>