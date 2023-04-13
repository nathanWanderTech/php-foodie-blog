<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }

    public function index (Request $request) {
        $filterValue = $request['filter'];
        $currentUser = Auth::user();
        $categories = Category::all();
        if ($filterValue == 'my-posts') {
            $posts = Post::where('author_id', $currentUser->id)->get();
        }
        else {
            $posts = Post::orderBy('created_at', 'desc')->paginate(7);
        }
        return view('posts.index', compact('posts', 'categories', 'currentUser'));
    }

    public function show($id) {
        $currentUser = Auth::user();
        $categories = Category::all();
        $post = Post::find($id);
        return view('posts.show', compact('post', 'categories', 'currentUser'));
    }

    public function create() {
        $currentUser = Auth::user();
        $categories = Category::all();
        return view('posts.create', compact('categories', 'currentUser'));
    }

    public function store(PostRequest $request) {
        $category = Category::findOrFail($request->category_id);
        $formData = $request->all();
        $post = new Post($formData);
        $post->author_id = $formData['author_id'];
        $post->category()->associate($category)->save();
        // File
        if ($request->hasFile('thumbnail_photo') && $request->file('thumbnail_photo')->isValid()) {
            $path = $request->thumbnail_photo->storePublicly('posts', 'public');
            $post->thumbnail_photo = $path;
            $post->save();
        }
        return redirect('posts');
    }

    public function edit($id) {
        $currentUser = Auth::user();
        $categories = Category::all();
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post', 'currentUser', 'categories'));
    }

    public function update(PostRequest $request, $post) {
        $formData = $request->all();
        $post = Post::findOrFail($post);
        $post->update($formData);
        return redirect('posts');
    }

    public function destroy (Post $post) {
        $post->delete();
        return redirect('posts');
    }
}
