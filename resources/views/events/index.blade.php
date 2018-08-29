<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.ico') }} "/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }} ">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }} ">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animate/animate.css') }} ">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/select2/select2.min.css') }} ">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }} 
	">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }} "> 
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }} ">
	<!--===============================================================================================-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Cormorant+Garamond:600i|Playfair+Display:400i" rel="stylesheet">
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<h1 style="font-family: 'Playfair Display', serif!important;margin-left: 45%; margin-bottom: 60px; color: white">EVENTS   :></h1>
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="cell100 column2" style="text-align: center;">ID</th>
								<th class="cell100 column3">TITLE</th>
								<th class="cell100 column4">CONTENT</th>
								<th class="cell100 column5">TIME</th>
								<th class="cell100 column6">LOCATION</th>
								<th class="cell100 column7">CREATED_AT</th>
								<th class="cell100 column7">UPDATED_AT</th>
								<th class="cell100 column8">ACTION</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($events as $event)
							<tr>
								<td class=" column2" align="center">{{$event->id}}</td>
								<td class=" column3">{{$event->title}}</td>
								<td class=" column4">{{$event->content}}</td>
								<td class=" column5">{{$event->time}}</td>
								<td class=" column6">{{$event->location}}</td>
								<td class=" column7">{{$event->created_at}}</td>
								<td class=" column7">{{$event->updated_at}}</td>
								<td class=" column8">
									<button type="button" data-toggle="modal" data-target="#modal-show" data-url="{{ route('events-ajax.show',$event->id) }}" class="btn-show"><i class="far fa-eye"></i></button>
									<button type="button" data-toggle="modal" data-target="#modal-edit" data-url="{{ route('events-ajax.edit',$event->id) }}" class="btn-edit"><i class="fas fa-edit"></i></button>
									<button type="submit" data-url="{{ route('events-ajax.destroy',$event->id) }}" class="btn-delete"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<button class="btn btn-dark btn-add" data-toggle="modal" data-target="#modal-add" style="margin-left: 45%; margin-top: 50px">Thêm mới</button>
			</div>
		</div>
	</div>

	{{-- Modal xem chi tiết --}}
	<div class="modal fade" id="modal-show">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style="font-family: 'Playfair Display', serif!important;"><span class="name-show"></span> - pls don't forget </h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" style="text-align: left; padding-left: 100px;">
					<h3><i class="far fa-calendar-alt"></i>&nbsp&nbsp&nbsp<span class="event-title-show"></span></h3>
					<h3><i class="far fa-clock"></i></i>&nbsp&nbsp&nbsp<span class="event-time-show"></span></h3>
					<h3><i class="fa fa-map-marker-alt"></i>&nbsp&nbsp&nbsp<span class="event-location-show"></span></h3>
					<h3><i class="far fa-comment"></i>&nbsp&nbsp&nbsp</i><span class="event-content-show"></span></h3>
				</div>
			</div>
		</div>
	</div>


	{{-- Modal thêm mới  --}}
	<div class="modal fade" id="modal-add">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form action="" data-url="{{ route('events-ajax.store') }}" id="form-add" method="POST" role="form">
					<div class="modal-header">
						<h4 class="modal-title" style="font-family: 'Playfair Display', serif!important;">Add new event</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							Title: <input type="text" class="form-control" id="event-title-add">
							Time: <input type="text" class="form-control" id="event-time-add">
							Location: <input type="text" class="form-control" id="event-location-add">
							Content: <input type="text" class="form-control" id="event-content-add">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-dark">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	{{-- Modal sửa --}}
	<div class="modal fade" id="modal-edit">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form action="" id="form-edit" method="POST" role="form" >
					<div class="modal-header">
						<h4 class="modal-title" style="font-family: 'Playfair Display', serif!important;">Edit event</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							Title: <input type="text" class="form-control" id="event-title-edit">
							Time: <input type="text" class="form-control" id="event-time-edit">
							Location: <input type="text" class="form-control" id="event-location-edit">
							Content: <input type="text" class="form-control" id="event-content-edit">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-dark">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	

	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$(document).ready(function () {
			$('.btn-show').click(function () {
				// $('#modal-show').modal('show');
				var url = $(this).attr('data-url');
				$.ajax({
					type: 'get',
					url: url,
					success: function (response) {
						// console.log(response);
						$('.event-title-show').text(response.data.title);
						$('.name-show').text(response.name);
						$('.event-time-show').text(response.data.time);
						$('.event-location-show').text(response.data.location);
						$('.event-content-show').text(response.data.content);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						//xử lý lỗi tại đây
					}
				})
			})

			$('.btn-edit').click(function () {
				var url = $(this).attr('data-url');
				$.ajax({
					type: 'get',
					url:url,
					success: function (response) {
						$('#form-edit').attr('data-url','{{ asset('events-ajax.update/') }}/'+response.data.id)
						$('#event-title-edit').val(response.data.title)
						$('#event-time-edit').val(response.data.time)
						$('#event-location-edit').val(response.data.location)
						$('#event-content-edit').val(response.data.content)
					}
				})
			})

			$('#form-edit').submit(function (e) {
				e.preventDefault();
				var url = $(this).attr('data-url');
				$.ajax({
					type: 'put',
					url:url,
					data: {
						title: $('#event-title-edit').val(),
						content: $('#event-content-edit').val(),
						time: $('#event-time-edit').val(),
						location: $('#event-location-edit').val(),
					},
					success: function (response) {
						setTimeout(function () {
							window.location.href="{{ route('events-ajax.index') }}";
						},800);
					}
				})
			})

			$('#form-add').submit(function (e) {
				e.preventDefault();
				var url = $(this).attr('data-url');
				$.ajax({
					type: 'post',
					url:url,
					data: {
						title: $('#event-title-add').val(),
						content: $('#event-content-add').val(),
						time: $('#event-time-add').val(),
						location: $('#event-location-add').val()
					},
					success: function (response) {
						toastr.success('Add new todo success!')
						setTimeout(function () {
							window.location.href="{{ route('events-ajax.index') }}";
						},800);
					}
				})
			})

			$('.btn-delete').click(function () {
				var url = $(this).attr('data-url');
				$.ajax({
					type: 'delete',
					url: url,
					success: function (response) {
						swal({
							title: "Thành công!",
							text: "Sản phẩm đã được thêm vào giỏ hàng",
							icon: "success",
							button: "OK",
						});
						setTimeout(function () {
							window.location.href="{{ route('events-ajax.index') }}";
						},800);
					},
					error: function (error) {

					}
				})
			})
		})
	</script>
</body>
</html>