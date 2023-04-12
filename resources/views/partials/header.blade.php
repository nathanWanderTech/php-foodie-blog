<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                    <div class="header__humberger">
                        <i class="fa fa-bars humberger__open"></i>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 order-md-2 order-3">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('') }}">Home</a></li>
                            <li class="dropdown"><a href="{{ url('categories') }}">Categories</a>
                                <ul class="dropdown__menu">
                                    @foreach($categories as $category)
                                        <li><a href="{{ url("categories/$category->id") }}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('posts.index') }}">Posts</a>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                    <div class="header__search">
                        <nav class="header__menu">
                            @include('partials.authen.login')
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__btn"></div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__logo">
                    <a href="{{ url('') }}"><h4>PHP Foodie</h4></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
