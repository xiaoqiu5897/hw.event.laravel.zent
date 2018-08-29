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
	<!--===============================================================================================-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2" style="text-align: center;">ID</th>
										<th class="cell100 column3">CODE</th>
										<th class="cell100 column4">NAME</th>
										<th class="cell100 column5">PRICE</th>
										<th class="cell100 column6">QUANTITY</th>
										<th class="cell100 column8">ACTION</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($products as $product)
									<tr class="row100 body">
										<td class="cell100 column2" align="center">{{$product->id}}</td>
										<td class="cell100 column3">{{$product->code}}</td>
										<td class="cell100 column4">{{$product->name}}</td>
										<td class="cell100 column5">{{$product->price}}</td>
										<td class="cell100 column6">{{$product->quantity}}</td>
										<td class="cell100 column8">
											<a href="{{asset('')}}events/{{$product->id}}"><button class="btn btn-info">Show</button></a>
											<a href="{{asset('')}}events/edit/{{$product->id}}"><button class="btn btn-warning">Edit</button></a>
											<form action="{{asset('')}}events/{{$product->id}}" method="post" onsubmit="return confirm('Bạn có muốn xóa không?');">
												{{csrf_field()}}
												<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
												{{method_field('delete')}}
												<input type="hidden" name="_method" value="delete">
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
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
	<script src="{{ URL::asset('js/main.js') }}"></script>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script type="text/javascript" charset="utf-8">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>

</body>
</html>