@extends('layouts.main')
@section('page_title','Hello Page')
@section('content')
<h2>Edit: {{ $article->title }}</h2>
@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

{!! Form::model($article,['method'=>'PATCH',
	'action' => ['ArticlesController@update',$article->id]]) !!}



@include('articles._form',
	['submitButtonText'=>'<i class="glyphicon glyphicon-pencil"></i>Edit Article'])
{!! Form::close() !!}
@stop