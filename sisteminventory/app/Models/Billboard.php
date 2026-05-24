<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    protected $fillable = [
        'area_id',
        'vendor_id',
        'user_id',
        'location_description',
        'view_from',
        'view_to',
        'length',
        'height',
        'billboard_type',
        'orientation',
        'construction_side',
        'latitude',
        'longitude',
        'nearby_poi',
        'traffic_volume',
        'total_population',
        'external_score',
        'photo'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }

    public function rateCards()
    {
        return $this->hasMany(RateCard::class);
    }

    public function validations()
    {
        return $this->hasMany(Validation::class);
    }
}
