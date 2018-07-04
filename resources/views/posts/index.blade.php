@extends('template')

@section('content')
    <link rel="stylesheet" href="/css/post.css">
    <div id="main">
        <div class="container">
            <div class="row">
                @foreach($sub_category->posts as $post)
                    <div class="card-deck mb-3 text-center" >
                        <div class="card mb-3 box-shadow">
                            <div class="card-img-top">
                                <a href="/posts/{{$post['id']}}">
                                    <img class="card-img-top" style="width:232px" src="http://palitra-school.ru/assets/portfolio/web-design.jpg" alt="Изображение анкеты">
                                </a>
                            </div>
                            <div class="card-body" id="user">
                                <img id="user_logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqYQXoI93_KF8Vmw6dWXd_GmYI2Ldw3_npwfayd5Zhb3gBnWSZjw">
                                <span>{{Auth::user()->name}}</span><br>
                                <span id="onSiteSince"> На сайте с </span>
                            </div>
                            <div class="intro text-left">
                                <a href="/posts/{{$post['id']}}">
                                    <p>{{$post['title']}}</p>
                                </a>
                                <span class="gig-rating" style="padding: 8px 0 0 0">Рейтинг</span>
                            </div>
                            <div class="price">
                                <span class="text-right">начиная С {{$post['price']}} uah</span>
                                <a>add</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-center">Все услуги </h1>
        </div>
    </div>

@endsection