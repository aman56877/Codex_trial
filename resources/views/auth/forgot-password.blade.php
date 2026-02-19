@extends('layouts.app')

@section('content')
    <h1>Forgot Password</h1>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
        <br><br>
        <button type="submit">Email Password Reset Link</button>
    </form>
    <p><a href="{{ route('login') }}">Back to login</a></p>
@endsection
