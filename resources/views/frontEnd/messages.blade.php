@extends('frontEnd.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<div class="page-headline">
				<h3>Messages</h3><br>
				<small>Cyprus International University</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table table-hover table-bordered results paginated" id="myTable">
				<thead>
					<tr class="active">
						<th scope="col" onclick="sortTable(0)">Message ID</th>
						<th scope="col" onclick="sortTable(1)">Head Line </th>
						<th scope="col" onclick="sortTable(3)">Register Date</th>
						<th scope="col" onclick="sortTable(4)">See More/Remove</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $message)
					<tr>
						<td><a href="{{url('look-message/'.$message->id)}}">{{$message->id}}</a></td>
						<td>{{$message->headline}}</td>
						<td>{{$message->created_at}}</td>
						<td>
							<a href="{{url('look-message/'.$message->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Look Message</a>
							<a href="{{url('del-message/'.$message->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
		</div>
	</div>
</div>
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