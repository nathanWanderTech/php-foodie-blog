@if(isset($currentUser))
        <ul>
            <li class="dropdown">Welcome <b>{{$currentUser->name}}</b>
                <ul class="dropdown__menu">
                    @if($currentUser->email == 'admin@admin.com')
                        <li><a href="{{ route('categories.create') }}">Create category</a></li>
                    @endif
                    <li><a href="{{ route('posts.create') }}">Create post</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
@else
    <div class="signup-login-block">
        <button class="btn btn-outline-warning"><a href="{{ url('/login') }}">Login</a></button>
        <span>or</span>
        <a href="{{ url('/signup') }}">Sign up</a>
    </div>
@endif
