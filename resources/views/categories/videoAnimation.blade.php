@extends('template')

@section('subCategory')
    <style>
        .subCategory {
            float: left;
            width:250px;
            margin-right: 20px;
            margin-left: 15px;
        }
        .sub{
            height: 250px;
        }
        .card-body{
            padding:5px 0 0 10px;
        }
    </style>

    <div class="subCategory" >
        @foreach($videoAnimation as $sub)
            @if($sub['category_id']==3)
                <a href="/categories/video-and-animation/{{$sub['alias']}}"><p>{{$sub['name']}}</p></a>
            @endif
        @endforeach
    </div>
@endsection

@section('content')
    @foreach($videoAnimation as $sub)
        @if($sub['category_id']==3)
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <a href="/categories/video-and-animation/{{$sub['alias']}}"><img src="{{$sub['logo']}}" class=" sub card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <p> {{$sub['name']}}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            {{--<h1 class="display-4">{{ $post['title'] }}</h1>--}}
            <h1>Виео и Анимация</h1>
        </div>
    </div>

@endsection