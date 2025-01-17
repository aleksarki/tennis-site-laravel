<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rackets() {
        return $this->hasMany(Racket::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
    
    public function friends_with(User $other) {
        $forth = Relation::where('user_id', $this->id)->where('friend_id', $other->id)->exists();
        $back = Relation::where('user_id', $other->id)->where('friend_id', $this->id)->exists();
        return $forth && $back;
    }

    public function subscribed_to(User $other) {
        return Relation::where('user_id', $this->id)->where('friend_id', $other->id)->exists();
    }

    public static function link_color(User $user) {
        if ($user->id == Auth::id()) // мы, серый
            return "link-secondary link-offset-2 link-underline-opacity-50 link-underline-opacity-75-hover";
        if (Auth::user()->friends_with($user)) // друг, красный
            return "link-danger link-offset-2 link-underline-opacity-0";
        if (Auth::user()->subscribed_to($user)) // подписаны на него, синий
            return "link-info link-offset-2 link-underline-opacity-0";
        if ($user->subscribed_to(User::find(Auth::id()))) // подписан на нас, жёлтый
            return "link-warning link-offset-2 link-underline-opacity-0";
        return "link-success link-underline-opacity-0"; // никто, зелёный
    }
}
