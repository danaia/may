@extends('layouts.pub')

@section('title', 'Page Title')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="writing">
				<div contentEditable="true" data-ph="Create a title" class="title"></div>
				<div contentEditable="true" data-ph="Enter text here..." class="write"></div>
				<div class="smallError"></div>
				<div class="writeActions">
					<button type="submit" class="btn btn-sm btn-primary btn-save saveWriting">Save</button>
				</div>
				
			</div>
		</div>
	</div>
</div>

@stop