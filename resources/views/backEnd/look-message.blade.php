@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="page-headline">
				<h3>Messages</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col-lg-3 -->

	</div><!-- row -->
	<div class="row">
		<div class="col">

			<dl class="row">
				<dt class="col-lg-3 col-md-3 col-sm-3 col-12 text-right">From:</dt>
				<dd class="col-lg-9 col-md-9 col-sm-3 col-12">{{$data->headline}}</dd>
				<dt class="col-lg-3 col-md-3 col-sm-3 col-12 text-right">Subject:</dt>
				<dd class="col-lg-9 col-md-9 col-sm-3 col-12">{{$data->headline}}</dd>
				<dt class="col-lg-3 col-md-3 col-sm-3 col-12 text-right">Message:</dt>
				<dd class="col-lg-9 col-md-9 col-sm-3 col-12">{{$data->content}}</dd>
			</dl>

		</div>
	</div>
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection