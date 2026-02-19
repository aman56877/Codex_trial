@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
        <br><br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <label>
            <input type="checkbox" name="remember" value="1"> Remember me
        </label>
        <br><br>
        <button type="submit">Sign in</button>
    </form>
    <p><a href="{{ route('password.request') }}">Forgot password?</a></p>
@endsection
