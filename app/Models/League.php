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
 * @property Admin $admin
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class League extends Model
{
    
    static $rules = [
		'name' => 'required',
		'id_admin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','id_admin','status'];


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
    public function admin()
    {
        return $this->hasOne('App\Models\Admin', 'id', 'id_admin');
    }
    

}
