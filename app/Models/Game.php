<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'league_id',
        'tournament_id',
        'home_team_id',
        'away_team_id',
        'field_id',
        'referee_id',
        'schedule_id',
        'time',
        'status',
    ];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function field(): HasOne
    {
        return $this->HasOne(Field::class);
    }

    public function referee(): HasOne
    {
        return $this->HasOne(Referee::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }

}
