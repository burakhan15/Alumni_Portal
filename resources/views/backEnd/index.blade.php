@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="page-headline">
				<h3>Homepage</h3><br>
				<small>Cyprus International University</small>
			</div>
			<div class="list-group">
				<a href="{{url('admin/add-news')}}" class="list-group-item list-group-item-action"><i class="fa fa-plus"></i> New Post</a>
				<a href="{{url('admin/news')}}" class="list-group-item list-group-item-action"><i class="fa fa-list"></i> Post List</a>
				<a href="{{url('admin/add-new-events')}}" class="list-group-item list-group-item-action"><i class="fa fa-plus"></i> New Event</a>
				<a href="{{url('admin/events')}}" class="list-group-item list-group-item-action"><i class="fa fa-list"></i> Event List</a>
				<a href="{{url('admin/graduates')}}" class="list-group-item list-group-item-action"><i class="fa fa-eye"></i> Look to Users</a>
			</div>
		</div><!-- col-lg-3 -->
		<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

			<div class="jumbotron">
				<h1 class="display-4">Hello, world!</h1>
				<p class="lead">Welcome to CIU Alumni Admin Panel.</p>
				<hr class="my-4">
				<p>Please be careful when updating data :)</p>
				<p class="lead">
				<a href="/alumni/admin/newsroom" class="btn btn-primary btn-lg"role="button">Go To Newsroom</a>
				</p>
			</div>

		</div><!-- col-lg-3 -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection