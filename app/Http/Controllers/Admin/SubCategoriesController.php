<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
        $sub_categories = Sub_category::all();
        return view('admin.index_pages.sub_categories',compact('sub_categories'));
    }

    public function show(Sub_category $sub_category)
    {
        return view('sub_categories.show',compact('sub_category'));
    }

    public function create()
    {
        return view('sub_categories.create');
    }

    public function store(Category $category)
    {
        $this->validate(request(),[
            'name' => 'required|unique:sub_categories,name',
            'alias' => 'required|unique:sub_categories,alias',
        ]);

        Sub_category::create([
            'name' => request('name'),
            'alias' => request('alias'),
            'logo' => request('logo'),
            'category_id' => $category->id,
        ]);

        return redirect('/admin');
    }

    public function edit(Sub_category $sub_category,Category $category)
    {
        return view('sub_categories.edit',compact('sub_category','category'));
    }

    public function update(Sub_category $sub_category,Category $category)
    {
        $this->validate(request(),[
            'name' => 'required|unique:sub_categories,name,' . $sub_category->id,
            'alias' => 'required|unique:sub_categories,alias,' . $sub_category->id
        ]);

        $sub_category->update([
            'name' => request('name'),
            'alias' => request('alias'),
            'logo' => request('logo'),
            'category_id' => $sub_category->category_id ,
        ]);
        return redirect('/admin');
    }

    public function delete(Sub_category $sub_category)
    {
        return view('sub_categories.delete',compact($sub_category));
    }

    public function destroy(Sub_category $sub_category)
    {
        $sub_category->delete();
        return redirect('/admin');
    }

}
