@extends('layouts.master')

@section('description')
Карты безналичной оплаты проезда Чебоксары
@endsection

@section('title')
Карты безналичной оплаты проезда
@endsection

@section('content')
<div class="container">
  <div class="row">
       @foreach ($card_types as $card_type)
      <div class="category__header">
        <h3 class="category__title">{{ $card_type->name }}</h2>
      </div>
      @foreach ($cards as $card)
        @if (($card->type == $card_type->id) && ($card->primary == true))
            <div class="row">
              <div class="col-md-5 media">
                <img src="{{ $card->image }}" alt="{{ $card->name }}" class="rounded mx-auto d-block d-flex align-self-center mr-3">
              </div>
              <div class="col-md-7 index-card">
                <h3><strong>{{ $card->name }}</strong></h3>
                <blockquote> {{ $card->description }} <br><a href="{{ route('card', ['id'=>$card->id]) }}">Подробнее о карте...</a></blockquote>
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
        @elseif (($card->type == $card_type->id) && ($card->primary != true))
          <div class="card" style="width: 220px;">
            <img class="card-img-top" src="{{$card->image}}" alt="{{$card->name}}" height="140px">
            <div class="card-block">
              <h4 class="card-title">{{$card->name}}</h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Стоимость</strong> <span>{{$card->price}}</span></li>
              <li class="list-group-item"><strong>Срок службы</strong> <span>{{$card->lifetime}}</span></li>
              <li class="list-group-item"><strong>Тариф</strong> <span>{{$card->tariff}}</span></li>
            </ul>
            <div class="card-block">
              <a href="{{ route('card', ['id'=>$card->id]) }}">Подробнее...</a>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>

</div>
 
</div>
@endsection