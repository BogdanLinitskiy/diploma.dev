@extends('template')

@section('content')
<link rel="stylesheet" href="/css/post.css">
    <div id="main" >
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="">
                        <img src="http://s3-us-west-2.amazonaws.com/nichegamer/wp-content/uploads/2017/12/08112436/berserk-12-08-17-1.jpg">
                    </div>
                    <div class="card-body" id="user">
                        <img id="user_logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqYQXoI93_KF8Vmw6dWXd_GmYI2Ldw3_npwfayd5Zhb3gBnWSZjw">
                        <span> User_name</span><br>
                        <span id="onSiteSince"> На сайте с </span>
                    </div>
                    <div class="intro text-left">
                        <p>Тут будет немного вступительного текста</p>
                        <p class="rating">рейтинг</p>
                    </div>
                    <div class="price">
                        <span class="text-right">начиная С 100 uah</span>
                        <a>add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection