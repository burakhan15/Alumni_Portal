@extends('frontEnd.app')
@section('content')


<div class="page-headline">
	<div class="container">
		<h3>Graduates</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row">
		<div class="col-md-3 offset-md-9" style="padding: 20px 0px 0px 0px;padding-right: -10px;">
			<form class="form-inline my-2 my-lg-0">
				<input type="text" class=" form-control search" placeholder="Search Graduate..." aria-label="Search Graduate..." aria-describedby="basic-addon2">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row paddingTopBottom">

		<div class="col">

			<table class="table table-hover table-bordered results" id="myTable">
				<thead>
					<tr class="active">
						<th scope="col" onclick="sortTable(0)"><i class="fa fa-angle-down"></i> Name Surname</th>
						<th scope="col" onclick="sortTable(1)"><i class="fa fa-angle-down"></i> Semester</th>
						<th scope="col" onclick="sortTable(2)"><i class="fa fa-angle-down"></i> Department</th>
						<th scope="col" onclick="sortTable(3)"><i class="fa fa-angle-down"></i> Graduate Date</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td><a href="{{url('profile/'.$user->school_id)}}"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; {{$user->name}} {{$user->sur_name}}</a></td>
						<td>{{$user->semester}}</td>
						<td>{{$user->department}}</td>
						<td>{{$user->graduation}}</td
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
		</div>

	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
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