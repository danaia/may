@extends('layouts.pub')

@section('title', 'Page Title')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="writing">
				<div contentEditable="true" data-ph="Create a title" class="title"></div>
				<div contentEditable="true" data-ph="Write want you want here" class="write"></div>
			</div>
		</div>
	</div>
</div>



@stop