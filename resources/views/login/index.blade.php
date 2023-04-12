@extends('master')
@section('content')
    <div class="container">
        <form role="form" method="POST" action="{{ action([\App\Http\Controllers\LoginController::class, 'login'])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row required">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                    <input class="form-control" name="email" type="email" value="{{ $email ?? '' }}" required/>
                </div>
            </div>
            <div class="form-group row required">
                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                <div class="col-lg-9">
                    <input class="form-control" name="password" type="password" value="{{ $password ?? '' }}" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="submit" class="btn btn-primary" value="Login" />
                    <p class="text-danger">{{ Request::get('error') }}</p>
                </div>
            </div>
        </form>
    </div>
@endsection
