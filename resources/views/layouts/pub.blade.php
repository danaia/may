<!doctype html>

<html>
<head>
	<title>May</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ Session::token() }}"> 
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="row logo">
		<div class="col-md-12">
			<a href='#' class="may">m˚p</a>
		</div>
	</div>

	<div class="container">
		@yield('content')
	</div>
	<script src="js/j.js"></script>
	<script src="js/all.js"></script>

	<script type="text/javascript">

	$( document ).ready(function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
	});

</script>


</body>
</html>
