@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Graduate Edit</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col -->
	</div><!-- row -->


	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body text-center">
					<h1>20</h1>
					<p>Total Joined Event</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<div class="card-body text-center">
					<h1>20</h1>
					<p>Total Created Event</p>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col">

			<form method="POST" action="{{url('admin/edit-student')}}">
				@csrf
				@if($errors->has('name'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" value="{{$students->name}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" id="name" value="{{$students->name}}">
					</div>
				</div>
				@endif
				@if($errors->has('sur_name'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="sur_name" value="{{$students->sur_name}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Sur Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sur_name" id="name" value="{{$students->sur_name}}">
					</div>
				</div>
				@endif
				@if($errors->has('birth_date'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Birth Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="birthdate" name="birth_date" value="{{$students->birth_date}}">
						<small id="birthdate" class="form-text text-muted">Current Date: 01/01/2014</small>
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Birth Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="birthdate" name="birth_date" value="{{$students->birth_date}}">
						<small id="birthdate" class="form-text text-muted">Current Date: 01/01/2014</small>
					</div>
				</div>
				@endif


				@if($errors->has('country'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Country</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="country" value="{{$students->country}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Country</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="country" id="name" value="{{$students->country}}">
					</div>
				</div>
				@endif

				@if($errors->has('department'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Department</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="department" value="{{$students->department}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Department</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="department" id="name" value="{{$students->department}}">
					</div>
				</div>
				@endif

				@if($errors->has('start_date'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">School Start Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control"  name="start_date" value="{{$students->start_date}}">
						<small  class="form-text text-muted">Current Date: 01/01/2014</small>
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">School Start Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control"  name="start_date" value="{{$students->start_date}}">
						<small  class="form-text text-muted">Current Date: 01/01/2014</small>
					</div>
				</div>
				@endif

				@if($errors->has('graduation'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Graduate Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control"  name="graduation" value="{{$students->graduation}}">
						<small class="form-text text-muted">Current Date: 01/01/2014</small>
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Graduate Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="graduation" value="{{$students->graduation}}">
						<small  class="form-text text-muted">Current Date: 01/01/2014</small>
					</div>
				</div>
				@endif

				@if($errors->has('school_id'))
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Schoold id</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="school_id" name="school_id" value="{{$students->school_id}}" style="border: 1px solid red">
					</div>
				</div>
				@else
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Schoold id</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="school_id" id="school_id" value="{{$students->school_id}}">
					</div>
				</div>
				@endif

				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Radios</legend>
						<div class="col-sm-10">
							<div class="form-check">
								@if($students->gender=="ERKEK")
								<input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
								@else
								<input class="form-check-input" type="radio" name="gender" id="male" value="male">
								@endif
								<label class="form-check-label" for="gridRadios1">Male</label>
							</div>
							<div class="form-check">
								@if($students->gender=="BAYAN")
								<input class="form-check-input" type="radio" name="gender" id="female" value="female" checked="">
								@else
								<input class="form-check-input" type="radio" name="gender" id="female" value="female">
								@endif
								
								<label class="form-check-label" for="gridRadios2">Female</label>
							</div>
						</div>
					</div>
				</fieldset>

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-danger btn-lg">Save</button>
					</div>
				</div>
				<input type="hidden" name="identity_id" value="{{$students->identity_id}}">
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