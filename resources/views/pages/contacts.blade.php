@extends('layouts.master')

@section('description')
Об обществе с ограниченной ответственностью "ЕТК"
@endsection

@section('title')
Единая транспортная карта
@endsection

@section('content')
<div class="container">
  <div class="category__header">
    <h2 class="category__title">Контакты</h2>
  </div>
</div>
  <div class="row">
  <div class="container text-center contacts-block">
    <span><img src="/pictures/icons/phone-call.svg" alt="" height="32px"> <p>+7 (8352) 36-03-30, 36-33-30</p></span>
    <span><img src="/pictures/icons/monthly-calendar.svg" alt="" height="32px"> 
    <p><strong>с 6 по 19</strong> число каждого месяца: Пн-Пт <strong>c 8:00 до 17:00</strong>, обед с 12 до 13</p>
        <p><strong>с 20 по 5</strong> число: Пн-Пт <strong>c 8:00 до 17:30</strong>, без обеда. Сб: <strong>с 9:00 до 15:00</strong></p>
    </span>
    <span><img src="/pictures/icons/location-pin.svg" alt="" height="32px"> <p>428000, Россия, Чувашская Республика, г. Чебоксары, Московский проспект, д.41/1 (помещение 1)</p></span>
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
@endsection