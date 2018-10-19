@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Contact</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row paddingTopBottom">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<?php print_r($data->content); ?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact">
			<form method="post" action="{{url('sendmail')}}">
				@csrf
				<p>Name:</p>
				<input type="text" name="" class="form-control">
				<p>Surname:</p>
				<input type="text" name="" class="form-control">
				<p>Subject:</p>
				<input type="text" name="" class="form-control">
				<p>Message:</p>
				<input type="text" name="" class="form-control">
				<hr>
				<button class="btn btn-sm btn-danger">Send Your Message</button>
			</form>
		</div>
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection