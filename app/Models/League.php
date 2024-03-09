<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class League
 *
 * @property $id
 * @property $name
 * @property $id_user
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Game[] $games
 * @property PlayerTeam[] $playerTeams
 * @property Team[] $teams
 * @property Tournament[] $tournaments
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class League extends Model
{
    
    static $rules = [
		'name' => 'required',
		'id_user' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','id_user','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'league_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playerTeams()
    {
        return $this->hasMany('App\Models\PlayerTeam', 'id_league', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams()
    {
        return $this->hasMany('App\Models\Team', 'id_league', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tournaments()
    {
        return $this->hasMany('App\Models\Tournament', 'id_league', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    

}
