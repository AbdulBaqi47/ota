<?php

namespace App\Models\Tenant;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Airlines extends Model
{
    use HasFactory, Notifiable;
    public static $active = 1;
    protected $fillable = [
        'name',
        'thumbnail',
        'iata_desi',
        'iata_code',
        'icao_code',
        'status',
        'country_id',
        'issuing_pcc',
        'reserving_pcc',
        'tour_code',
        'supplier_id',
        'preferred_airlines'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $casts = [
        'preferred_airlines' => 'array',
    ];
    // protected $filterableAttributes = [
    //     'name' => 'like',
    //     'iata_desi' => 'like',
    //     'iata_code' => 'like',
    //     'icao_code' => 'like',
    //     'status' => 'equals',
    //     'country.name' => [
    //         'operation' => 'like',
    //     ],
    //     'created_at' => 'date'
    // ];


    // public function getThumbnailAttribute($value)
    // {
    //     return asset($value);
    // }

    // function country()
    // {
    //     return $this->belongsTo(Country::class);
    // }

    // public function commisions()
    // {
    //     return $this->hasMany(AirlineCommision::class, 'airline_id', 'id');
    // }

    // public function ACommission()
    // {
    //     return $this->hasOne(AirlineCommision::class, 'airline_id', 'id');
    // }

    // public function generalCommision()
    // {
    //     return $this->hasOne(AirlineCommision::class, 'airline_id', 'id');
    // }

    // public function promotionOrigination()
    // {
    //     return $this->hasManyThrough(AirlineCommision::class, PromotionOrigination::class, 'airline_id', 'promotion_id', 'id', 'id');
    // }
    // public function agentPromotion()
    // {
    //     return $this->hasManyThrough(AirlineCommision::class, 'agents_promotions', 'airline_id', 'commission_id', 'id', 'id');
    // }

    // function supplier()
    // {
    //     return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    // }
    // function managePricing(){
    //     return $this->hasOne(ManageSubAgentPricing::class, 'airline_id');

    // }
}
