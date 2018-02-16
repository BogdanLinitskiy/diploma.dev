@extends(Auth::guard('admin')->user() ? 'admin_template' : 'template')

@section('content')

    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{$sub_category['logo']}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-text">{{ $sub_category['alias'] }}</h2>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{url()->previous()}}"><button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4"> {{ $sub_category['name'] }} </h1>
        </div>
    </div>

@endsection