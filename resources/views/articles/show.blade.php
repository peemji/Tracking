@extends('layouts.main')
@section('page_title','Hello Page')
@section('content')

<div class="page-header" id="banner">
	<h2>{{ $article->title }}</h2>
	{{-- <div class="form-group">
		{!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
	</div> --}}
	<a href="{{ url("articles/{$article->id}/edit") }}" class="btn btn-primary">Edit</a>
</div>


<div class="panel panel-default">

	<div class="panel-body">
		{{ $article->body }}
	</div>
	<div class="panel-footer">
		{{ $article->published_at }}
	</div>

</div>

{!! Form::open(['method'=>'DELETE','url'=>'articles/'.$article->id]) !!}
{!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}

@stop