<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Note;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, Note $note)
    {
        $note->comments()->create($request->validated());

        return back();
    }
}
