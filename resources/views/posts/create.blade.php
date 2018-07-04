@extends('template')

@section('content')
    <form action="/posts" method="post" class="col-md-12" enctype="multipart/form-data">

        {{csrf_field()}}

        @include('embed.errors')
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="title">Заголовок: </label>
                <input type ="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group col-md-8">
                <label for="title">Изображение задания: </label>
                <input type ="file" class="form-control" id="title" name="title">
            </div>

            <div class="form-group col-md-8">
                <label for="about">О задании: </label>
                <textarea class="form-control" id="about" name="about" style="resize: none"></textarea>
            </div>

            <div class="form-group col-md-8">
                <label for="price">Цена: </label>
                <input type ="text" class="form-control" id="price" name="price">
            </div>

            <div class="form-group col-md-8">
                <label for="order_details">Детали: </label>
                <input type ="text" class="form-control" id="order_details" name="order_details">
            </div>

            <div class="form-row col-md-12">
                <div class="form-group col-md-3">
                    <label for="category">Категория</label>
                    <select id="category" name="category" class="form-control">
                        <option value="1">IT</option>
                        <option value="2">Маркетинг</option>
                        <option value="3">Видео и Анимация</option>
                        <option value="4">Дизайн</option>
                        <option value="5">Фан и Лайфстайл</option>
                        <option value="6">Бизнес</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="sub_category">Подкатегория</label>
                    <select id="sub_category" name="sub_category" class="form-control">
                        <option value="1">Web-программирование</option>
                        <option value="2">Мобильные приложения</option>
                        <option value="3">Чат Боты</option>
                        <option value="4">Базы Данных</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-12">
                <button class="btn btn-success">Сохранить</button>
            </div>
            <div class="col-md-12 form-group">
                <p><a class="btn btn-primary" href="/" role="button">На главную страницу</a></p>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="/js/post_creation.js"></script>
@endsection



@section('jumbotron')
    <div class="jumbotron">
        <div class="container col-md-12">
            <h1 class="display-4 text-center"> Создание задания </h1>
        </div>
    </div>
@endsection

