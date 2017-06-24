@extends('layouts.master')

@section('title')
    Laravel Shopping Cart 1 : Signup
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign Up</h1>
        @if(count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form method="post" action="{{route('user.signup')}}">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="username">Username</label>--}}
                {{--<input type="text" id="username" name="username">--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection