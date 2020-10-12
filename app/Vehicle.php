<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = ['type', 'localization', 'can_children', 'can_animals', 'maximum_person', 'more_options'];

    protected $casts = [
        'config' => 'array',
    ];

    public $types = [
        'camper' => 1,
        'boat' => 2,
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'vehicle_id', 'id');
    }
}
