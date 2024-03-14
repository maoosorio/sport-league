<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tournament
 *
 * @property $id
 * @property $name
 * @property $id_league
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Game[] $games
 * @property League $league
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tournament extends Model
{
    
    static $rules = [
		'name' => 'required',
		'id_league' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','id_league','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'tournament_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function league()
    {
        return $this->hasOne('App\Models\League', 'id', 'id_league');
    }
    

}
