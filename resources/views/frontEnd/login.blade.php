@extends('frontEnd.app')
@section('content')
<div class="container" style="padding-bottom: 30px;">
	<div class="sub-headline" style="padding-bottom: 10px;">
		<h2>Login</h2>
	</div>
	<div class="row justify-content-md-center">
		<div class="col-lg-5">
			<div class="login-area">
				<a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Signup with Facebook</a>
				<a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Signup with Twitter</a>
				<a href="#" class="btn btn-danger btn-block"><i class="fa fa-google-plus"></i> Signup with Google</a>

				<hr>
				<div class="text-center" style="font-family: 'Roboto', sans-serif;font-weight: 700">
					OR
				</div>
				<hr>
				<small>Login with your Email Address</small>
				<input type="text" name="email" class="form-control" placeholder="Email Address...">
				<input type="password" name="email" class="form-control" placeholder="Password...">
				<br>
				<button class="btn btn-success btn-sm">Login</button>
				<hr>
				<small>Forgot your Password? <a href="forgotpassword">Click here to reset the password</a></small><br>
				<small>Not registered yet? <a href="register">Click here Signup Now!</a></small>
			</div>
		</div>
	</div><!-- row -->
</div><!-- container -->
@endsection
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
             type: 'error',
             title: 'Oops...',
             text: '{{$errors->first("title")}}',
             footer: '<a href>Why do I have this issue?</a>',
        })
     }

});
</script>
@endsection