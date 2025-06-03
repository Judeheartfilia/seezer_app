<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $fillable = [
        'uuid',
        'user_id',
        'name',
        'key',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
