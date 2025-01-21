<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    // Menampilkan daftar catatan milik pengguna yang sedang login
    public function index()
    {
        $notes = Auth::user()->notes;
        return view('notes.index', compact('notes'));
    }

    // Menampilkan form untuk membuat catatan baru
    public function create()
    {
        return view('notes.create');
    }

    // Menyimpan catatan baru
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $user_id = Auth::user()->id;

        // Create a new note associated with the authenticated user
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $user_id,
        ]);

        // Redirect to the home route with a success message
        return redirect()->route('home')->with('success', 'Note created successfully!');
    }

    // Menampilkan form untuk mengedit catatan
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    // Menyimpan perubahan catatan
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = Note::findOrFail($id);
        $note->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('home');
    }

    // Menghapus catatan
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('home');
    }
}
