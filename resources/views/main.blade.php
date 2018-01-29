@extends('template')


@section('content')
    @foreach($categories as $category)
        <div class="col-md-4">
            <a href="/categories/{{$category['alias']}}">
                <img width="150px" height="150px" src="{{$category['logo']}}">
                <p>{{$category['name']}}</p>
            </a>
        </div>
    @endforeach
@endsection

@section('jumbotron')

    {{--<div class="jumbotron">--}}
        {{--<div class="container">--}}
            {{--<h1 class="display-4"></h1>--}}
            {{--<p> гайд как использовать сайт </p>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection

@section('advice')
    <style>
        #advice{
            background: #262626;
            margin:50px 0 50px 0;
            padding:65px 0 65px 0;
            color:white;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        #advice li{
            color:white;
            text-align: center;
        }
    </style>
    <div id="advice" class="row">
        <div class="col-sm-4">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-inline"><h3>Ваши условия</h3></li>
                    <li class="list-inline">Независимо от того, что вам нужно, чтобы упростить список дел, независимо от вашего бюджета.</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-inline"><h3>Ваше время</h3></li>
                    <li class="list-inline">Найти услуги, основанные на ваших целях и сроках, так просто.</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-inline"><h3>Ваша безопасность</h3></li>
                    <li class="list-inline">Ваш платеж всегда безопасен, Сайт построен для защиты вашего спокойствия.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@section('carousel')
    <style>
        .carousel {
            margin-bottom: 4rem;
        }
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }
        .carousel-item {
            height: 32rem;
            background-color: #34495e;
        }
        .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }
    </style>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                {{--<img class="first-slide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrUU3zoQaiyOZ2bwG-Rx-Cz-HEnvDXz0ShITNn_rcHcpMCcwg_Jw" alt="First slide">--}}
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Быстрая регистрация</h1>
                        <p>Вам необходимо всего 2 минуты для регистрации</p>
                        <p><a class="btn btn-lg btn-primary" href="/register" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{--<img class="second-slide" src="https://pm1.narvii.com/6180/d1be167e8a81faab245de2d88cc338908a67654b_hq.jpg" alt="Second slide">--}}
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Создайте свою анкету</h1>
                        <p>Создать и заполнить анкету не составит труда</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {{--<img class="third-slide" src="http://anime-zone.ru/inc/manga/berserk/25/01/berserk-v25c207p030-31rus.jpg" alt="Third slide">--}}
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Заказ услуги</h1>
                        <p>Хотите заказать услугу? Воспользуйтесь одной из категорий</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection