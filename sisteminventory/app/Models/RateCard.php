<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RateCard extends Model
{
    protected $fillable = [
        'billboard_id',
        'contract_duration',
        'exclusivity_status',
        'publish_cost',
        'target_sell_price'
    ];

    public function billboard()
    {
        return $this->belongsTo(Billboard::class);
    }
}
