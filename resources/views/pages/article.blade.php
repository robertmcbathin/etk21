@extends('layouts.master')

@section('description')
{{ $article->description }}
@endsection

@section('title')
{{ $article->title }}
@endsection

@section('content')
<div class="container">
  <div class="row">
	<div class="col-md-5">
		<img src="{{ $article->image }}" alt="{{ $article->title }}">
	</div>
	<div class="col-md-7 article">
	    <p>{{ $article->created_at }}</p>
		<h3>{{ $article->title }}</h3>
		<hr>
		<blockquote>{{ $article->content }}</blockquote>
	</div>
  </div>
  <div class="row"></div>
</div>
@endsection