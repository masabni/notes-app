<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        return view('notes.index', [
            'notes' => auth()->user()->notes()->latest()
        ]);
    }

    public function show(Note $note)
    {
        return view('notes.show', ['note' => $note->load(['user', 'comments.user'])]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(NoteRequest $request)
    {
        Note::create($request->validated());

        return redirect('/');
    }
}
