<!DOCTYPE html>
<html lang="{{app()->getlocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fluid</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

    
            @include('partials.menu')
    
            @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    
    <script>
		window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
	</script>


</body>
</html>