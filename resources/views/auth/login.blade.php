@extends('layouts.login') @section('content')
<div class="login">
    <div class="login-container mt-5">
        <div class="input-container mt-5">
            <form>
                <h2>Login to your account</h2>
                <p>
                    <label for="loginUsername">Username</label>
                    <input type="email" placeholder="e.g. example@gmail.com">
                </p>

                <p>
                    <label for="loginPassword">Password</label>
                    <input type="password" placeholder="Your password">
                </p>

                <button type="submit" name="loginButton">LOG IN</button>

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