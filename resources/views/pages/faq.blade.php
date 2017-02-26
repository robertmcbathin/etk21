@extends('layouts.master')

@section('description')
Часто задаваемые вопросы
@endsection

@section('title')
Вопросы  ответы
@endsection

@section('content')
<div class="container center">
  <div class="row">
      @foreach ($questions as $question)
      <div class="media">
      
        <div class="media-body">
        <strong>{{ $question->content }}</strong>
          
          <div class="media mt-3">
            <img class="d-flex mr-3" src="/pictures/icons/right-arrow.svg" width="32px" alt="">
            <div class="media-body">
              {{ $question->answer }}
            </div>
          </div>
        </div>
      </div>
      @endforeach
  </div>
</div>
@endsection