<?php

namespace App\Models\Tenant;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nice_name',
        'iso',
        'iso3',
        'num_code',
        'phone_code',
        'status'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public static $status = ['active' => 1, 'in_active' => 0];
    /**
     * Attributes that can be filtered are defined in this array
     *
     * @var array
     */
    // protected $filterableAttributes = [
    //     'name' => 'like',
    //     'nice_name' => 'like',
    //     'iso' => 'equals',
    //     'iso3' => 'equals',
    //     'num_code' => 'like',
    //     'phone_code' => 'like',
    //     'status' => 'equals',
    //     'created_at' => 'date'
    // ];

    // public function visaRequirements()
    // {
    //     return $this->hasMany(VisaRequirement::class, 'country_id', 'id');
    // }
}
