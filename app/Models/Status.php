<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vehicle;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    
    protected $fillable = [
        'lessee',
        'plat',
        'status',
        'message',
        'total',
        'payment_type',
        'payment',
        'pickup',
        'return',
        'location',
        'progress',
    ];

    public $timestamps = false;

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'plat','plat');
    }

    public function lessee()
    {
        return $this->belongsTo(User::class, 'lessee');
    }

}
