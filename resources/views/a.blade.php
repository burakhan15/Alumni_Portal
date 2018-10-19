@extends('frontEnd.app')

@section('content')
<form action="{{url('a')}}" method="POST" id="form">
	@csrf
	<input type="text" name="name" value="{{ old('name') }}">

	<button>Gönder</button></form>
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
				swal(
					'Good job!',
					'You clicked the button!',
					'success'
					)
			}

		});
	</script>
	@endsection