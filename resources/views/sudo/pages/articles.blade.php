@section('title')
Новости
@endsection
@extends('sudo.layouts.master')
@section('content')
<div class="main-panel">
    @include('sudo.includes.top-nav')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment</i>
                    </div>                
                    <h4 class="card-title">Новости <button class="btn btn-primary btn-sm">Добавить</button></h4>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-shopping">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-left">Заголовок</th>
                                        <th class="text-description">Описание</th>
                                        <th class="text-center">Кем создано</th>
                                        <th class="text-right">Опубликовано</th>
                                        <th class="text-center">Дата создания</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                    <tr>
                                        <td>
                                            <div class="img-container">
                                                <img src="http://etk21.ru{{$article->image}}">
                                            </div>
                                        </td>
                                        <td class="td-name">
                                            <a href="">{{$article->title}}</a>
                                        </td>
                                        <td>
                                            <small>{{$article->description}}</small>
                                        </td>
                                        <td>
                                            {{$article->user}}
                                        </td>
                                        <td>
                                            {{$article->published}}
                                        </td>
                                        <td>
                                            {{$article->created_at}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-content" style="float:right;">
                        <ul class="pagination pagination-primary">
                                        <!--
                    color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
                -->
                <li>
                    <a href="javascript:void(0);">1</a>
                </li>
                <li>
                    <a href="javascript:void(0);">...</a>
                </li>
                <li>
                    <a href="javascript:void(0);">5</a>
                </li>
                <li>
                    <a href="javascript:void(0);">6</a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);">7</a>
                </li>
                <li>
                    <a href="javascript:void(0);">8</a>
                </li>
                <li>
                    <a href="javascript:void(0);">9</a>
                </li>
                <li>
                    <a href="javascript:void(0);">...</a>
                </li>
                <li>
                    <a href="javascript:void(0);">12</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="{{route('sudo.pages.dashboard')}}">
                        Панель управления
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            ООО "Единая транспортная карта"
        </p>
    </div>
</footer>
</div>
@endsection