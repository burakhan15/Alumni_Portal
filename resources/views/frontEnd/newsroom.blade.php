@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Newsroom</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row paddingTopBottom">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div id="paginationPage">

				@foreach($data as $news)
				<div class="post bg-light">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" style="padding-right: 0px;">
							<div class="post-small-img">
								@if(empty($news->image))
								<img src="{{asset('images/no-image.png')}}" alt="Image is not found!">
								@else
								<img src="{{asset('images/'.$news->image)}}" alt="Image is not found!">
								@endif
							</div>
						</div>
						<div class="col">
							<p style="padding: 0px 0px 10px 0px;margin: 0px;color: #aaa;"><small>Posted on 21st Feb, 2018</small></p>
							<h4>{{$news->headline}}</h4>
							<p>{{$news->description}}</p>

							<a href="{{url('news/'.$news->id)}}" class="btn btn-sm pull-right">Read More</a>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- post -->
				@endforeach

			</div>

			<nav aria-label="Page navigation">
				<ul class="pagination" id="pagination"></ul>
			</nav>


		</div><!-- col-lg-9 col-md-9 col-sm-9 col-xs-12 -->

	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')

@endsection