@extends('layouts.auth')

@section('content')
    <div class="text-center mb-4">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <a href="{{ route('notes.create') }}" class="btn btn-primary">Create Note</a>
        <a href="{{ route('logout') }}" class="btn btn-secondary"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <div class="row">
        @foreach ($notes as $note)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">{{ $note->title }}</h3>
                        <p class="card-text">{{ Str::limit($note->content, 100) }}</p>
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-outline-primary">Edit</a>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
