@extends('layouts.guest')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-yellow">Login</button>
    </form>
@endsection

@section('footer')
    <span class="mb-3">Don't have account? <a href="{{ route('register') }}" class="text-black">Sign up</a></span>
    <span class="mb-3"><a href="#" class="text-black">Term & Conditions</a></span>
@endsection
