<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use \App\Models\Racket;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RacketController extends Controller
{
    public function index()
    {
        $rackets = Racket::all();
        $view = true;

        $user = Auth::user();
        $user->is_admin ? $trashed = Racket::onlyTrashed()->get() : $trashed = null;

        return view("racket.index", compact("rackets", 'view', 'trashed', 'user'));
    }

    public function index_user(User $user)
    {
        $rackets = Racket::where("user_id", $user->id)->get();
        $view = false;
        return view("racket.index", compact("user", "rackets", 'view'));
    }

    public function create()
    {
        return view("racket.create");
    }

    public function store(Request $request)
    {
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

        Racket::create($data);
        
        $user = Auth::user();
        $user_name = $user->name;

        return redirect("/rackets/user/$user_name");
    }

    public function create_comment(Racket $racket)
    {
        return view('racket.new_comment', compact('racket'));
    }

    public function store_comment(Request $request, Racket $racket)
    {
        $data = $request->validate([
            "text" => "required"
        ]);

        Comment::create([
            "text" => $data["text"],
            "user_id" => Auth::id(),
            "racket_id" => $racket->id
        ]);

        $racket_id = $racket->id;

        return redirect("/rackets/$racket_id/comments");
    }

    public function show(Racket $racket)
    {
        $user = User::findOrFail($racket->user_id);
        return view('racket.show', compact('racket', 'user'));
    }

    public function comments(Racket $racket)
    {
        return view('racket.comments', compact('racket'));
    }

    public function edit(Racket $racket)
    {
        if (!Gate::allows('edit-racket', $racket)) {
            abort(403);
        }

        return view('racket.edit', compact('racket'));
    }

    public function update(Request $request, Racket $racket)
    {
        if (!Gate::allows('edit-racket', $racket)) {
            abort(403);
        }

        $data = request()->validate([
            "name" => "required",
            "country" => "required",
            "image"=> "",
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

        $user = Auth::user();
        $user_name = $user->name;

        return redirect("/rackets/user/$user_name");
    }

    public function destroy(Racket $racket)
    {
        if (!Gate::allows('soft-delete-racket', $racket)) {
            abort(403);
        }

        $racket->delete();

        $user = Auth::user();
        $user_name = $user->name;

        return redirect("/rackets/user/$user_name");
    }

    public function restore(Request $request, $id)
    {
        if (!Gate::allows('restore-racket')) {
            abort(403);
        }

        $racket = Racket::onlyTrashed()->find($id);
        $racket->restore();

        return redirect('/rackets');
    }

    public function force_delete($id)
    {
        if (!Gate::allows('restore-racket')) {
            abort(403);
        }
        
        $racket = Racket::onlyTrashed()->find($id);
        $racket->forceDelete();
        return redirect('/rackets');
    }
}
