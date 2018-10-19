@extends('frontEnd.app')
@section('content')


<div class="container" style="padding-bottom: 30px;">
    <div class="sub-headline" style="padding-bottom: 10px;">
        <h2>Login</h2>
    </div>
    <div class="row justify-content-md-center">

        <div class="col-lg-5">
            <div class="login-area">
                <form method="POST" action="{{ route('login') }}" id="form">
                   @csrf
                   <a href="{{ url('/auth/facebook') }}" class="btn btn-info btn-block"><i class="fa fa-facebook"></i>Signup with Facebook</a>
                   <a href="{{url('auth/google')}}" class="btn btn-danger btn-block"><i class="fa fa-google-plus"></i> Signup with Google</a>

                   <hr>
                   <div class="text-center" style="font-family: 'Roboto', sans-serif;font-weight: 700">
                    OR
                </div>
                <hr>
                <small>Login with your Email Address</small>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail...">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password...">
                @if($errors->has('password'))
                <strong>{{ $errors->first('password') }}</strong>
                @endif
                <br>
                <button class="btn btn-success btn-sm">Login</button>
                <hr>
                <small>Forgot your Password?<a  href="{{ route('password.request') }}">{{ __('Click here to reset the password?') }}</a></small><br>
                <small>Not registered yet? <a href="{{ route('register') }}">Click here Signup Now!</a></small>
            </form>
        </div>
@include('sweet::alert')
    </div>
</div><!-- row -->
</div><!-- container -->
@endsection
@section('js')
@endsection
