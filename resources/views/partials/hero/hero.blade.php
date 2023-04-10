<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        @include('partials.hero.item1', ['post' => $posts[0]])
                    </div>
                    <div class="col-lg-3 col-md-6  p-0">
                        @include('partials.hero.item2', ['post' => $posts[1]])
                        @include('partials.hero.item2', ['post' => $posts[2]])
                    </div>
                    <div class="col-lg-3 col-md-6  p-0">
                        @include('partials.hero.item3', ['post' => $posts[3]])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
