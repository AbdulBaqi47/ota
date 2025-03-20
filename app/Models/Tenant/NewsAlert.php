<?php

namespace App\Models\Tenant;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

// use Stancl\Tenancy\Database\Concerns\UsesTenantConnection;

class NewsAlert extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'title',
        'message',
        'type',
        'meta',
        'is_featured',
        'expired_at',
    ];

    protected $filterableAttributes = [
        'title' => 'like',
        'created_at' => 'date',
        'expired_at' => 'date',
    ];


}
