@extends('master')
@section('content')
    <div class="container">
        <div class="col-lg-12 text-lg-center">
            <h2 class="active">Create post</h2><br>
        </div>
        <div class="col-lg-8 push-lg-4">
            <form role="form" method="POST" action="{{ action([\App\Http\Controllers\PostController::class, 'store'])}}" enctype="multipart/form-data">

                @include('partials.errors')
            </form>
        </div>
    </div>
@endsection
