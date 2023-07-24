<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
<!-- @include('user.layouts.nav') -->
@yield('content')
</body>
</html>