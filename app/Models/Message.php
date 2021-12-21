<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chatrooms;

class Message extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime',
    ];

    protected $fillable = [
        'chatroom',
        'sender',
        'message',
    ];


    public function chatroom()
    {
        return $this->belongsTo(Chatrooms::class, 'chatroom');
    }
}
