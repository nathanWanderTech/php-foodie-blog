@extends('master')
@section('content')
    <div class="container">
        <div class="col-lg-12 text-lg-center">
            <h2 class="active">Create category</h2><br>
        </div>
        <div class="col-lg-8 push-lg-4">
            <form role="form" method="POST" action="{{ action([\App\Http\Controllers\CategoryController::class, 'store'])}}" enctype="multipart/form-data">
                @include('partials.category.categoryForm', ['buttonName' => 'Create'])
                @include('partials.errors')
            </form>
        </div>
    </div>
@endsection
