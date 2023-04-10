
<div class="single-post__comment">
    <div class="widget__title">
        <h4>{{count($comments) < 10 ? '0'.count($comments) : count($comments)}} Comment{{count($comments) < 2 ? '' : 's'}}</h4>
    </div>
    @foreach($comments as $comment)
    <div class="single-post__comment__item">
        <div class="single-post__comment__item__pic">
            <img src="{{ asset('images/categories/single-post/comment/comment-3.jpg') }}" alt="">
        </div>
        <div class="single-post__comment__item__text">
            <h5>{{ $comment->author->name }}</h5>
            <span class="text-uppercase">{{ date('d M Y', strtotime($comment->created_at)) }}</span>
            <p>{{ $comment->content }}</p>
            <ul>
                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
            </ul>
        </div>
    </div>
    @endforeach
</div>

