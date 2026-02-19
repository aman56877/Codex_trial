@extends('layouts.app')

@section('content')
    <h1>Reset Password</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <input type="email" name="email" value="{{ old('email', $email) }}" placeholder="Email" required>
        <br><br>
        <input type="password" name="password" placeholder="New Password" required>
        <br><br>
        <input type="password" name="password_confirmation" placeholder="Confirm New Password" required>
        <br><br>
        <button type="submit">Reset Password</button>
    </form>
@endsection
