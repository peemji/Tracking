@extends('layouts.main')
@section('page_title','Hello Page')
@section('content')

	<h2>Articles</h2>
	<h4>All Aricles
		@if(Auth::check())
			for {{ Auth::user()->name }}
		@endif
	</h4>
@foreach($articles as $article)

	<div class="panel panel-default">
		
		<div class="panel panel-heading">
			<a href="{{ url('articles/'. $article->id) }}">{{ $article->title }}</a>
		</div>

		<div class="panel-body">{{ $article->body }}</div>
		<div class="panel-footer">{{ $article->published_at->diffForHumans() }}</div>
	</div>
@endforeach
@stop