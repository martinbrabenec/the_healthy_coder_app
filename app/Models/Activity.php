<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_type',
        'body_zone',
        'created_at',
        'description',
        'is_favorite',
        'name',
        'photo_url',
        'updated_at',
        'user_id'
    ];

    // Other model properties and methods...

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
