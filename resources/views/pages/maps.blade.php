@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<title>{{ config('app.name', 'Vroom Dashboard') }}</title>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
@section('content')
<body>
  	<div class="main-content" id="panel">
		<div class="header bg-primary pb-6">
	  		<div class="container-fluid">
		  		<div class="header-body">
			
		  		</div>
	  		</div>
		</div>
		<div class="row align-items-center py-4">
	  		<div class="col-lg-6 col-7">
				<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
				  	<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
						<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#">Maps</a></li>
						<li class="breadcrumb-item active" aria-current="page">Google maps</li>
				  	</ol>
				</nav>
			</div>
			<div class="col-lg-6 col-5 text-right">
				<a href="#" class="btn btn-sm btn-neutral">New</a>
				<a href="#" class="btn btn-sm btn-neutral">Filters</a>
			</div>
		</div>
			
		<div class="container-fluid ">
	  		<div class="row">
				<div class="col">
		  			<div class="card border-0">
						<div id="map-default" class="map-canvas" data-lat="40.748817" data-lng="-73.985428" style="height: 600px;"></div>
		  			</div>
				</div>
	  		</div>

	  		<footer class="footer">
				@include('layouts.footers.nav')
	  		</footer> 
		</div>
  	</div>

  	<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  	<script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  	<script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  	<script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  	<script src="../assets/js/argon.js?v=1.2.0"></script>
</body>
@endsection</html>
