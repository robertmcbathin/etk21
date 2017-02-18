@extends('layouts.master')

@section('description')
Как пополнить транспортную карту через терминал Сбербанка 
@endsection

@section('title')
Как пополнить банковскую карту
@endsection

@section('content')
<div class="container">
  <div class="row">
      <div class="category__header">
        <h2 class="category__title">Как пополнить транспортную карту через терминал Сбербанка</h2>
      </div>
    <div class="col-md-4">
      <div class="category__header">
        <h4 class="category__title">1</h4>
      </div>
      <p class="common-text">Выбрать в меню банкомата пункт <strong>«Региональные услуги»</strong></p>
    </div>
    <div class="col-md-4">
     <div class="category__header">
       <h4 class="category__title">2</h4>
     </div>
     <p class="common-text">Нажать кнопку <strong>«Транспортная карта»</strong></p>
   </div>
   <div class="col-md-4">
     <div class="category__header">
      <h4 class="category__title">3</h4>
    </div>
    <p class="common-text">В зависимости от вида используемой Вами карты выбрать пункт меню:</p>
      <ul class="common-text">
        <li>«Транспортная карта»</li>
        <li>«Банковская карта с транспортным приложением</li>
      </ul>
  </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="category__header">
        <h4 class="category__title">4</h4>
      </div>
      <p class="common-text">Указать сумму пополнения</p>
    </div>
    <div class="col-md-4">
     <div class="category__header">
       <h4 class="category__title">5</h4>
     </div>
     <p class="common-text">В случае использования транспортной карты, внести деньги в купюроприемник банкомата или списать денежные средства с другой банковской карты</p>
   </div>
   <div class="col-md-4">
     <div class="category__header">
      <h4 class="category__title">6</h4>
    </div>
    <p class="common-text">В случае использования банковской карты с транспортным приложением указанная Вами сумма спишется с банковского счета Вашей карты</p>
  </div>
</div>
</div>
</div>
@endsection