<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        "attraction_id",
        'reviewer_name',
        'comment',
    ];

    public function attraction()
    {
        return $this->belongsTo(Attraction::class);
    }
}
