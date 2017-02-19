@extends('layouts.master-no-padding')

@section('description')
Пункты продажи ЕТК. Интерактивная карта 
@endsection

@section('title')
Пункты продаж ЕТК
@endsection

@section('content')
<div class="container-fluid no-padding">
  <div class="col-md-4 no-padding">
  <!-- <button type="button" class="btn btn-primary btn-lg btn-block purple-button" onclick="initMap(1)" disabled=""><img src="/pictures/icons/pin-in-the-map.svg" alt="" height="32px"> Найти ближайшие</button> -->
    <div class="card" >
      <div class="card-block">
        <h4 class="card-title" id="sell-point-title">Выберите пункт на карте</h4>
        <p class="card-text"></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item" >Адрес: <strong id="sell-point-address"></strong></li>
        <li class="list-group-item">Время работы: <strong id="sell-point-workhours"></strong></li>
      </ul>
    </div>
  </div>
  <div class="col-md-8 no-padding">
    <div id="map"></div>
  </div>
</div>
    <script>
      function initMap(withLocation) {

        var myLatLng = {lat: 56.107867, lng: 47.2663445};
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
        var geoinfoWindow = new google.maps.InfoWindow({map: map});
        mapBlock = document.getElementById('map');
        var map = new google.maps.Map(mapBlock, {
          center: myLatLng,
          scrollwheel: true,
          styles: styleArray,
          zoom: 12
        });
        // Try to enable geolocation
        if (withLocation == 1){
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };
        
              geoinfoWindow.setPosition(pos);
              geoinfoWindow.setContent('Вы находитесь здесь');
              map.setCenter(pos);
            }, function() {
              handleLocationError(true, geoinfoWindow, map.getCenter());
            });
        }
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, geoinfoWindow, map.getCenter());
        }

        setMarkers(map);
      }
        // Create a marker and set its position.
        // 
        function handleLocationError(browserHasGeolocation, geoinfoWindow, pos) {
          geoinfoWindow.setPosition(pos);
          geoinfoWindow.setContent(browserHasGeolocation ?
                                'Произошла ошибка: геолокация недоступна.' :
                                'Произошла ошибка: Ваш браузер не поддерживает геолокацию.');
        }
        function setMarkers(map){
          var sellPoints = [
            [1,'Центральная касса', 56.1407447, 47.1994527, 'г.Чебоксары, Московский проспект, 41/1', 'Пн-Пт: с 8 до 17'],
            [1,'Диспетчерский павильон', 56.1121833, 47.2623013, 'г.Чебоксары, ул. Привокзальная, 1а'],
            [3, 'Главпочтамт', 56.1311188,47.2451268, 'г.Чебоксары, пр. Ленина, 2', 'не указано'],
            [3, 'Отделение почтовой службы №22', 56.1310005,47.2828466, 'г.Чебоксары, ул. Космонавта Николаева, 57', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №23', 56.1192491,47.1867621, 'г.Чебоксары, ул. Энтузиастов, 23', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №27', 56.097769, 47.282568, 'г.Чебоксары, проспект 9-й Пятилетки, 19/37', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №28', 56.105118, 47.316313, 'г.Чебоксары, проспект Тракторостроителей, 63/2', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №32', 56.144240, 47.248615, 'г.Чебоксары, улица Ленинградская, 16', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №34', 56.138373, 47.167928, 'г.Чебоксары, улица Мичмана Павлова, 58А', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №37', 56.108906, 47.306779, 'г.Чебоксары, улица Ленинского Комсомола, 68/2', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [3, 'Отделение почтовой службы №38', 56.116199, 47.178237, 'г.Чебоксары, улица Чернышевского, 8', 'Пн-Пт: с 8 до 20, Сб: с 9 до 18'],
            [2, 'Филиал Сбербанка №8613/0001', 56.1122284,47.2580311, 'г.Чебоксары, пр. И. Яковлева, 3а', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0002', 56.126737, 47.277230, 'г.Чебоксары, улица 50 лет Октября, 17', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0004', 56.143072, 47.250576, 'г.Чебоксары, улица Карла Маркса, 22', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0009', 56.112810, 47.220510, 'г.Чебоксары, улица Б. Хмельницкого, 109', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0010', 56.124213, 47.252096, 'г.Чебоксары, пр. Ленина, 28', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0011', 56.119586, 47.187119, 'г.Чебоксары, улица Энтузиастов, 23', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0013', 56.145963, 47.185244, 'г.Чебоксары, улица Гузовского, 17', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0014', 56.144226, 47.177542, 'г.Чебоксары, улица Ахазова, 8', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0017', 56.098597, 47.285199, 'г.Чебоксары, проспект Тракторостроителей, 1/34', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0020', 56.104278, 47.263433, 'г.Чебоксары, проспект Ивана Яковлева, 2а', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0021', 56.069488, 47.282231, 'г.Чебоксары, улица Болгарстроя, 9/11', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0022', 56.101343, 47.301192, 'г.Чебоксары, проспект Тракторостроителей, 35а', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0023', 56.143646, 47.204706, 'г.Чебоксары, Московский проспект, 40', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0024', 56.118189, 47.256539, 'г.Чебоксары, улица Космонавта Николаева, 3', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0025', 56.128616, 47.268191, 'г.Чебоксары, улица Гагарина, 27', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0026', 56.144915, 47.215535, 'г.Чебоксары, улица улица Спиридона Михайлова, 1', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0027', 56.149266, 47.177117, 'г.Чебоксары, проспект Максима Горького, 32/25', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0028', 56.124033, 47.205348, 'г.Чебоксары, улица Гражданская, 83', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0029', 56.117160, 47.181170, 'г.Чебоксары, улица Матэ Залка, 11', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0030', 56.096445, 47.278718, 'г.Чебоксары, проспект 9-й Пятилетки, 18/2', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0032', 56.149229, 47.197682, 'г.Чебоксары, проспект Максима Горького, 10', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0034', 56.133704, 47.245169, 'г.Чебоксары, улица Карла Маркса, 52', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0052', 56.146039, 47.232626, 'г.Чебоксары, Московский проспект, 5', 'не указано'],
            [2, 'Филиал Сбербанка №8613/0053', 56.105230, 47.279417, 'г.Чебоксары, Эгерский бульвар, 21', 'не указано'],
          ];
          for (var i = 0; i < sellPoints.length; i++) {
            var sellPoint = sellPoints[i];
            /*GET the variables */
            pointType = sellPoint[0];
            title = sellPoint[1];
            address = sellPoint[4];
            /*
             * Define the marker icon 
             */
            var image = {
              url: '/pictures/icons/' + sellPoint[0] + '.png',
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
              position: {lat: sellPoint[2], lng: sellPoint[3]},
              map: map,
              icon: image,
              shape: shape,
              shadow: true,
              title: sellPoint[1],
              address: sellPoint[4],
              workhours: sellPoint[5]
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
                      window.document.getElementById('sell-point-title').innerHTML = marker.title;
                      window.document.getElementById('sell-point-address').innerHTML = marker.address;
                      window.document.getElementById('sell-point-workhours').innerHTML = marker.workhours;
                      map.setCenter(marker.getPosition());
                      map.setZoom(16);
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