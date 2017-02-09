@extends('layouts.master')

@section('description')
Новости
@endsection

@section('title')
Новости
@endsection

@section('content')
<div class="container">
  <h2 class="category__title common-text">Новости</h2>
  <div class="row">
  <div class="col-sm-12">
      <div class="card-columns">
    @foreach ($articles as $article)
        <div class="card" >
          <div class="card-block">
            <h4 class="card-title">{{ $article->title }}</h4>
            <p class="card-text secondary">{{ $article->description }}</p>
            <a href="{{route('article',['id' => $article->id])}}">Читать далее...</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ $article->created_at }}</small>
          </div>
        </div>
    @endforeach
      </div>
    </div>
  </div>
  <div class="row"></div>
</div>
@endsection