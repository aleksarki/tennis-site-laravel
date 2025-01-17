<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'text' => $this->text,
            'user_id' => $this->user_id,
            'racket_id' => $this->racket_id,
            'racket_name' => $this->racket->name,
            'racket_country' => $this->racket->country,
            'racket_bdate' => $this->racket->bdate,
            'racket_title' => $this->racket->title,
            'racket_user' => $this->racket->user->name,
            'user_is_friend' => $this->racket->user->friends_with(Auth::user()),
            'created_at' => $this->created_at->toDateString(),
            'updated_at' => $this->updated_at->toDateString()
        ];
    }
}
