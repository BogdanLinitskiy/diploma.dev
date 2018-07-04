@extends('admin_template')
<link rel="stylesheet" href="/css/admin.css">
@section('content')

    <div class="div-create col-md-12">
        <h1>Категории</h1>
        <a href="/admin/categories/create">
            <button type="button" class="create btn btn-sm btn-outline-secondary">Создать новую категорию</button>
        </a>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Alias</th>
            <th scope="col">Logo src</th>
            <th scope="col">Created_at</th>
            <th scope="col">Показать</th>
            <th scope="col">Изменить</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category['id']}}</th>
                <td>{{$category['name']}}</td>
                <td>{{$category['alias']}}</td>
                <td>{{$category['logo']}}</td>
                <td>{{$category['created_at']}}</td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Показать</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}/edit">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Изменить</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category['alias']}}/delete">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
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
            <h1 class="display-4" align="center">Страница с категориями</h1>
        </div>
    </div>

@endsection