@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>About</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col -->
	</div><!-- row -->


	<div class="row">
		<div class="col">
			<form method="post" action="{{url('admin/contact')}}">
				@csrf
				<textarea class="ck-editor__editable_inline" id="my-editor" name="content">
					{{$contact->content}}
				</textarea>
				<hr>
				<button type="submit" class="btn btn-danger"><i class="fa fa-check"></i> Save</button>
			</form>
		</div><!-- col -->
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
@endsection