<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Message;

class Chatrooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_one',
        'user_two',
        'created_at',
    ];

    public function user_one()
    {
        return $this->belongsTo(User::class, 'user_one');
    }

    public function user_two()
    {
        return $this->belongsTo(User::class, 'user_two');
    }

    public function message()
    {
        return $this->hasMany(Message::class, 'chatroom');
    }
    
}
