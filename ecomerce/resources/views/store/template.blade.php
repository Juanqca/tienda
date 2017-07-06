<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title','My laravel Store')</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lobster|Kaushan+Script|Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
@if(\Session::has('message'))
@include('store.partials.message')
@endif

	@include('store.partials.nav')
	@yield('content')
	@include('store.partials.footer')


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{{asset('js/pinterest_grid.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
