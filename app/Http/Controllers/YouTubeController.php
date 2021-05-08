<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    public function index()
    {
        return view('pages.youtube.index');
    }

    public function watch1()
    {
        return view('pages.youtube.watch1');
    }

    public function listVideo()
    {
        return view('pages.youtube.list_video');
    }
}
