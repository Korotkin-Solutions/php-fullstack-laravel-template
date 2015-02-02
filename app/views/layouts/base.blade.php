<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>@yield('title')</title>
	
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
		@section('head.css')
		<link rel="stylesheet" href="/stylesheets/screen.css" media="screen, projection"  type="text/css" />
		<link rel="stylesheet" href="/components/fontawesome/css/font-awesome.min.css" />
		@show
		
		@yield('head.js')
	</head>
	<body>
		@yield('header.html')
		@yield('body')
		@yield('footer.html')
		
		@section('footer.js')
		
		@show
	</body>
</html>