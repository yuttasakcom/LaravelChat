@extends('layouts.login') @section('content')
<div class="login">
    <div class="login-container mt-5">
        <div class="input-container mt-5">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <h2>Login to your account</h2>
                <p>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="loginUsername">Username</label>
                        <input type="email" name="email" placeholder="e.g. example@gmail.com"> @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </p>

                <p>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="loginPassword">Password</label>
                        <input type="password" name="password" placeholder="Your password"> @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="link-forgot-password">
                        <a href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>

                <button type="submit">LOG IN</button>

                <div class="has-account-text">
                    <span id="hideLogin">Don't have an account yet?
                        <a href="/register">Signup here.</a>
                    </span>
                </div>
            </form>

        </div>

        <div class="login-text mt-5">
            <h1>Laravel Music</h1>
            <h2>Listen to loads of songs for free</h2>
            <ul>
                <li>Discover music you'll fall in love with</li>
                <li>Create your own playlists</li>
                <li>Follow artists to keep up to date</li>
            </ul>
        </div>

    </div>
</div>
@endsection