<?php

namespace App\Models\Tenant;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'city_code',
        'municipality',
        'latitude',
        'longitude',
        'status',
        'country_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    // protected $filterableAttributes = [
    //     'name' => 'like',
    //     'city_code' => 'equals',
    //     'municipality' => 'like',
    //     'country.name' => [
    //         'operation' => 'like',
    //     ],
    //     'status' => 'equals',
    //     'created_at' => 'date'
    // ];


    function country()
    {
        return $this->belongsTo(Country::class);
    }
}
