<?php

namespace App\Models\Tenant;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory, Notifiable;

    public static $base_country = 'PAKISTAN';
    protected $fillable = [
        'ident',
        'name',
        'coordinates',
        'continent',
        'iso_country',
        'country',
        'iso_region',
        'municipality',
        'gps_code',
        'iata_code',
        'local_code'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // protected $filterableAttributes = [
    //     'ident' => 'like',
    //     'name' => 'like',
    //     'coordinates' => 'like',
    //     'continent' => 'like',
    //     // 'iso_country' => 'like',
    //     'country' => 'like',
    //     // 'iso_region' => 'like',
    //     'municipality' => 'like',
    //     // 'gps_code' => 'like',
    //     'iata_code' => 'like',
    //     // 'local_code' => 'like',
    //     'created_at' => 'date'
    // ];
}
