<!DOCTYPE html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">

	<link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
</head>
<body>
	<h1>Header</h1>

	@yield('content')

</body>
</html>
