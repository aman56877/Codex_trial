@extends('layouts.app')

@section('content')
    <h1>Laravel Authentication Demo</h1>
    <p><a href="{{ route('register') }}">Register</a> | <a href="{{ route('login') }}">Login</a></p>
@endsection
