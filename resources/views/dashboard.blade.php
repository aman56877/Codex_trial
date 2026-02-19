@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <p>You are logged in as {{ auth()->user()->email }}.</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
