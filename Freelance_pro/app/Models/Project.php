<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'budget',
        'deadline',
        'skills_required',
        'client_id',
        'developer_id',
        'service_id',
        'status',
    ];

    protected $casts = [
        'deadline' => 'date',
        'budget' => 'decimal:2',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function developer()
    {
        return $this->belongsTo(User::class, 'developer_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
} 