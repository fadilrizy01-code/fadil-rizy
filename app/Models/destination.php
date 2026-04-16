<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'location',
        'working_hours',
        'working_days',
        'ticket_price',
    ];
    
    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }
}
