<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 *
 * @property $id
 * @property $name
 * @property $phone
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $admin_photo_path
 * @property $status
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property League[] $leagues
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Admin extends Model
{
    
    static $rules = [
		'name' => 'required',
		'phone' => 'required',
		'email' => 'required',
    'password' => 'required',
    'admin_photo_path' => ['required', 'image', 'max:2048'],
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','phone','email','admin_photo_path','password','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leagues()
    {
        return $this->hasMany('App\Models\League', 'id_admin', 'id');
    }
    

}
