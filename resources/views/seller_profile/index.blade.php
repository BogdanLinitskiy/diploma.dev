@extends('template')
<style>
    dl{
        margin-left: 50px !important;
    }
</style>
@section('content')
    <dl class="row">
        <dt class="col-sm-3">Доступность </dt>
        @if($seller->work == 'full_time')
            <dd class="col-sm-9">Полный рабочий день</dd>
        @else
            <dd class="col-sm-9">Неполный рабочий день</dd>
        @endif

        <dt class="col-sm-3">Языки</dt>
        <dd class="col-sm-9">{{$seller->languages}}</dd>

        <dt class="col-sm-3">Умения</dt>
        @if($seller->skills == NULL)
            <dd class="col-sm-9">Не указаны</dd>
        @else
            <dd class="col-sm-9">{{$seller->skills}}</dd>
        @endif

        <dt class="col-sm-3">Образование</dt>
        @if($seller->education == NULL)
            <dd class="col-sm-9">Не указано</dd>
        @else
            <dd class="col-sm-9">{{$seller->education}}</dd>
        @endif

        <dt class="col-sm-3">Описание</dt>
        @if($seller->description == NULL)
            <dd class="col-sm-9">Не указано</dd>
        @else
            <dd class="col-sm-9">{{$seller->description}}</dd>
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
            <h1 class="display-4 text-center"> Ваша анкета </h1>
        </div>
    </div>
@endsection