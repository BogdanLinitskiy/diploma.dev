<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.index_pages.categories',compact('categories'));
    }

    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|unique:categories,name',
            'alias' => 'required|unique:categories,alias'
            ]);
        Category::create(request()->all());
        return redirect('/admin');
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Category $category)
    {
        $this->validate(request(),[
            'name' => 'required|unique:categories,name,' . $category->id,
            'alias' => 'required|unique:categories,alias,' . $category->id
        ]);
        $category->update(request(['name','alias','logo']));
        return redirect('/admin');
    }

    public function delete(Category $category)
    {
        return view('categories.delete',compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/admin');
    }

}
