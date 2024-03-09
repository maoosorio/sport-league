<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Field
 *
 * @property $id
 * @property $name
 * @property $location
 * @property $field_photo_path
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Game[] $games
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Field extends Model
{
    
    static $rules = [
		'name' => 'required',
		'location' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','location','field_photo_path','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'field_id', 'id');
    }
    

}
