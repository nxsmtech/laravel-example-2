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
            'post_id' => 'required',
        ]);

        $comment = Comment::create([
            'author_name' => $validatedData['author_name'],
            'body' => $validatedData['body'],
            'post_id' => $validatedData['post_id'],
        ]);

        $comment->save();

        return redirect()->back();
    }
}
