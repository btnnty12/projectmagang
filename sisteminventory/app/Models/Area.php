<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'area_name',
        'city',
        'province'
    ];

    public function billboards()
    {
        return $this->hasMany(Billboard::class);
    }
}
