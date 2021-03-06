<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>
	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	
	<!-- Scripts -->
	<script>
		window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
	</script>
	<script src="/js/app.js"></script>
</head>
	
<body>
@yield('content')
</body>