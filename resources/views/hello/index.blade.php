@extends('layouts.main')
@section('page_title','Hello Page')
@section('content')

	<h1>{!! $title !!}</h1>
	<p>{{ $subtitle }}</p>

	<p>{{ time() }}</p>
	
	<div class="row">
		<div class="col-md-4">lorem</div>
	</div>
@stop