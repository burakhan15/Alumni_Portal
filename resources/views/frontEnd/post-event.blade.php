@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Event</h3>
	</div><!-- container -->
</div><!-- page-headline -->


<div class="container">
	<div class="row paddingTopBottom">
		<div class="col">
			<div class="text-center">
				<h4 style="margin: 0px;padding: 0px;font-weight: 700;">{{$data->headline}}</h4>
				<p style="padding: 0px 0px 0px 0px;margin: 0px;color: #aaa;"><small>Posted on {{$data->created_at->format('d-m-Y')}}</small></p>
			</div>

			<br>

			<div class="row justify-content-md-center date-location">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 date">
					<p><i class="fa fa-calendar"></i>Time of the event {{$data->datetime}}</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 location">
					<p><i class="fa fa-map-marker"></i>{{$data->address}}
					</p>
				</div>
				</div><!-- row --><?php print_r($data->content) ?>

				<hr>
				@guest
				<div class="text-center">
					<a href="{{ url('login') }}">Login</a>
				</div>
				@else
				@if($data->datetime > date('Y-m-d'))
				<div class="text-center">
					<a href="{{ url('join-event/'.$data->id) }}" class="btn btn-success">+ Join</a>
				</div>
				@endif
				@endguest
			</div>
		</div>
	</div><!-- container -->
@endsection
@section('css')
<link href={{asset('frontEnd/css/sweetalert2.min.css')}} rel="stylesheet">
@endsection
@section('js')
<script src={{asset('frontEnd/js/jquery.form.min.js')}}></script>
<script src={{asset('frontEnd/js/jquery.validate.min.js')}}></script>
<script src={{asset('frontEnd/js/messages_tr.min.js')}}></script>
<script src={{asset('frontEnd/js/sweetalert2.min.js')}}></script>
<script>
     $(document).ready(function() {
         if ({{$errors->any()}}) {
          swal({
             type: '{{$errors->first("error")}}',
             title: '{{$errors->first("title")}}',
             text: '{{$errors->first("content")}}',
             footer: '<a href>Why do I have this issue?</a>',
        })
     }

});
</script>
@endsection