@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Edit Profile</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row paddingTopBottom">
		<form action={{url('edit_profile')}} method="POST" id="form" enctype="multipart/form-data">
			@csrf
			<div class="register-area">
				<div class="media profile-infos">
					<img class="mr-3" src="{{ asset('images/'.Auth::user()->image) }}" alt="aaaa" width="64">
					<div class="media-body">
						<small>Profile Image</small>
						<input type="file" name="image" class="form-control" >
					</div>
				</div>
				@if(Auth::user()->show_image==1)
				<input type="checkbox" name="checkbox" checked="">     Does not show picture
				@else
				<input type="checkbox" name="checkbox" >     Does not show picture
				@endif
				<hr>
				<small>New Password</small>
				<input type="password" name="password" class="form-control" placeholder="*New Password...">
				<small>New Password</small>
				<input type="password" name="password1"  class="form-control" placeholder="*New Password...">
				<small>Google maps</small>
				<textarea name="maps" class="form-control" style="width: 100%" rows="5">{{$maps->maps}}</textarea>
				<hr>
				<small>E-Mail</small>
				<input type="text" name="email" class="form-control" placeholder="*E-Mail..." value="{{Auth::user()->email}}">
				<hr>
				<button class="btn btn-danger btn-sm">Save My Information</button>

			</div>

		</form>
	</div><!-- row -->
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
<script type="text/javascript">
	if ({{$errors->any()}}) {

		swal(
			'{{$errors->first("title")}}!',
			'You clicked the button!',
			'{{$errors->first("error")}}'
			)

	}
</script>
@endsection
