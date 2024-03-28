<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Player
 *
 * @property $id
 * @property $name
 * @property $position
 * @property $number
 * @property $birthdate
 * @property $player_photo_path
 * @property $id_league
 * @property $id_team
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Action[] $actions
 * @property League $league
 * @property PlayerTeam[] $playerTeams
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Player extends Model
{
    
    static $rules = [
		'name' => 'required',
		'position' => 'required',
		'number' => 'required',
		'birthdate' => 'required',
		'id_league' => 'required',
		'id_team' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','position','number','birthdate','player_photo_path','id_league','id_team','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actions()
    {
        return $this->hasMany('App\Models\Action', 'player_id', 'id');
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
        return $this->hasMany('App\Models\PlayerTeam', 'id_player', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'id_team');
    }
    

}
