@extends('frontEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Newsroom Edit</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col -->
	</div><!-- row -->


	<div class="row">
		<div class="col">

			<hr>

			<form method="post" action="{{url('add-message')}}" ">
				@csrf
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Post Headline</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" name="headline" ">
					</div>
				</div>
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Post Content</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="content" rows="10" style="width: 100%"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-danger btn-lg">Send</button>
				</div>
			</div>
			<input type="hidden" name="receiver" value="{{$data->identity_id}}">
		</form>

	</div>
</div><!-- row -->
</div><!-- container -->

@endsection
@section('css')
@endsection
@section('js')

@endsection