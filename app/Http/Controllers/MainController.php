<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index () {
        $currentUser = Auth::user();
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('welcome', compact('posts', 'categories', 'currentUser'));
    }

    public function login () {
        $categories = Category::all();
        return view('login.index', compact('categories'));
    }

    public function signup () {
        $categories = Category::all();
        return view('signup.signup', compact('categories'));
    }
}
