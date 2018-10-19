@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Events Add New</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col -->
	</div><!-- row -->


	<div class="row">
		<div class="col">

			<form method="post" action="{{url('admin/add-new-events')}}">
				@csrf

				@if($errors->has('headline'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Event Headline</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" placeholder="Event Headline" name="headline" value="{{old('headline')}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Event Headline</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" placeholder="Event Headline" name="headline" value="{{old('headline')}}">
					</div>
				</div>
				@endif

				@if($errors->has('description'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Description</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" placeholder="Description" name="description" value="{{old('description')}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Description</label>

					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" placeholder="Description" name="description" value="{{old('descp')}}">
					</div>
				</div>
				@endif


				@if($errors->has('address'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" placeholder="Address" name="address" value="{{old('address')}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" placeholder="Address" name="address" value="{{old('address')}}" >
					</div>
				</div>
				@endif

				@if($errors->has('datetime'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Date & Time</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="datetime"  placeholder="Datetime"ß name="datetime" value="{{old('datetime')}}" style="border: 1px solid red">
					</div>
					@else
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Date & Time</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" id="datetime" name="datetime" value="{{old('datetime')}}" >
						</div>
						@endif

					</div>
					@if($errors->has('content'))
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Event Description</label>
						<div class="col-sm-10">
							<textarea class="ck-editor__editable_inline"  id="my-editor" name="content" style="border: 1px solid red" >
								{{old('content')}}

							</textarea>
						</div>
					</div>
					@else
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Event Description</label>
						<div class="col-sm-10">
							<textarea class="ck-editor__editable_inline"  id="my-editor" name="content" >
								{{old('content')}}

							</textarea>
						</div>
					</div>
					@endif


					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label"></label>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-success btn-lg">Add New Event</button>
						</div>
					</div>
				</form>

			</div>
		</div><!-- row -->
	</div><!-- container -->

	@endsection
	@section('css')
	@endsection
	@section('js')
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script>

		var options = {
			filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
			filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
			filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
			filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
		};
		CKEDITOR.replace('my-editor', options);
	</script>
</script>
@endsection