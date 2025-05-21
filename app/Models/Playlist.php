<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{
    protected $fillable = [
        'uuid',
        'user_id',
        'title',
    ];

<<<<<<< HEAD
=======
    public function getRouteKeyName()
    {
        return 'uuid';
    }

>>>>>>> ami/main
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tracks(): BelongsToMany
    {
        return $this->belongsToMany(Track::class)->withPivot(['play_count'])->withTimestamps();
    }
}
