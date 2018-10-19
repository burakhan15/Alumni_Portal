@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Events</h3><br>
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
		<div class="col" style="padding-top: 10px;padding-bottom: 10px;">
			<a href="{{url('admin/add-new-events')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Event</a>
		</div>
	</div>


	<div class="row">
		<div class="col">

			<span class="counter"></span>
			<table class="table table-hover table-bordered results paginated" id="myTable">
				<thead>
					<tr class="active">
						<th scope="col" onclick="sortTable(0)">Event ID</th>
						<th scope="col" onclick="sortTable(1)">Event Headline</th>
						<th scope="col" onclick="sortTable(2)">Descripton</th>
						<th scope="col" onclick="sortTable(4)">Event Date</th>
						<th scope="col" onclick="sortTable(5)">Edit/Remove</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td><a href="#24687">{{$row->id}}</a></td>
						<td>{{$row->headline}}</td>
						<td>{{$row->description}}</td>
						<td>{{$row->datetime}}</td>
						<td>
							<a href="{{url('admin/edit-events/'.$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							<a href="{{url('admin/del-event/'.$row->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</a>
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