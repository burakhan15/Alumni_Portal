@extends('frontEnd.app')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.12&appId=341826175838439&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="carousel-item-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slide-text">
							<h3>Wellcome To CIU Alumni</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<p style="position:relative; margin-top: 25px;">
								<a href="#" class="btn btn-primary-outline">Learn More</a>
							</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<img src="{{ asset('frontEnd/images/alumni-students.png') }}" width="100%" style="margin-top: 100px;">
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- carousel-item-text -->
			<!-- start/img -->
				<div class="slider-red"></div>
			<!-- end/img -->
		</div>
		<div class="carousel-item">
			<div class="carousel-item-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slide-text">
							<h3>Let's see the events</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<p style="position:relative; margin-top: 25px;">
								<a href="#" class="btn btn-primary-outline">Learn More</a>
							</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<img src="{{ asset('frontEnd/images/event.png') }}" width="100%">
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- carousel-item-text -->
			<!-- start/img -->
				<div class="slider-blue"></div>
			<!-- end/img -->
		</div>
		<div class="carousel-item">
			<div class="carousel-item-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 slide-text">
							<h3>last year's graduates</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<p style="position:relative; margin-top: 25px;">
								<a href="#" class="btn btn-primary-outline">Learn More</a>
							</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<img src="{{ asset('frontEnd/images/students.png') }}" width="100%" style="margin-top: 50px;">
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- carousel-item-text -->
			<!-- start/img -->
				<div class="slider-teal"></div>
			<!-- end/img -->
		</div>
	</div><!-- carousel-inner -->
</div><!-- carousel -->

<div class="container">
	<div class="row">
		<div class="sub-headline">
			<h2>Wellcome To CIU Alumni</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div><!-- sub-headline -->
	</div><!-- row -->
</div><!-- container -->


<div class="container">
	<div class="row paddingTopBottom headline-font">
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<h3>Newsroom</h3>
			<div class="bg-light" style="min-height: 350px;max-height: 350px;overflow: auto;padding: 10px;">
				<ul class="news-list">
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="news-new">NEW</span> 
						<br><span>21 Feb 2018</span></a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <span class="news-new">NEW</span> 
						<br><span>21 Feb 2018</span></a></li>
					<li><a href="#">Excepteur sint occaecat cupidatat non proident 
						<br><span>21 Feb 2018</span></a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						<br><span>21 Feb 2018</span></a></li>
				</ul>
			</div><!-- bg-light -->
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<h3>Events</h3>
			<div class="bg-light" style="min-height: 350px;max-height: 350px;overflow: auto;padding: 10px;">
				<ul class="event-list">
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br><span class="event-coming">Coming</span> 
						<span>20 Apr 2018</span></a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <br><span class="event-past">Past</span> 
						<span>21 Feb 2018</span></a></li>
					<li><a href="#">Excepteur sint occaecat cupidatat non proident <br><span class="event-past">Past</span> 
						<span>21 Feb 2018</span></a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br><span class="event-past">Past</span> 
						<span>21 Feb 2018</span></a></li>
				</ul>
			</div><!-- bg-light -->
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="sub-headline">
			<h2>Social Media</h2>
			<p>You can follow to us on Internet.</p>
		</div><!-- sub-headline -->
	</div><!-- row -->


	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 15px;">
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCIUOfficial%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=341826175838439" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 15px;">
			<div class="twitter-time">
				<a class="twitter-timeline" href="https://twitter.com/CIUOfficial">Tweets by CIU</a> 
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="sub-headline">
			<h2>Galery</h2>
		</div><!-- sub-headline -->
	</div><!-- row -->


	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="galery-img">
				<a href="/alumni/images/images1.jpg" data-lightbox="roadtrip"><img src="{{ asset('frontEnd/images/images1.jpg') }}" alt="..."></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="galery-img">
				<a href="/alumni/images/images2.jpg" data-lightbox="roadtrip"><img src="{{ asset('frontEnd/images/images2.jpg') }}" alt="..."></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="galery-img">
				<a href="/alumni/images/images3.jpg" data-lightbox="roadtrip"><img src="{{ asset('frontEnd/images/images3.jpg') }}" alt="..."></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="galery-img">
				<a href="/alumni/images/images4.jpg" data-lightbox="roadtrip"><img src="{{ asset('frontEnd/images/images4.jpg') }}" alt="..."></a>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="sub-headline">
			<a href="#" class="btn"><i class="fa fa-facebook"></i></a>
			<a href="#" class="btn"><i class="fa fa-twitter"></i></a>
			<a href="#" class="btn"><i class="fa fa-google-plus"></i></a>
		</div><!-- sub-headline -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection