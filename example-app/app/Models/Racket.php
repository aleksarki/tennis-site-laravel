<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Racket extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected static function booted()
    {
        
        static::updating(function ($racket) {
            $user = Auth::user();

            if (($user->id != $racket->user_id) && (!$user->is_admin)) {
                abort(403);
            }
        });

        static::deleting(function ($racket) {
            $user = Auth::user();

            if (($user->id != $racket->user_id) && (!$user->is_admin)) {
                abort(403);
            }
            
        });

        static::restoring(function ($racket) {
            $user = Auth::user();
            
            if (!$user->is_admin) {
                abort(403);
            }
        });
        
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // дата рождения
    public function getBdateAttribute($value)
    {
        return $value;
    }

    public function setBdateAttribute($value)
    {
        $this->attributes["bdate"] = $value;
    }

    // остальные аттрибуты
    public function getNameAttribute($value)
    {
        return $value;
    }

    public function setNameAttribute($value)
    {
        $this->attributes["name"] = $value;
    }

    public function getCountryAttribute($value)
    {
        return $value;
    }

    public function setCountryAttribute($value)
    {
        $this->attributes["country"] = $value;
    }

    public function getTitleAttribute($value)
    {
        return $value;
    }

    public function setTitleAttribute($value)
    {
        $this->attributes["title"] = $value;
    }

    public function getFamilyAttribute($value)
    {
        return $value;
    }

    public function setFamilyAttribute($value)
    {
        $this->attributes["family"] = $value;
    }

    public function getOtherAttribute($value)
    {
        return $value;
    }

    public function setOtherAttribute($value)
    {
        $this->attributes["other"] = $value;
    }

    public function getGameAttribute($value)
    {
        return $value;
    }

    public function setGameAttribute($value)
    {
        $this->attributes["game"] = $value;
    }
}
