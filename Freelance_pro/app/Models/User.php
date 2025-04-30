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
        'profil_picture',
        'role',
        'requested_role',
        'approved',
    ];

    // If needed, hide password in serialization
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id');
    }

    public function developerProjects()
    {
        return $this->hasMany(Project::class, 'developer_id');
    }
}
