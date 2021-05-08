<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.pages.home.index');
    }

    public function category()
    {
        return view('blog.pages.category.index');
    }

    public function postDetail()
    {
        return view('blog.pages.post_detail.index');
    }

    public function tag()
    {
        return view('blog.pages.post_tag.index');
    }

    public function searchTag()
    {
        return view('blog.pages.');
    }
}
