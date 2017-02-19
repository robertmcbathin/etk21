@extends('layouts.master')

@section('description')
Как пополнить транспортную карту через терминал Сбербанка 
@endsection

@section('title')
Как пополнить банковскую карту
@endsection

@section('content')


<!--   Big container   -->
<div class="container">
  <div class="row">
  <div class="col-sm-12">

      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card wizard-card" data-color="green" id="wizard">
          <form action="" method="">
            <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->

            <div class="wizard-header">
              <h3 class="wizard-title">Терминал Сбербанка</h3>
              <p class="category">Как пополнить карту ЕТК через терминал Сбербанка</p>
            </div>
            <div class="wizard-navigation">
              <div class="progress-with-circle">
                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
              </div>
              <ul class="sber-nav">
                <li>
                  <a href="#choice" data-toggle="tab">
                    <div class="icon-circle">
                      <i class="ti-desktop"></i>
                    </div>
                    Выбор пункта меню
                  </a>
                </li>
                <li>
                  <a href="#card" data-toggle="tab">
                    <div class="icon-circle">
                      <i class="ti-credit-card"></i>
                    </div>
                    Приложите карту
                  </a>
                </li>
                <li>
                  <a href="#enter" data-toggle="tab">
                    <div class="icon-circle">
                      <i class="ti-hand-point-up"></i>
                    </div>
                    Ввод суммы пополнения
                  </a>
                </li>
                <li>
                  <a href="#cashback" data-toggle="tab">
                    <div class="icon-circle">
                      <i class="ti-money"></i>
                    </div>
                    Сдача
                  </a>
                </li>
                <li>
                  <a href="#entry" data-toggle="tab">
                    <div class="icon-circle">
                      <i class="ti-wallet"></i>
                    </div>
                    Внесение наличных
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane" id="choice">
                <div class="row">
                  <div class="col-sm-12">
                    <h5 class="info-text">На экране терминала выполните следующие действия</h5>
                  </div>
                  <div class="col-sm-12 text-center">
                    <ul class="line">
                      <li>Платежи наличными <i class="ti-angle-right"></i> </li>
                      <li>Другие категории <i class="ti-angle-right"></i> </li>
                      <li>Транспортная карта <i class="ti-angle-right"></i> </li>
                      <li>Транспортная карта <i class="ti-angle-right"></i></li>
                      <li>Согласитесь с условиями приема платежей </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="card">
                <h5 class="info-text">Далее необходимо приложить карту к устройству </h5>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    <ul class="line">
                      <li>Приложите карту к считывающему устройству <i class="ti-angle-right"></i> </li>
                      <li>Продолжить <i class="ti-angle-right"></i> </li>
                      <li>Продолжить</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="enter">
                <h5 class="info-text">Теперь можно ввести сумму для пополнения </h5>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    <ul class="line">
                      <li>Введите сумму пополнения <i class="ti-angle-right"></i> </li>
                      <li>Продолжить <i class="ti-angle-right"></i> </li>
                      <li>Продолжить</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="cashback">
              <h5 class="info-text"> Далее Вам необходимо выбрать пункт для получения сдачи </h5>
                <div class="row">
                   <div class="col-sm-12 text-center">
                    <ul class="line">
                      <li>Выберите способ получения сдачи <i class="ti-angle-right"></i> </li>
                      <li>Введите свой номер телефона <i class="ti-angle-right"></i> </li>
                      <li>Продолжить <i class="ti-angle-right"></i> </li>
                      <li>Продолжить <i class="ti-angle-right"></i> </li>
                      <li>Оплатить</li>
                    </ul>
                  </div>                                 
                </div>
              </div>
              <div class="tab-pane" id="entry">
              <h5 class="info-text"> Теперь Вы можете внести необходимую сумму по одной купюре </h5>
                <div class="row">
                   <div class="col-sm-12 text-center">
                    <ul class="line">
                      <li>Внесите наличные <i class="ti-angle-right"></i> </li>
                      <li>Дождитесь подтверждения о внесение данных на карту <i class="ti-angle-right"></i> </li>
                      <li>Заберите карту <i class="ti-angle-right"></i> </li>
                      <li>Возьмите чек</li>
                    </ul>
                  </div>                                 
                </div>
              </div>
            </div>
            <div class="wizard-footer">
              <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Вперед' />
                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Готово' />
              </div>

              <div class="pull-left">
                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Назад' />
              </div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div> <!-- wizard container -->
    </div>
  </div> <!-- row -->
</div> <!--  big container -->


</div>
@endsection