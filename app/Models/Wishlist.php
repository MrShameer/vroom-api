<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';

    protected $fillable = [
        'user',
        'plat',
    ];

    public $timestamps = false;

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'plat','plat');
    }
}
