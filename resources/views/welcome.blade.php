@extends('master')

@section('content')
    @include('partials.hero.hero', ['posts' => $posts])
@endsection
