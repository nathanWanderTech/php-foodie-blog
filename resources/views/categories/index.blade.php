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
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic small__item set-bg"
                                             data-setbg="{{ asset('images/categories/categories-post/cp-2.jpg') }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Recipe</span>
                                            <h3><a href="#">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic set-bg"
                                             data-setbg="{{ asset('images/categories/categories-post/cp-4.jpg') }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <ul class="post__label--large">
                                                <li>Vegan</li>
                                                <li>Desserts</li>
                                            </ul>
                                            <h3><a href="#">The Best Grass Stain Remover Is Already In Your Pantry</a>
                                            </h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                                gravida...</p>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__plain set-bg"
                                         data-setbg="{{ asset('images/categories/categories-post/cp-6.jpg') }}">
                                        <div class="categories__post__item__text">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                            <ul class="post__label--large">
                                                <li>Vegan</li>
                                                <li>Desserts</li>
                                            </ul>
                                            <h3><a href="#">This Summer Snacking Cake Is theSweetest Excuse to...</a>
                                            </h3>
                                            <div class="post__social">
                                                <span>Share</span>
                                                <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                                <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                                <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic smaller__large set-bg"
                                             data-setbg="{{ asset('images/categories/categories-post/cp-8.jpg') }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Smoothie</span>
                                            <h3><a href="#">This 2-Ingredient Spread Makes Any Egg Sandwich So Much
                                                    Better</a></h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                                gravida...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic smaller__large set-bg"
                                             data-setbg="{{ asset('images/categories/categories-post/cp-3.jpg') }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Dinner</span>
                                            <h3><a href="#">17 Perfect Gifts for Your Vegan Friend Because
                                                    Sometimes...</a></h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                                gravida...</p>
                                        </div>
                                    </div>
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic smaller__large set-bg"
                                             data-setbg="{{ asset('images/categories/categories-post/cp-5.jpg') }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <span class="post__label">Drinks</span>
                                            <h3><a href="#">A 5-Minute Peach Mug Cobbler That Just So Happens to...</a>
                                            </h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                                gravida...</p>
                                        </div>
                                    </div>
                                    <div class="categories__post__item">
                                        <div class="categories__post__item__pic set-bg"
                                             data-setbg="{{ asset('images/categories/categories-post/cp-7.jpg') }}">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="categories__post__item__text">
                                            <ul class="post__label--large">
                                                <li>Vegan</li>
                                                <li>Desserts</li>
                                            </ul>
                                            <h3><a href="#">Fresh Herb Polenta with Parsnip Chips and Maple Butter</a>
                                            </h3>
                                            <ul class="post__widget">
                                                <li>by <span>Admin</span></li>
                                                <li>3 min read</li>
                                                <li>20 Comment</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                                gravida...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
