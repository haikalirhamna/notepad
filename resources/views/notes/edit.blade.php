@extends('layouts.auth')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $note->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $note->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>
@endsection
