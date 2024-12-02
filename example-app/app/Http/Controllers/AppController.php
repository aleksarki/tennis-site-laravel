<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppController extends Controller
{
    public function index() {
        return view("welcome");
    }

    public function index_users() {
        $users = User::all();
        return view("user.index", compact("users"));
    }
}
