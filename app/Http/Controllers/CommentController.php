<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function saveComment(Request $request) {
        $data = $request->validate([
            'Nom' => 'required | max:50 | string',
            'Contenu' => 'required | string'
        ]);

        $comment = Comment::create([
            'name' => $request->Nom,
            'comment' => $request->Contenu
        ]);

        $comment->save();

        return redirect()->route('goldBook');
    }

    public function showAll() {
        $comments = DB::table('livre_dor')->get();

        return view('goldBook', [
            'comments' => $comments
        ]);
    }
}
