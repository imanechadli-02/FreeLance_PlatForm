<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'company_name',
        'company_website',
        'company_description',
        'profile_picture',
        'role',
        'requested_role',
        'approved',
    ];

    // If needed, hide password in serialization
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
