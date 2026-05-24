<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    protected $fillable = [
        'billboard_id',
        'validated_by',
        'coordinate_valid',
        'photo_valid',
        'data_valid',
        'validation_status',
        'notes',
        'validated_at'
    ];

    public function billboard()
    {
        return $this->belongsTo(Billboard::class);
    }

    public function validator()
    {
        return $this->belongsTo(User::class, 'validated_by');
    }
}
