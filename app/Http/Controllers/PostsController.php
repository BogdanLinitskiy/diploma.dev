<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index,show');
    }

    public function index()
    {
        $posts = Post::where('user_id',Auth::user()->id)->get();
        if(count($posts)<1){
            return $this->create();
        }
        foreach ($posts as $post){
            if($post['title'] == NULL){
                return $this->create();
            }
        }
        return view('posts.index',compact('post'));
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required|max:60',
            'about' => 'required|min:2|max:300',
            'price' => 'required|min:3|max:6',
            'order_details' => 'required|max:100'
        ]);
        Post::create([
            'title' => request('title'),
            'about' => request('about'),
            'price' => request('price'),
            'order_details' => request('order_details'),
            'sub_category_id' => request('sub_category'),
            'user_id' => Auth::user()->id
        ]);
        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        $posts = Post::where('user_id',Auth::user()->id)->get();
        foreach ($posts as $currPost) {
            if ($currPost == $post) {
                return view('posts.edit', compact('post'));
            }
        }
        return redirect('/posts');
    }

    public function update(Post $post)
    {
        $posts = Post::where('user_id',Auth::user()->id)->get();

        foreach ($posts as $currPost) {
            if ($currPost == $post) {
                $this->validate(request(),[
                    'title' => 'required|max:60',
                    'about' => 'required|min:2|max:300',
                    'price' => 'required|min:3|max:6',
                    'order_details' => 'required|max:100',
                ]);
                $currPost->update(request()->all());
            }
        }
        return redirect('/posts');
    }

    public function delete(Post $post)
    {
        return view('posts.delete',compact('post'));
    }

    public function destroy(Post $post)
    {
        $posts = Post::where('user_id',Auth::user()->id)->get();
        foreach ($posts as $currPost) {
            if ($currPost == $post) {
                $currPost->delete();
            }
        }
        return redirect('/posts');
    }

}
