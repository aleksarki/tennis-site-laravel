<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Racket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class CommentController extends Controller
{
    public function index()
    {
        return CommentResource::collection(Comment::all());
    }

    public function index_for($id)
    {
        $racket = Racket::find($id);
        if (!$racket) {
            return response()->json(['error' => "Racket not found"], 404);
        }
        return CommentResource::collection($racket->comments);
    }

    public function show($id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return response()->json(['error' => "Comment not found"], 404);
        }
        return new CommentResource($comment);
    }

    public function store(Request $request, $id)
    {
        $racket = Racket::find($id);
        if (!$racket) {
            return response()->json(['error' => "Racket not found"], 404);
        }

        $validator = Validator::make($request->all(), [
            "text" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = request()->validate([
            "text" => "required"
        ]);

        $comment = Comment::create([
            "text" => $data["text"],
            "user_id" => Auth::id(),
            "racket_id" => $racket->id
        ]);
        
        return new CommentResource($comment);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return response()->json(['error' => "Comment not found"], 404);
        }
        if (!(Auth::id() == $comment->user_id || Auth::user()->is_admin)) {
            return response()->json(['error' => 'Access denied'], 403);
        }

        $validator = Validator::make($request->all(), [
            "text" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = request()->validate([
            "text" => "required"
        ]);

        $comment->update($data);

        return new CommentResource($comment);
    }



}
