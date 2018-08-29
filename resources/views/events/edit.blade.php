<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
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
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/datepicker.css') }} ">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="wrap-table100-nextcols js-pscroll row">
						<div class="col-5" style="padding-left: 100px">
							<h3>ID: </h3>
							<h3>TITLE: </h3>
							<h3>CONTENT: </h3>
							<h3>TIME: </h3>
							<h3>LOCATION: </h3>
							<h3>CREATED_AT: </h3>
						</div>
						<div class="col-7" style="padding-left: 100px">
							<form action="{{asset('')}}events/{{$event->id}}"  method="post" >
								{{csrf_field()}}
								<h3><input type="text" name="id" value="{{$event->id}}" required></h3>
								<h3><input type="text" name="title" value="{{$event->title}}"></h3>
								<h3><input type="text" name="time" value="{{$event->time}}"></h3>
								<h3><input type="text" name="location" value="{{$event->location}}"></h3>
								<h3><input type="text" name="created_at" value="{{$event->created_at}}"></h3>
								<button type="submit" class="btn btn-dark">Lưu</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--===============================================================================================-->	
<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js') }} "></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('vendor/bootstrap/js/popper.js') }} "></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script>
	$('.js-pscroll').each(function(){
		var ps = new PerfectScrollbar(this);

		$(window).on('resize', function(){
			ps.update();
		})

		$(this).on('ps-x-reach-start', function(){
			$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
		});

		$(this).on('ps-scroll-x', function(){
			$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
		});

	});

</script>
<!--===============================================================================================-->
<script src="{{ URL::asset('js/datepicker.js') }}"></script>

</body>
</html>