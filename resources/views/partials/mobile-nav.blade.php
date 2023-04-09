<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{ url('') }}"><img src="{{ asset('images/logo.png') }}" width="70px"></a>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="{{ url('') }}">Home</a></li>
            <li class="dropdown"><a href="{{ url('categories') }}">Categories</a>
                <ul class="dropdown__menu">
                    <li><a href="#">Vegan</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
</div>
