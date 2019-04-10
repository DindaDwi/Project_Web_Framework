<link href="style.css" rel="stylesheet" type="type/css" href ="./css/style.css">
<link rel="stylesheet" type="type/css" href ="{{asset('/css/app.cass') }}">
<link rel="stylesheet" type="type/css" href ="{{asset('/css/app.cass') }}">
<link rel="stylesheet" type="type/css" href ="./css/app.css">
 
<div class="a">
@extends('layout.layout')
@section('title',$title)
	@section('sidebar')
		@parent
	@endsection
@section('content')
	<img src="herry.jpg" width="50%" height="25%">
	<p>{{ $konten }}</p>
@stop
</div>