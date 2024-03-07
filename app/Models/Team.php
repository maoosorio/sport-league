<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'coach',
        'foundation',
        'team_photo_path',
        'status',
        'id_league',
    ];

    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class);
    }

    public function player(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
