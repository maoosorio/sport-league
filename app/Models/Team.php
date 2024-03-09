<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 *
 * @property $id
 * @property $name
 * @property $owner
 * @property $coach
 * @property $foundation
 * @property $team_photo_path
 * @property $id_league
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Action[] $actions
 * @property Game[] $games
 * @property Game[] $games
 * @property League $league
 * @property PlayerTeam[] $playerTeams
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Team extends Model
{
    
    static $rules = [
		'name' => 'required',
		'owner' => 'required',
		'coach' => 'required',
		'foundation' => 'required',
		'id_league' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','owner','coach','foundation','team_photo_path','id_league','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actions()
    {
        return $this->hasMany('App\Models\Action', 'team_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games_away_team()
    {
        return $this->hasMany('App\Models\Game', 'away_team_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games_home_team()
    {
        return $this->hasMany('App\Models\Game', 'home_team_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function league()
    {
        return $this->hasOne('App\Models\League', 'id', 'id_league');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playerTeams()
    {
        return $this->hasMany('App\Models\PlayerTeam', 'id_team', 'id');
    }
    

}
