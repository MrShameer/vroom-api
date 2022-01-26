@extends('layouts.app')
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name', 'Vroom Dashboard') }}</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

	<link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>
@section('content')
<body class="clickup-chrome-ext_installed">
	<div class="main-content">
		<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
			<div class="container-fluid">
				<div class="alert alert-danger" role="alert">
					@isset($user)
					<strong>There are {{$user->count()}} pending verifications</strong>
					@endisset
					@isset($vehicle)
					<strong>There are {{$vehicle->count()}} pending verifications</strong>
					@endisset
				</div>
				<div class="header-body">

				</div>
			</div>
		</div>
		<div class="container-fluid mt--7">
			<div class="row">
				<div class="col">
					<div class="card shadow">
						<div class="card-header border-0">
							<div class="row align-items-center">
								<div class="col-8">
									<h3 class="mb-0">Users</h3>
								</div>
							</div>
						</div>
						
						<div class="col-12">
						</div>

						<div class="table-responsive">
							<table class="table align-items-center table-flush">
								<thead class="thead-light">
									@isset($user)
									<tr>
										<th scope="col">Name</th>
										<th scope="col">Email</th>
										<th scope="col">Creation Date</th>
										<th scope="col"></th>
									</tr>
									@endisset
									@isset($vehicle)
										<th scope="col">Plat</th>
										<th scope="col">Type</th>
										<th scope="col">Brand</th>
										<th scope="col">Model</th>
										<th scope="col">Age</th>
										<th scope="col">Passanger</th>
										<th scope="col">Door</th>
										<th scope="col">Luggage</th>
										<th scope="col">Gallon</th>
										<th scope="col">Rent</th>
										<th scope="col"></th>
									@endisset
								</thead>
								<tbody>
									@isset($user)
									@foreach($user as $key => $item)
									<tr>
										<td class="col-3">{{$item->name}}</td>
										<td class="col-3">
											<a href="mailto:{{$item->email}}">{{$item->email}}</a>
										</td>
										<td>{{$item->updated_at}}</td>
										<td class="col-4 text-center">
											<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal" onclick='myModal({{$item->id}})'>Check User</button>
											<a href="{{ route('verifyuser', ['id' => $item->id]) }}" type="button" class="btn btn-sm btn-success">Verify User</a>
											<a href="" type="button" class="btn btn-sm btn-danger">Reject User</a>	
										</td>
									</tr>
									@endforeach
									@endisset

									@isset($vehicle)
									@foreach($vehicle as $key => $item)
									<tr>
										<td class="col-1">{{$item->plat}}</td>
										<td class="col-1">{{$item->type}}</td>
										<td class="col-1">{{$item->brand}}</td>
										<td class="col-1">{{$item->model}}</td>
										<td class="col-1">{{$item->age}}</td>
										<td class="col-1">{{$item->passanger}}</td>
										<td class="col-1">{{$item->door}}</td>
										<td class="col-1">{{$item->luggage}}</td>
										<td class="col-1">{{$item->gallon}}</td>
										<td class="col-1">{{$item->rent}}</td>
										<td class="col-2 text-center">
											<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal" onclick='myModal({{$item->plat}})'>Check Vehicle</button>
											<a href="{{ route('verifyvehicle', ['plat' => $item->plat]) }}" type="button" class="btn btn-sm btn-success">Verify</a>
											<a href="" type="button" class="btn btn-sm btn-danger">Reject</a>	
										</td>
									</tr>
									@endforeach
									@endisset
								</tbody>
							</table>
						</div>
						<div class="card-footer py-4">
							<nav class="d-flex justify-content-end" aria-label="...">
								
							</nav>
						</div>
					</div>
				</div>
			</div>
            <footer class="footer">
                @include('layouts.footers.nav')
            </footer> 
		</div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Picture</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
				<div class="modal-body">
					@isset($user)
					<img id="identification" src="" alt="identification" class="img-thumbnail" width="400">
					<img id="license" src="" alt="license" class="img-thumbnail" width="400">
					@endisset
				</div>
				<div class="modal-footer">
        			<button type="button" class="btn btn-success">Verify</button>
        			<button type="button" class="btn btn-danger" data-dismiss="modal">Reject</button>
      			</div>
    		</div>
  		</div>
	</div>
	<script type="text/javascript">
		function myModal(id) {
			document.getElementById("identification").src="../storage/picture/identification/"+id+".jpg";
			document.getElementById("license").src="../storage/picture/license/"+id+".jpg";
		}
	</script>
	
	<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="../assets/js/argon.js?v=1.0.0"></script>
</body>
@endsection</html>
