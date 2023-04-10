@extends('master')
@section('content')
    <!-- Categories Section Begin -->
    <section class="categories categories-grid spad">
        <div class="categories__post">
            <div class="container">
                <div class="categories__grid__post">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="breadcrumb__text">
                                <h2><span>Posts</span></h2>
                                <div class="breadcrumb__option">
                                    <a href="{{ url('') }}">Home</a>
                                    <span>Posts</span>
                                </div>
                            </div>
                                @foreach($posts as $post)
                                <div class="categories__list__post__item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="categories__post__item__pic set-bg"
                                                 data-setbg="{{asset($post->thumbnail_photo)}}">
                                                <div class="post__meta">
                                                    <h4>{{date('d', strtotime($post->updated_at))}}</h4>
                                                    <span>{{date('M', strtotime($post->updated_at))}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="categories__post__item__text">
                                                <span class="post__label">Dinner</span>
                                                <h3><a href="#">{{$post->title}}</a>
                                                </h3>
                                                <ul class="post__widget">
                                                    <li>by <span>Admin</span></li>
                                                    <li>3 min read</li>
                                                    <li>20 Comment</li>
                                                </ul>
                                                <p>{{substr($post->content, 0, 100)}}...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="categories__pagination">
                                        @if($posts->currentPage() > 1)
                                            <a href="{{ $posts->url($posts->currentPage() - 1) }}">Back</a>
                                        @endif
                                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                            <a href="{{ $posts->url($i) }}">{{ $i }}</a>
                                        @endfor
                                        @if($posts->currentPage() < $posts->lastPage())
                                            <a href="{{ $posts->url($posts->currentPage() + 1) }}">Next</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="sidebar__item">
                                <div class="sidebar__item__banner">
                                    <img src="img/sidebar/banner.jpg" alt="">
                                </div>
                                <div class="sidebar__item__categories">
                                    <div class="sidebar__item__title">
                                        <h6>Categories</h6>
                                    </div>
                                    <ul>
                                        {{--                                        <li><a href="#">Recipes <span>128</span></a></li>--}}
                                        @foreach($categories as $category)
                                            <li><a href="{{ url("categories/$category->id") }}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
@endsection
