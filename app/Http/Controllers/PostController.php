<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {
        return view('posts.index');
    }

    public function show() {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request) {
        return redirect('posts');
    }

    public function edit() {
        return view('posts.edit');
    }

    public function update() {
        return redirect('posts');
    }

    public function destroy () {
        return redirect('posts');
    }
}
