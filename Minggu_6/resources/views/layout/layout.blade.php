<html>
<head>
	<title>@yield('title')</title>
</head>
<header>
		<link rel="stylesheet" type="type/css" href ="/css/style.css">
		<link rel="stylesheet" type="type/css" href ="{{asset('/css/app.cass') }}">
		<link rel="stylesheet" type="type/css" href ="/css/app.css">      

	@include('layout.header')
</header>
<body>
	<ul>
	<div class="a" style="text-align:justify;font-family:Cambria ; float: right; padding=25px;margin-right: 45px; padding: 5px;
		  border-left-width: 1px;
		  border-left-style: solid;
		  border-left-color:aqua;
		  height :100px; width: 180px;
		  padding-top:10px;">
	@section('sidebar')
		<ul>HTML</ul>
		<ul>CSS</ul>
		<ul>JS</ul>
		<ul>PHP</ul>
	</ul>
	</div>
	@show
		<div class="col-sm-24 col-md-12 col-lg-12">
		<div class="container">
	@yield('content')
		</div>
		</div>
	@include('layout.footer')
</body>
</html>