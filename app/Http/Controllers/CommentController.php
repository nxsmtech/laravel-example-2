<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author_name' => 'required',
            'body' => 'required',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
        ]);

        $comment = Comment::create([
            'author_name' => $validatedData['author_name'],
            'body' => $validatedData['body'],
            'commentable_id' => $validatedData['commentable_id'],
            'commentable_type' => $validatedData['commentable_type'],
        ]);

        $comment->save();

        return redirect()->back();
    }
}
