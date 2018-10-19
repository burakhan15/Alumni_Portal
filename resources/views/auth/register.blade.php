@extends('frontEnd.app')

@section('content')


<div class="container" style="padding-bottom: 30px;">
    <div class="sub-headline" style="padding-bottom: 10px;">
        <h2>Register</h2>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-lg-5">
            <div class="register-area">
                <form action="{{url('register_continue')}}" method="POST">
                   @csrf
                   <a href="{{ url('/auth/facebook') }}" class="btn btn-info btn-block"><i class="fa fa-facebook"></i>Facebook</a>
                   <a href="{{url('auth/google')}}" class="btn btn-danger btn-block"><i class="fa fa-google-plus"></i> Signup with Google</a>
                   <hr>
                   <div class="text-center" style="font-family: 'Roboto', sans-serif;font-weight: 700">
                    OR
                </div>
                <hr>
                <small>Signup with your identify id and school id</small>
                <input type="text" name="identity_id" class="form-control{{ $errors->has('identity_id') ? ' is-invalid' : '' }}" value="{{ old('identity_id') }}" placeholder="Identity id..." >
                <input type="text" name="school_id" class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" value="{{ old('school_id') }}" placeholder="School id..." >
                <br>
                <button class="btn btn-success btn-sm">Register with Email</button>
                <hr>
                <small>Already Member? <a href="{{route('login')}}">Click here to Login</a></small></form>
            </div>
        </div>
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