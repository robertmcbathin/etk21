@extends('layouts.master')

@section('description')
{{$card->name}}
@endsection

@section('title')
{{$card->name}}
@endsection

@section('content')
<div class="container">
  <div class="row">
            <div class="row">
              <div class="col-md-5 media">
                <img src="{{ $card->image }}" alt="{{ $card->name }}" class="rounded mx-auto d-block d-flex align-self-center mr-3">
              </div>
              <div class="col-md-7 index-card">
                <h3><strong>{{ $card->name }}</strong></h3>
                <blockquote> {{ $card->description }}</blockquote>
              </div>
            </div>
            <hr>
              <div class="col-md-4 index-card-column text-center">
                <strong>Стоимость карты</strong>
                <p>{{ $card->price }}</p>
              </div>
              <div class="col-md-4 index-card-column text-center">
                <strong>Срок службы</strong>
                <p>{{ $card->lifetime }}</p>
              </div>
              <div class="col-md-4 index-card-column text-center">
                <strong>Тариф</strong>
                <p>{{ $card->tariff }}</p>
              </div>
  </div>

</div>
 
</div>
@endsection