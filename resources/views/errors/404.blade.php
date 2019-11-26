@extends('layouts.main')

@section('content')
<div class="col-md-12 padding-20 text-center">
	<img src="{{ asset('images/404.png') }}" alt="404" width="200px" height="200px">
	<h1>很抱歉，我們找不到您要的頁面</h1>
	<br>
	<a href="{{ route('home') }}" class="btn btn-info btn-wide">
		<i class="fa fa-arrow-circle-left"></i> 回首頁</a>
</div>
@endsection