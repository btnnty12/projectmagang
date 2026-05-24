<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = [
        'billboard_id',
        'observation_date',
        'brand',
        'campaign',
        'content',
        'notes'
    ];

    public function billboard()
    {
        return $this->belongsTo(Billboard::class);
    }
}
