@extends('layouts.master')

@section('description')
Об обществе с ограниченной ответственностью "ЕТК"
@endsection

@section('title')
Единая транспортная карта
@endsection

@section('content')
<div class="container about-page-container">
  <div class="row">
    <div class="col-md-4">
      <img src="/pictures/logo.png" alt="ЕТК" class="rounded mx-auto d-block d-flex align-self-center mr-3">
    </div>
    <div class="col-md-8 text-left">
      <p class="common-text">ООО "ЕТК" занимается производством, продажей и обслуживанием электронных карт для оплаты проезда на общественном транспорте в Чувашской республике, а также обслуживанием и сопровождением транспортного приложения «Универсальной Электронной Карты Гражданина РФ».</p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
    <p class="common-text">На нашем сайте вы найдете информацию о видах электронных карт и о тарифах. На сайте представлены адреса пунктов пополнения электронного кошелька. В соответствующем разделе вы можете ознакомиться с нормативными документами, регламентирующими использование единой транспортной карты. Кроме того, в разделе контактной информации вы можете задать вопрос, касающийся работы ЕТК, на который мы постараемся ответить.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-right"><p class="common-text">В целях обеспечения безопасности мы используем бесконтактные смарт-карты <strong>MIFARE</strong>, зарекомендовавшие себя как надежное решение для электронных проездных билетов.</p></div>
    <div class="col-md-6"><img src="/pictures/mifare.png" alt="ЕТК" class="rounded mx-auto d-block d-flex align-self-center mr-3"></div>
  </div>
</div>
@endsection