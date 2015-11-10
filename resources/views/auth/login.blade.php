@extends('layouts.pub')

@section('title', 'Page Title')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="login">
				<h3>Login</h3>
				<hr>
				@include('includes.errors')
				<form method="POST" action="/auth/login">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="email" name="email" >
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="actions">
						<hr>
						<button type="submit" class="btn btn-primary">Log In</button>
						<span><a href="/auth/register" class="loginAsk">Not a Member? Register</a></span>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>

@stop