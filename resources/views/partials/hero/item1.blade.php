<div class="hero__inside__item hero__inside__item--wide set-bg"
     data-setbg={{ asset('images/hero/hero-1.jpg')}}>
    <div class="hero__inside__item__text">
        <div class="hero__inside__item--meta">
            <span>{{date('d', strtotime($post->updated_at))}}</span>
            <p>{{date('M', strtotime($post->updated_at))}}</p>
        </div>
        <div class="hero__inside__item--text">
            <ul class="label">
                <li>{{$post->category->name}}</li>
            </ul>
            <a href="{{route('posts.show', $post->id)}}"><h4>{{$post->title}}</h4></a>
            <ul class="widget">
                <li>by <span>{{$post->author->name}}</span></li>
                <li>20 Comment</li>
            </ul>
        </div>
    </div>
</div>
