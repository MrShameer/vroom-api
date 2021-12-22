<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserOneResource extends JsonResource
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
            'name' => $this->user_one()->pluck('name')->first(),
            'phone' => $this->user_one()->pluck('phone')->first(),
            'message' => $this->message()->orderBy('updated_at')->pluck('message')->last(),
        ];
    }
}
