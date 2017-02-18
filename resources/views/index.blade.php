@extends('layouts.master')

@section('description')
ООО "Единая транспортная карта" - оператор безналичной оплаты проезда в общественном транспорте города Чебоксары 
@endsection

@section('title')
Единая транспортная карта
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="category__header">
      <a class="category__link link--black" href="{{ route('news') }}">Смотреть все новости</a>
    </div>
  </div>
  <div class="row">
  @foreach ($main_article as $main_article)
    <div class="col-sm-6">
      <div class="card">
        <div class="card card-inverse">
        <img class="card-img" src="{{$main_article->image}}" alt="{{ $main_article->description }}">
          <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.75);border-spacing: ">
            <h4 class="card-title">{{ $main_article->title }}</h4>
            <p class="card-text">{{ $main_article->description }}</p>
            <a href="{{route('article',['id' => $main_article->id])}}" class="card-link">Читать далее...</a>
            <p class="card-text"><small class="carbon-text">{{ $main_article->created_at }}</small></p>
          </div>
        </div>
      </div>
    </div>
  @endforeach
    <div class="col-sm-6">
      <div class="card-deck">
    @foreach ($articles as $article)
        <div class="card">
            <img class="card-img-top" src="{{ $article->image }}" alt="Card image cap" height="180">
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
</div><!-- End of article group -->
  <div class="container">
  <div class="row">
    <div class="category__header">
      <h2 class="category__title">Карты</h2>
    </div>
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
</div><!-- End of card block -->
  <div class="container">
    <div class="row">
      <div class="category__header">
        <h2 class="category__title">Как нас найти</h2>
      </div>
    </div>
  </div>
<div class="container-fluid up-a-little" id="map">
  <script type="text/javascript">
    function initMap() {

        var myLatLng = {lat: 56.141757, lng: 47.199441};
          var styleArray = [
          {
            featureType: 'all',
            stylers: [
              { saturation: -80 }
            ]
          },{
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [
              { hue: '#00ffee' },
              { saturation: 50 }
            ]
          },{
            featureType: 'poi.business',
            elementType: 'labels',
            stylers: [
              { visibility: 'off' }
            ]
          }
        ];
        // Create a map object and specify the DOM element for display.
        mapBlock = document.getElementById('map');
        var map = new google.maps.Map(mapBlock, {
          center: myLatLng,
          scrollwheel: false,
          styles: styleArray,
          zoom: 16
        });
        var marker = new google.maps.Marker({
              position: {lat: 56.140717, lng: 47.199408},
              map: map
            });
        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Московский проспект, д.41/1, помещение 1</h2>'+
      '<i>Остановка <strong>улица Кривова</strong></i>' +
      '<div id="bodyContent">'+
      '<p>Телефоны: <strong>(8352) 36-03-30, 36-33-30</strong></p>'+
      '<p>Электронная почта: Uluru, <a href="mailto:transkarta@bk.ru">'+
      'transkarta@bk.ru</a> </p><hr>'+
      '<p>Режим работы:<strong> с 6 по 19</strong> число каждого месяца:<br> Пн-Пт <strong>c 8:00 до 17:00</strong>, обед с 12 до 13</p>'+
       '<p><strong> с 20 по 5</strong> число:<br> Пн-Пт <strong>c 8:00 до 17:30</strong>, без обеда. Сб: <strong>с 9:00 до 15:00</strong></p>'+
      '</div>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
        position: {lat: 56.140717, lng: 47.199408},
        content: contentString
      });
      infowindow.open(map,marker);
             marker.addListener('click', function() {
    infowindow.open(map, marker);
  }); 
      }
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsfO8qFpSStho6O8-HQwpZEkaOv1ynK5A&callback=initMap"
        async defer></script>
</div>
  <!-- Start of partners block -->
  <div class="container">
    <div class="row">
      <div class="category__header">
        <h2 class="category__title">Партнеры</h2>
      </div>
    </div>
    <div class="row partners-block">
    <div class="col-sm-6 col-md-3 col-lg-3 col-md-offset-2">
        <img src="/pictures/partners/sberbank2010.png" alt="Сбербанк России" class="mx-auto partner-logo">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="/pictures/partners/umarsh.png" alt="Удобный маршрут" class="mx-auto partner-logo">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="/pictures/partners/steelbank.png" alt="Стальбанк" class="mx-auto partner-logo">
      </div>
    </div>
    <div class="row partners-block">
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="/pictures/partners/citycard.png" alt="CityCard" class="mx-auto partner-logo">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="/pictures/partners/get.png" alt="Горэлектротранс" class="mx-auto partner-logo">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="/pictures/partners/pochta.png" alt="Почта России" class="mx-auto partner-logo">
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <img src="/pictures/partners/chat.png" alt="Чувашавтотранс" class="mx-auto partner-logo">
      </div>
    </div>

  </div>
  <!-- End of partners block -->
@endsection