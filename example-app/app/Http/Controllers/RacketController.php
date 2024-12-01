<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RacketController extends Controller
{
    public function index()
    {
        $rackets = \App\Models\Racket::all();
        return view("racket.index", compact("rackets"));
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

        \App\Models\Racket::create($data);

        return redirect('/rackets');
    }

    public function show($id)
    {
        $racket = \App\Models\Racket::findOrFail($id);
        return view('racket.show', compact('racket'));
    }

    public function edit($id)
    {
        $racket = \App\Models\Racket::findOrFail($id);
        return view('racket.edit', compact('racket'));
    }

    public function update(Request $request, $id)
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

        $racket = \App\Models\Racket::findOrFail($id);
        $racket->update($data);

        return redirect('/rackets');
    }

    public function destroy($id)
    {
        $racket = \App\Models\Racket::findOrFail($id);
        $racket->delete();
        return redirect('/rackets');
    }
}
