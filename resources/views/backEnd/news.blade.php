@extends('backEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Newsroom</h3><br>
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
			<a href="{{url('admin/add-news')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Post</a>
		</div>
	</div>


	<div class="row">
		<div class="col">


			<table class="table table-hover table-bordered results paginated" id="myTable">
				<thead>
							<tr class="active">
						<th scope="col" onclick="sortTable(0)">Post ID</th>
						<th scope="col" onclick="sortTable(1)">Post Headline</th>
						<th scope="col" onclick="sortTable(2)">Descripton</th>
						<th scope="col" onclick="sortTable(3)">Posted Date</th>
						<th scope="col" onclick="sortTable(4)">Edit/Remove</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $row)
					<tr>
						<td><a href="#24687">{{$row->id}}</a></td>
						<td>{{$row->headline}}</td>
						<td>{{$row->description}}</td>
						<td>{{$row->created_at}}</td>
						<td>
							<a href="{{url('admin/edit-news/'.$row->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
							<a href="{{url('admin/del-news/'.$row->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</a>
						</td>
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
@endsection
@section('js')
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