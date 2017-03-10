@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title title">Login</h1>
            <div class="account-wall">
                <img class="profile-img" src="images/default_login.png"
                    alt="">
                <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>               
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>           
        </div>
    </div>
</div>
@endsection
