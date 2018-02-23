@extends('template')

@section('content')

    <div class="col-md-12">
        <form action="/posts/{{$post['id']}}" method="post" class="form-horizontal">
            @include('embed.errors')

            {{csrf_field()}}

            <input type="hidden" name="_method" value="DELETE">

            <div class="form-group">
                <h3> Вы уверены, что хотите удалить свою анкету ?</h3>
            </div>

            <div class="form-group">
                <button class="btn btn-danger">Удалить</button>
                <p><a class="btn btn-primary" href="/posts" role="button">Назад</a></p>
            </div>

        </form>
    </div>

@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Удаление анкеты </h1>
        </div>
    </div>

@endsection