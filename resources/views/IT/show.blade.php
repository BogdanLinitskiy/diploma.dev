@extends('template')

@section('subCategory')
    <style>
        .subCategory {
            float: left;
            margin-right: 50px;
            margin-left: -50px;
            width: 200px;
            height: 100%;
        }

    </style>

    <div class="subCategory" >
    @foreach($IT as $sub)
            <a href="/IT/{{$sub['alias']}}"><p>{{$sub['name']}}</p></a>
    @endforeach
    </div>
@endsection

@section('content')
    @foreach($IT as $sub)
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">

            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            {{--<h1 class="display-4">{{ $post['title'] }}</h1>--}}
            <h1>TEST JUMBOTRON</h1>
        </div>
    </div>

@endsection