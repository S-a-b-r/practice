<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $posts = Post::orderBy('created_at', 'DESC')->get()->take(5);
        $posts = Post::paginate(5);
        return view('main.index',compact('posts'));
    }
}
