<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Items;
use App\Post;
use App\Society;
use Cart;


class PostController extends Controller
{
    public function getIndexPost()
    {
        $post_one = Post::orderBy('id','desc')->first();
        $post = Post::orderBy('id', 'desc')->limit(10)->get();
        $post_banner = Post::orderBy('id', 'desc')->limit(2)->get();
        $post_right = Post::orderby('id', 'desc')->limit(6)->get();
        $data = [
            'post_one' => $post_one,
            'post_right' => $post_right,
            'post_banner'=> $post_banner,
            'post' => $post
        ];
        return view('thame-view.post.layout.index-post', $data);
    }
    public function getPost($id)
    {
        $society = Society::all();
        $view_post = Post::where('id', $id)->first();
        $new_post = Post::orderBy('id', 'desc')->limit(5)->get();
        $categories = Items::all();
        // dd($view_post);
        $data = [
            'new_post' => $new_post,
            'society' => $society,
            'view_post' => $view_post,
            'categories' => $categories
        ];
        return view('thame-view.post.post', $data);
    }
}