@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Graduates</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div><!-- col -->
		<div class="col-md-3">
			<form >
				<div class="input-group mb-3">
						<input type="text" class=" form-control search" placeholder="Search Graduate..." aria-label="Search Graduate..." aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div><!-- row -->
	

	<div class="row">
		<div class="col">
		

		
			<span class="counter"></span>
			<table class="table table-hover table-bordered results paginated" id="myTable" >
				
				<thead>
					<tr class="active">
						<th scope="col" onclick="sortTable(0)">Student ID</th>
						<th scope="col" onclick="sortTable(1)">Name Surname</th>
						<th scope="col" onclick="sortTable(2)">Country</th>
						<th scope="col" onclick="sortTable(3)">Register Date</th>
						<th scope="col" onclick="sortTable(4)">See More/Remove</th>
					</tr>
				</thead>
				<tbody>
					@foreach($students as $student)
					<tr>
						<td><a href="{{url('admin/edit-student/'.$student->identity_id)}}">{{$student->school_id}}</a></td>
						<td>{{$student->name}} &nbsp; {{$student->sur_name}}</td>
						<td>{{$student->country}}</td>
						<td>{{$student->start_date}}</td>
						<td>
							<a href="{{url('admin/edit-student/'.$student->identity_id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> See More</a>
							<a href="{{url('admin/del-student/'.$student->identity_id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr class="warning no-result" style="display:none;">
						<td colspan="8"><i class="fa fa-warning"></i> Bulunamadı</td>
					</tr>
				</tfoot>
			</table>


			<div class="clear"></div>
		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
<link href={{asset('frontEnd/css/sweetalert2.min.css')}} rel="stylesheet">
@endsection
@section('js')
<script src={{asset('frontEnd/js/jquery.form.min.js')}}></script>
<script src={{asset('frontEnd/js/jquery.validate.min.js')}}></script>
<script src={{asset('frontEnd/js/messages_tr.min.js')}}></script>
<script src={{asset('frontEnd/js/sweetalert2.min.js')}}></script>
<script type="text/javascript">
	$(".search").keyup(function() {
		var searchTerm = $(".search").val();
		var bulunan = 0
		$('.results tbody tr').each(function(e) {
			var table = $(this)
			if (table.text().toLowerCase().includes(searchTerm.toLowerCase())) {
				bulunan += 1
				table.show()
				$(".counter").text(bulunan + " Register Found")
				$(".no-result").css('display', 'none')
			} else {
				table.hide()
				$(".counter").text(bulunan + " Register Found")
				if (bulunan == 0) {
					$(".no-result").css('display', '')
				}
			}
		})
	});
</script>
@endsection