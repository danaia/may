@extends('layouts.pub')

@section('title', 'Page Title')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="login">
				<h3>Join Us</h3>
				<hr>
				@include('includes.errors')
				<form method="POST" action="/auth/register">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" value="{{ old('name') }}" class='form-control' required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" name="email" value="{{ old('email') }}" class='form-control' required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class='form-control' required>
					</div>

					<div class="form-group">
						<label for="password_confirmation">Verify Password</label>
						<input type="password" name="password_confirmation" class='form-control'>
					</div>
					<hr>
					<div class="actions">
						<button type="submit" class="btn btn-primary">Join</button>
						<span><a href="/auth/login" class="loginAsk">Already a Member? Login.</a></span>
					</div>
				</form>
			</div>
		</div>

		<div class="col-md-7">
			<div class="why">

				{{--<b>Create. Share. Earn</b> --}}
				<small>An Independent Network of Authors, Essayists and Poets</small>
				<p>
					May/Press is an intelligently curated venue for producers of the written word. We are dedicated in producing a beautiful, simple and engaging environment for your most personal and inspiring work.  
				</p>
				<p>
					<ul>
						<li>
							<a href="#">Explore Works</a>
						</li>

						<li>
							<a href="#">Start Writing</a>
						</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
</div>

@stop
