@extends('layouts.master')

@section('description')
Как пополнить карту ЕТК 
@endsection

@section('title')
Как пополнить карту
@endsection

@section('content')
<div class="container full-height">
  <div class="row">
    <div class="col-md-12">
      <div class="category__header">
        <h2 class="category__title">Как пополнить транспортную карту</h2>
      </div>
      <p class="common-text text-left">
        Вы можете оформить <a href="/cards/4" class="common-link">банковские карты с транспортным приложением</a>, а также приобрести <a href="/cards/1" class="common-link">транспортные карты ЕТК</a> в филиалах ПАО «Сбербанк». Пополнение возможно через устройства самообслуживания, обозначенные оранжевым стикером. В случае необходимости консультанты Сбербанка помогут пополнить транспортное приложение. Ближайшую для себя точку пополнения Вы можете найти в разделе <a href="{{ route('deposit-points') }}" class="common-link">ГДЕ ПОПОЛНИТЬ КАРТУ</a>.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="category__header">
      <h2 class="category__title">Способы пополнения</h2>
    </div>
    <div class="col-md-4">
      <div class="category__header">
        <h4 class="category__title">Терминал Сбербанка</h4>
      </div>
      <p class="common-text">Пополнение возможно через устройства самообслуживания, обозначенные оранжевым стикером</p>
      <a href="{{route('how-to-refill-sberbank')}}" class="common-link">Подробнее...</a>
    </div>
    <div class="col-md-4">
     <div class="category__header">
       <h4 class="category__title">В офисе ООО "ЕТК"</h4>
     </div>
     <p class="common-text">Осуществляется при помощи оператора</p>
     <a href="{{ route('contacts') }}" class="common-link">Адрес и режим работы</a>
   </div>
   <div class="col-md-4">
     <div class="category__header">
      <h4 class="category__title">В отделениях почты России</h4>
    </div>
    <p class="common-text">Осуществляется при помощи оператора</p>
    <a href="{{ route('deposit-points') }}" class="common-link">Смотреть на карте</a>
  </div>
</div>
</div>
</div>
@endsection