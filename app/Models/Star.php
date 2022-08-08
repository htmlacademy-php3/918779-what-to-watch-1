<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class);
    }
}
