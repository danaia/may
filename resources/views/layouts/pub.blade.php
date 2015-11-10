<!doctype html>

<html>
<head>
	<title>May</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ Session::token() }}"> 
	<link rel="stylesheet" type="text/css" href="/fonts/lnr/style.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/bower_components/toastr/toastr.min.css">
</head>
<body>
	<div class="row logo">
		<div class="col-md-12">
			<div class="may pull-right">m˚p</div>
			<div class="utl">
				<ul>
					@if (Auth::user())
					<li>
						<a href="#">{{Auth::user()->name}}</a>
					</li>
					<li >
						<a href="/auth/logout"><i class='lnr lnr-power-switch' ></i>Logout</a>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		@yield('content')
	</div>
	<script src="js/j.js"></script>
	<script src="/bower_components/toastr/toastr.js"></script>
	<script src="js/all.js"></script>
</body>
</html>
