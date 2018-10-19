@extends('frontEnd.app')
@section('content')
<div class="container">
	<div class="row paddingTopBottom">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			
			<div class="media profile-infos">
				<img class="mr-3" src="{{asset('frontEnd/images/no-image.png') }}" alt="Generic placeholder image" width="64">
				<div class="media-body">
					<h5 class="mt-0">{{$user[0]->name}}</h5>
					<small>{{$user[0]->email}}</small>
					<hr>
					<p>Country <br><strong><small>{{$user[0]->country}}</small></strong></p>
					<p>Department <br><strong><small>{{$user[0]->department}}</small></strong></p>
					<p>Birth Date <br><strong><small>{{$user[0]->birth_date}}</small></strong></p>
					<p>School Start Date <br><strong><small>{{$user[0]->start_date}}</small></strong></p>
					<p>Graduate Date<br><strong><small>{{$user[0]->graduation}}</small></strong></p>
					<p>Student Number <br><strong><small>{{$user[0]->school_id}}</small></strong></p>
					<p>Gender <br><strong><small>{{$user[0]->gender}}</small></strong></p>
				</div><!-- profile-infos -->
			</div><!-- media -->
			
		</div><!-- col -->
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<h1><?php print_r($count) ?></h1>
							<p>Total Joined Event</p>
						</div>
					</div><!-- card -->
				</div><!-- col-lg-6 col-md-6 col-sm-6 col-xs-12 -->
			</div><!-- row -->
			<br>
			<hr>

			<div class="row">
				<div class="col">
					<?php print_r($user[0]->maps) ?>
				</div><!-- col -->
			</div><!-- row -->

		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection