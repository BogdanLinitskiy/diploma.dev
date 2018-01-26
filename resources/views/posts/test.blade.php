@extends('template')

@section('content')
    <style>
        #main{
            margin:75px 0 0 0;
            height: 306px;
        }
        img{
            width: 230px;
            height: 140px;
        }
        #user_logo{
            width: 35px;
            height: 35px;
            float:left;
            border-radius: 160px 160px 160px 160px;
        }
        #user{
            padding-top: 3px;
            padding-left:10px;
            height: 41px;
        }
        span{
            padding-left: 10px;
            float:left;
        }
        #onSiteSince{
            margin-top: -8px;
            color:#8c8c8c;
        }
        .intro{
            width:230px;
            height: 81px;
            padding:10px 0 10px 10px;
            font-family: 'Raleway', sans-serif;
            font-size: 15px;
        }
        .rating{
            margin-top: -15px;
        }
        .price{
            border:1px solid lightgray;
            height: 42px;
            padding:8px;
        }
        .price span{
            margin-right: 10px;
            float:right;
        }
        .price a{
            float:left;
        }
    </style>
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