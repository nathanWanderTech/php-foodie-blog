@extends('master')
@section('content')
    <section class="single-post spad">
        <div class="single-post__hero set-bg" data-setbg="{{ str_contains($post->thumbnail_photo, "https") ? asset($post->thumbnail_photo) : asset('storage/' . $post->thumbnail_photo) }}"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="single-post__title">
                        <div class="single-post__title__meta">
                            <h2>{{date('d', strtotime($post->updated_at))}}</h2>
                            <span>{{date('M', strtotime($post->updated_at))}}</span>
                        </div>
                        <div class="single-post__title__text">
                            <ul class="label">
                                <li>{{$post->category->name}}</li>
                            </ul>
                            <h4>{{$post->title}}</h4>
                            <ul class="widget">
                                <li>by {{$post->author->name}}</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-post__social__item">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <div class="single-post__top__text">
                        <p>{{ $post->content }}</p>
                    </div>
                    <div class="single-post__author__profile">
                        <div class="single-post__author__profile__pic">
                            <img src="{{ asset('images/categories/single-post/author-profile.jpg') }}" alt="">
                        </div>
                        <div class="single-post__author__profile__text">
                            <h4>{{$post->author->name}}</h4>
                            <div class="single-post__author__profile__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                @include('partials.post.comments')
                @include('partials.post.commentForm')
                </div>
            </div>
        </div>
    </section>
@endsection
