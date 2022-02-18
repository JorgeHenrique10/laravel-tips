<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function showForm()
    {
        return view('form');
    }
    public function debug(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slung = Str::slug($request->title);
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();
        var_dump($request->all());
    }
}
