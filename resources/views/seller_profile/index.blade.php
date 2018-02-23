@extends('template')

@section('content')
    <link rel="stylesheet" href="/css/questionnaire_index.css">
    <dl class="row">
        <dt class="col-sm-2"><h4>Доступность</h4></dt>
        @if($seller->work == 'full_time')
            <dd class="col-sm-9">Полный рабочий день</dd>
        @else
            <dd class="col-sm-9">Неполный рабочий день</dd>
        @endif

        <dt class="col-sm-2"><h4>Языки</h4></dt>
        <dd class="col-sm-9">{{$seller->languages}}</dd>

        <dt class="col-sm-2"><h4>Умения</h4></dt>
        @if($seller->skills == NULL)
            <dd class="col-sm-9">Не указаны</dd>
        @else
            <dd class="col-sm-9">{{$seller->skills}}</dd>
        @endif

        <dt class="col-sm-2"><h4>Образование</h4></dt>
        @if($seller->education == NULL)
            <dd class="col-sm-9">Не указано</dd>
        @else
            <dd class="col-sm-9">{{$seller->education}}</dd>
        @endif

        <dt class="col-sm-2"><h4>Описание</h4></dt>
        @if($seller->description == NULL)
            <dd class="col-sm-8 desc">Не указано</dd>
        @else
            <dd class="col-sm-8 desc">{{$seller->description}}</dd>
        @endif
    </dl>
    <div class="col-md-12 text-center">
        <a href="/seller_profile/{{$seller->id}}/edit"><button class="btn btn-primary">Изменить анкету</button></a>
        <a href="/seller_profile/{{$seller->id}}/delete"><button class="btn btn-danger">Удалить анкету</button></a>
    </div>
@endsection



@section('jumbotron')
    <div class="jumbotron">
        <div class="container col-md-12">
            <h1 class="display-4 text-center"> Ваш профиль </h1>
        </div>
    </div>
@endsection