@extends(Auth::guard('admin')->user() ? 'admin_template' : 'template')

@section('subCategory')
    <style>
        .subCategory {
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
        <aside class="float-md-left">
            @foreach($category->sub_categories as $sub)
                <a href="/categories/{{$category['alias']}}/{{$sub['alias']}}"><p>{{$sub['name']}}</p></a>
            @endforeach
        </aside>

    </div>
@endsection

@section('content')
    @foreach($category->sub_categories as $sub)
        <div class="col-md-6">
            <div class="card mb-4 box-shadow">
                <a href="/categories/{{$category['alias']}}/{{$sub['alias']}}"><img src="{{$sub['logo']}}" class=" sub card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                    <div class="card-body">
                        <p> {{$sub['name']}}</p>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
@endsection

@section('jumbotron')

    <div class="jumbotron" align="center">
        <div class="container">
            <h1>{{$category['name']}}</h1>
        </div>
    </div>

@endsection