@extends('layouts.master')

@section('description')
Задать вопрос
@endsection

@section('title')
Задать вопрос
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="category__header">
				<h2 class="category__title">Задать вопрос</h2>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Ваше имя</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
					<small id="emailHelp" class="form-text text-muted">Мы не передаем личные данные посетителей третьим лицам.</small>
				</div>
				<div class="form-group">
					<label for="exampleTextarea">Ваше сообщение</label>
					<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary purple-button">Отправить</button>
			</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection