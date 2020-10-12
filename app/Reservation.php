<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'vehicle_reservation';

    protected $fillable = ['from', 'to', 'number_of_travelers'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id', 'vehicle_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
