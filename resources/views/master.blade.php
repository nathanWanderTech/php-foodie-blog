<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
@include('partials.mobile-nav')
@include('partials.header')
<div>
    @section('content')
    @show
</div>
@include('partials.footer')
<!-- Js -->
<script src={{ asset('js/jquery-3.3.1.min.js')}}></script>
<script src={{ asset('js/bootstrap.min.js')}}></script>
<script src={{ asset('js/jquery.slicknav.js')}}></script>
<script src={{ asset('js/owl.carousel.min.js')}}></script>
<script src={{ asset('js/main.js')}}></script>
</body>
</html>
