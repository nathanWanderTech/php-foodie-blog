@extends('master')
@section('content')
    <section class="categories categories-grid spad">
        <div class="categories__post">
            <div class="container">
                <div class="categories__grid__post">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="breadcrumb__text">
                                <h2>Categories</h2>
                                <div class="breadcrumb__option">
                                    <a href="{{ url('') }}">Home</a>
                                    <span>Categories</span>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($categories as $category)
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="categories__post__item">
                                            <div class="categories__post__item__pic set-bg"
                                                 data-setbg="{{ asset("images/categories/categories-post/$category->thumbnail_photo") }}">
                                                <div class="post__meta">
                                                    <h4>{{date('d', strtotime($category->updated_at))}}</h4>
                                                    <span class="text-uppercase">{{date('M', strtotime($category->updated_at))}}</span>
                                                </div>
                                            </div>
                                            <div class="categories__post__item__text">
                                                <h3><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a>
                                                </h3>
                                                <p>{{$category->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
