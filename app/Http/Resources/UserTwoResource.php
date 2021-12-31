<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserTwoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'chatid' => $this->id,
            'id' => $this->user_two()->pluck('id')->first(),
            'name' => $this->user_two()->pluck('name')->first(),
            'phone' => $this->user_two()->pluck('phone')->first(),
            'message' => $this->message()->orderBy('updated_at')->pluck('message')->last(),
        ];
    }
}
