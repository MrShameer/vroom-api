<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chatrooms;

class Message extends Model
{
    use HasFactory;
    public function chatroom()
    {
        return $this->belongsTo(Chatrooms::class, 'chatroom');
    }
}
