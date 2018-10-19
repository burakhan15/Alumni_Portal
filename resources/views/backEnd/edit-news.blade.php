@extends('backEnd.app')
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

			<form method="post" action="{{url('admin/edit-news')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group row">
					<label for="smallimage" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						@if(empty($news->image))
						<img src="{{asset('images/no-image.png')}}" class="img-thumbnail" width="150">
						@else
						<img src="{{asset('images/'.$news->image)}}" class="img-thumbnail" width="150">
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="smallimage" class="col-sm-2 col-form-label">Small Image</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="smallimage" name="image">
						<small id="passwordHelpBlock" class="form-text text-muted">( 150x150 )</small>
					</div>
				</div>

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Post Headline</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" name="headline" value="{{$news->headline}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Post Description</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="staticEmail" name="description" value="{{$news->description}}">
					</div>
				</div>
				<div class="form-group row">

					<label for="staticEmail" class="col-sm-2 col-form-label">Post:</label>
					<div class="col-sm-10">
						<textarea class="ck-editor__editable_inline" id="my-editor" name="content">
							{{$news->content}}
						</textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-danger btn-lg">Save</button>
					</div>
				</div>
				<input type="hidden" name="id" value="{{$news->id}}">
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