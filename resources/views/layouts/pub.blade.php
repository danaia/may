<!doctype html>
@inject ('profilePic', 'App\Http\Lib\Util')
<html>
<head>
	<title>May</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ Session::token() }}"> 
	<link rel="stylesheet" type="text/css" href="/fonts/lnr/style.css">
	<link rel="stylesheet" type="text/css" href="/bower_components/toastr/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body id="pub">
	@if (Auth::user())
	<div class="profileInfo">
		<div class="row">
			<div class="col-md-1">
				{{-- <img src="http://www.gravatar.com/avatar/{{ $profilePic->gravatar() }}" alt="" class="pull-right"> --}}
			</div>
			<div class="col-md-4" >
				<label for="Name">Name</label>
				<div class="editUsername editable name" contenteditable="true" value="{{Auth::user()->name}}" name='name'>{{Auth::user()->name}}</div>
				<label for="Name">Email</label>
				<div class="editable email" contenteditable="true" value="{{Auth::user()->email}}" name='email'>{{Auth::user()->email}}</div>
			</div>
			<div class="col-md-8 col-md-offset-1">
				<label for="Name">Your Bio</label>
				<div class="editUsername editable bio" contenteditable="true" value="{{Auth::user()->bio}}" name='bio'>{{Auth::user()->bio}}</div>
			</div>
			<div class="col-md-8 col-md-offset-1">
				<button type="submit" class="btn btn-sm btn-primary btn-save saveProfile" data-id="{{Auth::user()->id}}">Update</button>
				<a href="#" class="cancelProfilePanel">Cancel</a>
			</div>
		</div>
	</div>
	@endif
	<div class="row logo">
		<div class="col-md-12">
			<div class="may pull-right">m˚p</div>
			<div class="utl">
				<ul>
					@if (Auth::user())
					<li>
						<a href="#" class="showProfile">{{Auth::user()->name}}</a>
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
