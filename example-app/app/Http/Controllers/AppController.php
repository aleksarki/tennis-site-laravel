<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Relation;
use App\Models\Racket;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function index_users()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function feed()
    {
        $subscribed_to = Relation::where("user_id", Auth::id())->get();
        $followed_ids = [];
        foreach ($subscribed_to as $t) {
            array_push($followed_ids, $t->friend_id);
        }
        $rackets = Racket::whereIn("user_id", $followed_ids)->get();
        return view('user.feed', compact('rackets'));
    }

    public function befriend_users(User $user, User $other)
    {
        if (!$user->friends_with($other)) {
            Relation::create([
                'user_id' => $user->id,
                'friend_id' => $other->id
            ]);
            Relation::create([
                'user_id' => $other->id,
                'friend_id' => $user->id
            ]);
        }
        return redirect('/users');
    }
    
    public function subscribe_user(User $user, User $other)
    {
        if (!$user->subscribed_to($other)) {
            Relation::create([
                'user_id' => $user->id,
                'friend_id' => $other->id
            ]);
        }
        return redirect('/users');
    }

    public function unsubscribe_user(User $user, User $other)
    {
        if ($user->subscribed_to($other)) {
            Relation::where('user_id', $user->id)->where('friend_id', $other->id)->delete();
        }
        return redirect('/users');
    }
    
}
