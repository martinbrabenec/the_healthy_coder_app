<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHealthLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'log_type',
        'value',
        'logged_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
