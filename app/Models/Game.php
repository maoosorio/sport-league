<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 *
 * @property $id
 * @property $league_id
 * @property $tournament_id
 * @property $home_team_id
 * @property $away_team_id
 * @property $field_id
 * @property $referee_id
 * @property $day
 * @property $time
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Action[] $actions
 * @property Field $field
 * @property League $league
 * @property Referee $referee
 * @property Schedule[] $schedules
 * @property Team $team
 * @property Team $team
 * @property Tournament $tournament
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Game extends Model
{
    
    static $rules = [
		'league_id' => 'required',
		'tournament_id' => 'required',
		'home_team_id' => 'required',
		'away_team_id' => 'required',
		'field_id' => 'required',
		'referee_id' => 'required',
		'day' => 'required',
		'time' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['league_id','tournament_id','home_team_id','away_team_id','field_id','referee_id','day','time','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actions()
    {
        return $this->hasMany('App\Models\Action', 'game_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function field()
    {
        return $this->hasOne('App\Models\Field', 'id', 'field_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function league()
    {
        return $this->hasOne('App\Models\League', 'id', 'league_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function referee()
    {
        return $this->hasOne('App\Models\Referee', 'id', 'referee_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('App\Models\Schedule', 'id_game', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team_away()
    {
        return $this->hasOne('App\Models\Team', 'id', 'away_team_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team_home()
    {
        return $this->hasOne('App\Models\Team', 'id', 'home_team_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tournament()
    {
        return $this->hasOne('App\Models\Tournament', 'id', 'tournament_id');
    }
    

}
