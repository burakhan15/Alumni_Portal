@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>About</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row paddingTopBottom">
		<div class="col">
			<?php print_r($data->content) ?>
		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection