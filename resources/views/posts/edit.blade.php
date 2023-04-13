@extends('master')

@section('content')
    <div class="container">
        <div class="col-lg-12 text-lg-center">
            <h2 class="active">Edit post</h2><br>
        </div>
        <div class="col-lg-8 push-lg-4">
            <form role="form" method="POST" action="{{route('posts.update', $post->id)}}">
                @method('PATCH')
                @include('partials.post.editForm', ['buttonName' => 'Save post', 'post' =>$post])
                @include('partials.errors')
            </form>
        </div>
    </div>
@endsection
