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
      <a class="category__link link--black" href="/category/laravel-5.4">Смотреть все новости</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card card-inverse">
          <img class="card-img" src="http://placehold.it/470x365" alt="Card image">
          <div class="card-img-overlay">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional             content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="http://placehold.it/235x180" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="http://placehold.it/235x180" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End of article group -->
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
  </div> <!-- End of card block -->
  <div class="container">
    <div class="row">
      <div class="category__header">
        <h2 class="category__title">Как нас найти</h2>
        <a class="category__link link--black" href="/category/laravel-5.4">Подробнее</a>
      </div>
    </div>
    <img src="/pictures/map.png" alt="">
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
</div>
@endsection