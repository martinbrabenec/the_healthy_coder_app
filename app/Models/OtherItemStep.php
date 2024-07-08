<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherItemStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'other_item_id',
        'description',
        'step_number',
    ];

    public function otherItem()
    {
        return $this->belongsTo(OtherItem::class);
    }
}
