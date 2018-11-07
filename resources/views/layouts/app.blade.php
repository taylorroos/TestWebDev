<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="noindex" />

	<meta name="csrf-token" content="{{ csrf_token() }}">

  	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Styles -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="jumbotron" id="app" style="display: flex;justify-content: center;align-items: center;height: 100vh;margin: 0px;">
	    @yield('content')
    </div>

</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
