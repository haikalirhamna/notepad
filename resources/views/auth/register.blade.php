@extends('layouts.guest')

@section('content')
    <h2>Create Account</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-yellow">Register</button>
    </form>
@endsection

@section('footer')
    <span class="mb-3">Have any account? <a href="{{ route('login') }}" class="text-black">Sign up</a></span>
    <span class="mb-3"><a href="#" class="text-black">Term & Conditions</a></span>
@endsection
