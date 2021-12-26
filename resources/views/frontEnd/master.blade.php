
<!DOCTYPE html>
<html>

<head>
	<title>PUB Event Management System</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{asset('frontEnd/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('frontEnd/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="{{asset('frontEnd/')}}/css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
  <!-- Template CSS -->
  	<link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
@include('frontEnd.includes.header')
	<!-- banner -->


@yield('mainContent')

	<!-- footer -->
@include('frontEnd.includes.footer')
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="{{asset('frontEnd/')}}/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="{{asset('frontEnd/')}}/js/bootstrap.js"></script>
		<!-- //for blog carousel slider -->
		<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
		
		<script src="{{asset('frontEnd/')}}/assets/js/jquery-1.7.2.js"></script>
		<script src="{{asset('frontEnd/')}}/assets/js/jquery.quicksand.js"></script>
		<script src="{{asset('frontEnd/')}}/assets/js/script.js"></script>
		
		<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->

		
</body>
</html>