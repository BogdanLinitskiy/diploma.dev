@extends('template')

@section('subCategory')
    <style>
        .subCategory {
            float: left;
            margin-right: 50px;
            margin-left: 15px;
        }
        .sub{
            height: 250px;
        }
    </style>

    <div class="subCategory" >
        @foreach($business as $sub)
            @if($sub['category_id']==6)
                <a href="/categories/IT/{{$sub['alias']}}"><p>{{$sub['name']}}</p></a>
            @endif
        @endforeach
    </div>
@endsection

@section('content')
    @foreach($business as $sub)
        @if($sub['category_id']==6)
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <a href="/categories/IT/{{$sub['alias']}}"><img src="{{$sub['logo']}}" class=" sub card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="/categories/IT/{{$sub['alias']}}"> {{$sub['name']}}</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            {{--<h1 class="display-4">{{ $post['title'] }}</h1>--}}
            <h1>Бизнес</h1>
        </div>
    </div>

@endsection