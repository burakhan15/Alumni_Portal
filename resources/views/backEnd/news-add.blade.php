@extends('backEnd.app')
@section('content')





<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Newsroom Add Post</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col -->
	</div><!-- row -->


	<div class="row">
		<div class="col">

			<form method="post" action="{{url('admin/add-news')}}" enctype="multipart/form-data"> 
				@csrf
				<div class="form-group row">
					<label for="smallimage" class="col-sm-2 col-form-label">Small Image</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="smallimage" name="image">
						<small id="passwordHelpBlock" class="form-text text-muted">( 150x150 )</small>
					</div>
				</div>
				<div class="form-group row">
					<label for="postheadline" class="col-sm-2 col-form-label">Post Headline</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="postheadline" name="headline" placeholder="Post Headline">
					</div>
				</div>
				<div class="form-group row">
					<label for="description" class="col-sm-2 col-form-label">Post Description</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="description" name="description" placeholder="Post Description">
					</div>
				</div>
				<div class="form-group row">
					<label for="post" class="col-sm-2 col-form-label">Post:</label>
					<div class="col-sm-10">

						<textarea class="ck-editor__editable_inline" id="my-editor" name="content">
						</textarea>

		
					</div>
				</div>
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-success btn-lg">Add Post</button>
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