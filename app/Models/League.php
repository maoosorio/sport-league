<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class League extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_user',
        'status',
    ];

    public function tournament(): HasMany
    {
        return $this->hasMany(Tournament::class);
    }
}
