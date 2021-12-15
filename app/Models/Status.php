<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vehicle;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'plat','plat');
    }

}