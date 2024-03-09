<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Action
 *
 * @property $id
 * @property $game_id
 * @property $team_id
 * @property $player_id
 * @property $action
 * @property $value
 * @property $time
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Game $game
 * @property Player $player
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Action extends Model
{
    
    static $rules = [
		'game_id' => 'required',
		'team_id' => 'required',
		'player_id' => 'required',
		'action' => 'required',
		'value' => 'required',
		'time' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['game_id','team_id','player_id','action','value','time','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function game()
    {
        return $this->hasOne('App\Models\Game', 'id', 'game_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function player()
    {
        return $this->hasOne('App\Models\Player', 'id', 'player_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'team_id');
    }
    

}
