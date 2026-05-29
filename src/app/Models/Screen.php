<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    protected $fillable = [
        'position',
        'grade',
        'progress',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
