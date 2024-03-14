<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Referee
 *
 * @property $id
 * @property $name
 * @property $referee_photo_path
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Game[] $games
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Referee extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','referee_photo_path','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'referee_id', 'id');
    }
    

}
