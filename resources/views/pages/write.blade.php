@extends('layouts.pub')

@section('title', 'Page Title')

@section('content')

<div id="bookPanel">
	<h3>Share
		<span><a href="#" class="closeBookPanel lnr lnr-cross"></a></span>
	</h3>
</div>

<div id="editPanel">
	<ul>
		<li>
			<a href="#" class="lnr lnr-users share"></a>
		</li>

		<li>
			<a href="#" class="lnr lnr-star"></a>
		</li>

		<li>
			<a href="#" class="lnr lnr-trash"></a>
		</li>

		<li>
			<a href="#" class="lnr lnr-tag"></a>
		</li>
	</ul>
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				@if (Route::getCurrentRoute()->getPath() === 'create')
				<span>
					<a href="#" class="editAction"><i class='lnr lnr-menu writeMenu' ></i></a>
				</span>
				@endif
				Write
			</h3>

		</div>
	</div>
	<div class="writing">
		<div contentEditable="true" data-ph="Create a title" class="title"></div>
		<div contentEditable="true" data-ph="Enter text here..." class="write"></div>
		<div class="smallError"></div>
		<div class="writeActions">
			<button type="submit" class="btn btn-sm btn-primary btn-save saveWriting">Save</button>
		</div>

	</div>

</div>

@stop