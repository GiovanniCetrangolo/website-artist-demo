@extends('layouts.app')

@section('title', 'Login')

@section('head')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<h1 class="titolo-principale">Login</h1>

<div class="login-container">
    <div class="login-form">
        
        @include('auth.partials.login-form')
    </div>
</div>
@endsection
