<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'CIU Alumni') }}</title>

    <!-- META -->
    <meta charset="UTF-8">
    <meta name="description" content="CIU Alumni - UKÜ Mezunlar">
    <meta name="keywords" content="ciu,alumni,ukü,mezun,mezunlar,mezun,alumni ciu,cyprus international university">
    <meta name="author" content="Name Surname">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="icon" type="image/ico" href="{{asset('frontEnd/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/style.css') }}">
    @yield('css')
    <!-- SCRIPT -->
    <script type="text/javascript" src="{{ asset('frontEnd/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontEnd/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontEnd/js/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontEnd/js/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontEnd/js/local.js') }}"></script>

</head>
<body>
<div class="header">
    <div class="container">
        <ul>
           
            @guest
                <li><a href="{{ url('register') }}">Register</a></li>
                <li><a href="{{ url('login') }}">Login</a></li>
            @else
                <li><a href="{{ url('single_profile') }}">
                    @if(Auth::user()->show_image == 0)
                    <img src="{{ asset('images/'.Auth::user()->image) }}" width="15">
                    @else
                     <img src="{{ asset('images/no-image.png') }}" width="15">
                    @endif




                     {{ucfirst(Auth::user()->name)}}  {{ucfirst(Auth::user()->sur_name)}}</a></li>

                <li><a href="{{ url('messages') }}">Messages</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Sign Out</a></li>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
            @endguest

            <li><a href="#"><img src="{{ asset('frontEnd/images/en_flag_logo.png') }}" width="32"></a></li>
        </ul>
    </div>
</div>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/')}} "><img src="{{ asset('frontEnd/images/favicon.ico') }}" width="30"> CIU Alumni <span class="small-brand">Cyprus International University</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="font-size: 30px;"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" mr-auto"></ul>
            <ul class="navbar-nav">
                <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li><a href="{{url('about')}}" class="nav-link">About</a></li>
                <li><a href="{{url('newsroom')}}" class="nav-link">Newsroom</a></li>
                <li><a href="{{url('events')}}" class="nav-link">Events</a></li>
                <li><a href="{{url('graduates')}}" class="nav-link">Graduates</a></li>
                @guest
                @else
                <li><a href="{{url('membership')}}" class="nav-link">Membership</a></li>
                @endguest
                <li><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        
        </div>
    </div><!-- container -->
</nav><!-- navbar -->

@yield('content');

<div class="footer">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-auto">
                <div class="footer-f">
                    <div class="footer-logo">
                        <img src="{{asset('frontEnd/images/ciu-logo.png')}}" width="64" alt="Cyprus International University">
                    </div>
                    <div class="footer-text">
                        <p style="padding-top: 15px;" title="Cyprus International University Alumni Portal">CIU Alumni Portal 
                        <br><span>Copyright © 2018</span></p>
                    </div>
                </div><!-- footer-f -->
            </div><!-- col col-auto -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- footer -->

<script type="text/javascript" src="{{ asset('frontEnd/js/sorttable.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontEnd/js/pagination.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontEnd/js/jquery.twbsPagination.min.jss') }}"></script>
@yield('js')
</body>
</html>