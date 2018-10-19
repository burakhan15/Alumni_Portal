@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Newsroom</h3>
	</div><!-- container -->
</div><!-- page-headline -->


<div class="container">
	<div class="row paddingTopBottom">
		<div class="col">
			<h4 style="margin: 0px;padding: 0px;font-weight: 700;">{{$data->headline}}</h4>
			<p style="padding: 0px 0px 0px 0px;margin: 0px;color: #aaa;"><small>Posted on {{$data->created_at->format('d-m-Y')}}</small></p>

			<img src="{{asset('images/'.$data->image)}}" width="100%" style="margin: 15px 0px 15px 0px;">
			<?php print_r($data->content) ?>
			<p>CIU Alumni Portal</p>

		</div>
	</div>
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection