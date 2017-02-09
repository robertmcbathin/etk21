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
          <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.75);">
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
    <div class="card-deck">
      <div class="card e-card">
        <img class="card-img-top" src="http://placehold.it/465x300" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card e-card">
        <img class="card-img-top" src="http://placehold.it/465x300" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-deck">
      <div class="card e-card">
        <img class="card-img-top" src="http://placehold.it/465x300" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card e-card">
        <img class="card-img-top" src="http://placehold.it/465x300" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="card-deck">
      <div class="card e-card">
        <img class="card-img-top" src="http://placehold.it/465x300" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card e-card">
        <img class="card-img-top" src="http://placehold.it/465x300" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div> 
</div><!-- End of card block -->
  <div class="container">
    <div class="row">
      <div class="category__header">
        <h2 class="category__title">Как нас найти</h2>
        <a class="category__link link--black" href="/category/laravel-5.4">Подробнее</a>
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
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
        position: {lat: 56.140717, lng: 47.199408},
        content: contentString
      });
      infowindow.open(map,marker);
      }
       marker.addListener('click', function() {
    infowindow.open(map, marker);
  }); 
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsfO8qFpSStho6O8-HQwpZEkaOv1ynK5A&callback=initMap"
        async defer></script>
</div>
  <!-- Start of partners block -->
  <div class="container">
    <div class="row">
      <div class="category__header">
        <h2 class="category__title">Партнеры</h2>
        <a class="category__link link--black" href="/category/laravel-5.4"></a>
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