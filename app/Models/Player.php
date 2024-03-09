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
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Action[] $actions
 * @property PlayerTeam[] $playerTeams
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
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','position','number','birthdate','player_photo_path','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actions()
    {
        return $this->hasMany('App\Models\Action', 'player_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function playerTeams()
    {
        return $this->hasMany('App\Models\PlayerTeam', 'id_player', 'id');
    }
    

}
