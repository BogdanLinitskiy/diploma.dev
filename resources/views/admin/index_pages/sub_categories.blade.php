@extends('admin_template')
<link rel="stylesheet" href="/css/admin.css">
@section('content')

    <div class="div-create col-md-12">
        <h1>Sub categories</h1>
        {{--<a href="/admin/sub_categories/create">--}}
            {{--<button type="button" class="create btn btn-sm btn-outline-secondary">Create new sub category</button>--}}
        {{--</a>--}}
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Alias</th>
            <th scope="col">Logo src</th>
            <th scope="col">Category_id</th>
            <th scope="col">Created_at</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sub_categories as $sub)
            <tr>
                <th scope="row">{{$sub['id']}}</th>
                <td>{{$sub['name']}}</td>
                <td>{{$sub['alias']}}</td>
                <td>{{$sub['logo']}}</td>
                <td>{{$sub['category_id']}}</td>
                <td>{{$sub['created_at']}}</td>
                <td>
                    <a href="/admin/sub_categories/{{$sub['alias']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Show</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/sub_categories/{{$sub['alias']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/sub_categories/{{$sub['alias']}}/delete">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4" align="center">Sub categories page</h1>
        </div>
    </div>

@endsection