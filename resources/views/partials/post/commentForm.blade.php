<div class="single-post__leave__comment">
    <div class="widget__title">
        <h4>Leave a comment</h4>
    </div>
    <form role="form" method="POST" action="{{ action([\App\Http\Controllers\CommentController::class, 'store'])}}">
        {{ csrf_field() }}
        {{--        HIDDEN FIELDS --}}
        <input type="hidden" name="author_id" value="{{ isset($author_id)  ? $author_id : ''}}">
        <input type="hidden" name="post_id" value="{{ $post_id }}">
        {{--        END HIDDEN FIELDS --}}

        <div class="input-list">
            <input type="text" placeholder="Name" name="name">
        </div>
        <textarea placeholder="Message" name="content"></textarea>
        <button type="submit" class="site-btn">Submit</button>
        @include('partials.errors')
    </form>
</div>
