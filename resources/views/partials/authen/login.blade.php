@if(isset($currentUser))
    <nav class="header__menu">
        <ul>
            <li class="dropdown">Welcome <b>{{$currentUser->name}}</b>
                <ul class="dropdown__menu">
                    <li><a href="{{ route('categories.create') }}">Create category</a></li>
                    <li><a href="{{ route('posts.create') }}">Create post</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
@else
    <a href="{{ url('/login') }}"><span>Login</span></a>
@endif
