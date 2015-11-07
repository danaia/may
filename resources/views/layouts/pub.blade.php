<!doctype html>

<html>
<head>
	<title>May</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ Session::token() }}"> 
	<link rel="stylesheet" type="text/css" href="fonts/lnr/style.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="row logo">
		<div class="col-md-12">
			<a href='#' class="may" id='trigger'>m˚p</a>
		</div>
	</div>

	<div class="container">
		@yield('content')
	</div>
	<script src="js/j.js"></script>
	<script src="js/all.js"></script>
	<script src="bower_components/slidereveal/dist/jquery.slidereveal.min.js"></script>

	<script type="text/javascript">

		$( document ).ready(function() {
			$.ajaxSetup({
				headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
			});
		});

	</script>

	<div id='r-mainActions'>
		<ul>
			<li>
				<a href="#">Explore Works</a>
			</li>

			<li>
				<a href="#">Start Writing</a>
			</li>
		</ul>

		<a href="#" class="closePanels pull-right"><i class='lnr lnr-chevron-right'></i></a>
		
		May/Press is a comfortable place to explore writings from others and with yourself. Create, share and explore all in a simple and easy to use environment. 
		<br>
		<small>Enjoy.</small> 

	</div>
</body>
</html>
