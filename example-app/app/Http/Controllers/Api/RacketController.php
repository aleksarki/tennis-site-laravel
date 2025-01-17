<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Racket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class RacketController extends Controller
{
    public function index()
    {
        $rackets = Racket::all();
        return response()->json($rackets);
    }

    public function show($id)
    {
        $racket = Racket::find($id);
        if (!$racket) {
            return response()->json(['error' => "Racket not found"], 404);
        }
        return response()->json($racket);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "country" => "required",
            "image"=> "required",
            "bdate" => "required|date",
            "title" => "required",
            "family" => "",
            "other" => "",
            "game" => ""
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = request()->validate([
            "name" => "required",
            "country" => "required",
            "image"=> "required",
            "bdate" => "required|date",
            "title" => "required",
            "family" => "",
            "other" => "",
            "game" => "",
        ]);
        
        $file = $request->file('image');
        $destinationPath = 'images/';
        $originalFile = $file->getClientOriginalName();
        $file->move($destinationPath, $originalFile);
        $data["image"] = $file->getClientOriginalName();

        $user_id = Auth::id();
        $data["user_id"] = $user_id;

        $racket = Racket::create($data);
        
        return response()->json($racket, 201);
    }

    public function update(Request $request, $id)
    {
        $racket = Racket::find($id);
        if (!$racket) {
            return response()->json(['error' => "Racket not found"], 404);
        }
        if (!(Auth::id() == $racket->user_id || Auth::user()->is_admin)) {
            return response()->json(['error' => 'Access denied'], 403);
        }

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "country" => "required",
            "image"=> "required",
            "bdate" => "required|date",
            "title" => "required",
            "family" => "",
            "other" => "",
            "game" => ""
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = request()->validate([
            "name" => "required",
            "country" => "required",
            "image"=> "required",
            "bdate" => "required|date",
            "title" => "required",
            "family" => "",
            "other" => "",
            "game" => "",
        ]);

        if (!isset($data["image"])) {
            $data["image"] = $racket->image;
        }
        else {
            $file = $request->file('image');
            $destinationPath = 'images/';

            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);

            $data["image"] = $file->getClientOriginalName();
        }

        $racket->update($data);

        return response()->json($racket);
    }

    public function destroy($id)
    {
        $racket = Racket::find($id);
        if (!$racket) {
            return response()->json(['error' => "Racket not found"], 404);
        }
        if (!(Auth::id() == $racket->user_id || Auth::user()->is_admin)) {
            return response()->json(['error' => 'Access denied'], 403);
        }

        $racket->delete();

        return response()->json(['message' => "Racket deleted"], 200);
    }
}
