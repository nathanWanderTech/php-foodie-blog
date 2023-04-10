<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(CommentRequest $request) {
        $post = Post::findOrFail($request->post_id);
        $user = User::findOrFail($request->author_id);
        $comment = new Comment($request->all());
        $comment->author_id = $user->id;
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route('posts.show', $request->post_id);
    }
}
