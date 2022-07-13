<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = News::latest()->paginate(4);

        return view('news.list', compact('posts'));
    }

    public function show($id)
    {
        $post = News::find($id);

        return view('news.show', compact('post'));
    }
}
