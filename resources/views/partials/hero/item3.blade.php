<div class="hero__inside__item set-bg" data-setbg={{ str_contains($post->thumbnail_photo, "https") ? asset($post->thumbnail_photo) : asset('storage/' . $post->thumbnail_photo)}}>
    <div class="hero__inside__item__text">
        <div class="hero__inside__item--meta">
            <span>{{date('d', strtotime($post->updated_at))}}</span>
            <p>{{date('M', strtotime($post->updated_at))}}</p>
        </div>
        <div class="hero__inside__item--text">
            <ul class="label">
                <li>{{$post->category->name}}</li>
            </ul>
            <a href="{{route('posts.show', $post->id)}}"><h5>{{$post->title}}</h5></a>
        </div>
    </div>
</div>
