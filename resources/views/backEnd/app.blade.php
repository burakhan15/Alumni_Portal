
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin Panel CIU Alumni</title>

	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="icon" type="image/ico" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('backEnd/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backEnd/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backEnd/css/lightbox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backEnd/css/style.css')}}">
	@yield('css')
	<!-- SCRIPT -->
	<script type="text/javascript" src="{{asset('backEnd/js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backEnd/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backEnd/js/lightbox.js')}}"></script>
	<script type="text/javascript" src="{{asset('backEnd/js/local.js')}}"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="{{url('admin/home')}}" style="margin-top: -8px;"><img src="{{url('backEnd/images/ciu-logo.png')}}" width="30"> Admin Panel <span class="small-brand">Cyprus International University</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto" style="padding-left: 30px;">
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/home')}}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/about')}}"><i class="fa fa-newspaper-o"></i> About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/news')}}"><i class="fa fa-newspaper-o"></i> Newsroom</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/events')}}"><i class="fa fa-bullhorn"></i> Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/graduates')}}"><i class="fa fa-users"></i> Graduates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/membership')}}" ><i class="fa fa-ship"></i> Membership</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('admin/contact')}}" ><i class="fa fa-university"></i> Contact</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Admin
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{url('single_profile')}}"><i class="fa fa-user"></i> Profile</a>
							<a class="dropdown-item" href="{{url('admin/messages')}}" ><i class="fa fa-envelope-o"></i> Messages</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{url('admin/logout')}}"><i class="fa fa-sign-out"></i> Sign Out</a>
						</div>
					</li>
				</ul>
			</div>
		</div><!-- container -->
	</nav>

	@yield('content')
	<script type="text/javascript" src="{{asset('backEnd/js/sorttable.js')}}"></script>
	<script type="text/javascript" src="{{asset('backEnd/js/pagination.js')}}"></script>
	<script type="text/javascript" src="{{asset('backEnd/js/twbsPagination.js')}}"></script>
	@yield('js')
</body>
</html>