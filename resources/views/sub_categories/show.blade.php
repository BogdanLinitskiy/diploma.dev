@extends(Auth::guard('admin')->user() ? 'admin_template' : 'template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $sub_category['name'] }}</h2>
        {{--@foreach($product->thumbnails as $thumb)--}}
            {{--<img src="/uploads/products/{{$thumb->name}}" alt="product image" class="img-thumbnail" width="400px" height="400px">--}}
        {{--@endforeach--}}
        <p> {{ $sub_category['alias'] }} </p>
        <p> {{ $sub_category['description'] }} </p>
        <img src="{{$sub_category['logo']}}">
        <p><a class="btn btn-primary" href="{{url()->previous()}}" role="button">Back</a></p>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $sub_category['title'] }} </h1>
        </div>
    </div>

@endsection