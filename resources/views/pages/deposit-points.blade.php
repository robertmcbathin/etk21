@extends('layouts.master')

@section('description')
ООО "Единая транспортная карта" - оператор безналичной оплаты проезда в общественном транспорте города Чебоксары 
@endsection

@section('title')
Единая транспортная карта
@endsection

@section('content')
<div class="container-fluid">
  <div class="col-md-3">
   <!-- <div class="btn-group text-center" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary">Терминал ЕТК</button>
      <button type="button" class="btn btn-secondary">Терминал Сбербанк</button>
      <button type="button" class="btn btn-secondary">Почта</button>
    </div>
    <label class="custom-control custom-radio">
      <input id="radio-refill" name="radio" type="radio" class="custom-control-input">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Я хочу купить карту</span>
    </label>
    <label class="custom-control custom-radio">
      <input id="radio-buy" name="radio" type="radio" class="custom-control-input">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Я хочу пополнить карту</span>
    </label> -->

    <div class="card" >
      <div class="card-block">
        <h4 class="card-title" id="deposit-point-title">Выберите пункт на карте</h4>
        <p class="card-text"></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item" >Адрес: <strong id="deposit-point-address"></strong></li>
        <li class="list-group-item">Время работы</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
      <div class="card-block">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <div id="map"></div>
  </div>
</div>
    <script>
      function initMap() {

        var myLatLng = {lat: 56.1364363, lng: 47.2398848};
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
          zoom: 13
        });

        setMarkers(map);
      }
        // Create a marker and set its position.
        // 
        
        function setMarkers(map){
          var depositPoints = [
            [1,'Центральная касса', 56.1407447, 47.1994527, 'г.Чебоксары, Московский проспект, 41/1'],
            [1,'Диспетчерский павильон', 56.1121833, 47.2623013, 'г.Чебоксары, ул. Привокзальная, 1а'],
            [2, 'Филиал Сбербанка №8613/0001', 56.1122284,47.2580311, 'г.Чебоксары, пр. И. Яковлева, 3а']
          ];
          for (var i = 0; i < depositPoints.length; i++) {
            var depositPoint = depositPoints[i];
            console.log(depositPoint);
            /*GET the variables */
            pointType = depositPoint[0];
            title = depositPoint[1];
            address = depositPoint[4];
            /*
             * Define the marker icon 
             */
            var image = {
              url: '/pictures/icons/' + depositPoint[0] + '.png',
              size: new google.maps.Size(25, 25),
              // The origin for this image is (0, 0).
              origin: new google.maps.Point(0, 0),
              // The anchor for this image is the base of the flagpole at (0, 32).
              anchor: new google.maps.Point(0, 25)
            }
            var shape = {
              coords: [1, 1, 1, 20, 18, 20, 18, 1],
              type: 'poly'
            };
            /*------------------*/
            var marker = new google.maps.Marker({
              position: {lat: depositPoint[2], lng: depositPoint[3]},
              map: map,
              icon: image,
              shape: shape,
              shadow: true,
              title: depositPoint[1],
              address: depositPoint[4]
            });
            var contentString = '<div id="content"' + 
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h4 id="firstHeading" class="firstHeading">' + title + '</h4>'+
                    '<div id="bodyContent">'+
                    '<p>Адрес: <strong>' + address + '</strong></p>'
                    '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
              google.maps.event.addListener(marker,'click', (function(marker,contentString,infowindow){ 
                  return function() {
                    //  infowindow.setContent(contentString);
                    //  infowindow.open(map,marker);
                      window.document.getElementById('deposit-point-title').innerHTML = marker.title;
                      window.document.getElementById('deposit-point-address').innerHTML = marker.address;
                      map.setCenter(marker.getPosition());
                  };
              })(marker,contentString,infowindow)); 
            /*
            marker.addListener('click', function() {
             infowindow.open(map, marker);
             console.log(contentString);
            });*/
          }
        } //End setMarkers

       /* marker.setMap(map);*/
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsfO8qFpSStho6O8-HQwpZEkaOv1ynK5A&callback=initMap"
        async defer></script>
@endsection