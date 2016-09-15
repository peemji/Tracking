@extends('layouts.main')
@section('page_title','Hello Page')
@section('content')
<h2>Write a New Article</h2>

@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

{!! Form::open(['url' => 'articles']) !!}
@include('articles._form',['submitButtonText'=>'<i class="glyphicon glyphicon-plus"></i>Add Article'])
{!! Form::close() !!}
@stop