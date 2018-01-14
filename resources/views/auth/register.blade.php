@extends('layouts.login') @section('content')
<div class="login">
    <div class="login-container">
        <div class="input-container">
            <form>
                <h2>Create your free account</h2>
                <p>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="e.g. bartSimpson">
                </p>

                <p>
                    <label for="firstName">First name</label>
                    <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart">
                </p>

                <p>
                    <label for="lastName">Last name</label>
                    <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson">
                </p>

                <p>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com">
                </p>

                <p>
                    <label for="email2">Confirm email</label>
                    <input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com">
                </p>

                <p>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Your password" required>
                </p>

                <p>
                    <label for="password2">Confirm password</label>
                    <input id="password2" name="password2" type="password" placeholder="Your password" required>
                </p>

                <button type="submit" name="registerButton">SIGN UP</button>

                <div class="has-account-text">
                    <span id="hideRegister">Already have an account?
                        <a href="/login">Log in here.</a>
                    </span>
                </div>

            </form>
        </div>

        <div class="login-text">
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