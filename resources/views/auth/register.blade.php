@extends('layouts.app')

@section('content')
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
        <br><br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
        <br><br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <br><br>
        <button type="submit">Create account</button>
    </form>
    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
@endsection
