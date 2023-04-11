<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index () {
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('welcome', compact('posts', 'categories'));
    }

    public function login () {
        $categories = Category::all();
        return view('login.index', compact('categories'));
    }
}
