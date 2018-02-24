@extends('template')

@section('content')
        <div class="container">
            <dl class="row">

                <dt class="col-sm-2"><h4>О посте</h4></dt>
                <dd class="col-sm-9">{{$post['about']}}</dd>

                <dt class="col-sm-2"><h4>Цена</h4></dt>
                <dd class="col-sm-9">{{$post['price']}}</dd>

                <dt class="col-sm-2"><h4>Детали</h4></dt>
                <dd class="col-sm-9">{{$post['order_details']}}</dd>

            </dl>
            <div class="col-md-12 text-center">
                @if(Auth::user()->id == $post['user_id'])
                <a href="/posts/{{$post['id']}}/edit"><button class="btn btn-primary">Изменить анкету</button></a>
                <a href="/posts/{{$post['id']}}/delete"><button class="btn btn-danger">Удалить анкету</button></a>
                @endif
            </div>
        </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4 text-center">{{$post['title']}}</h1>
        </div>
    </div>
@endsection