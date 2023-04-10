<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index () {
        $posts = Post::orderBy('created_at', 'desc')->paginate(7);
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create() {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(PostRequest $request) {
        $category = Category::findOrFail($request->category_id);
        $post = new Post($request->all());
        $post->author_id = 1; // Temporary set author_id = 1
        $post->category()->associate($category)->save();
        // File
        if ($request->hasFile('thumbnail_photo') && $request->file('thumbnail_photo')->isValid()) {
            $path = $request->thumbnail_photo->storePublicly('posts', 'public');
            $post->thumbnail_photo = $path;
            $post->save();
        }
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
