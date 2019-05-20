<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'user_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute(){
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Para la relacion Usuarios Roles
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_role','user_id','role_id');
    }

    //Para checar si tiene un Rol
    public function hasAnyRole($roles){
        if (is_array($roles)){
            foreach ($roles as $role) {
                if ($this->hasRole($role)){
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if($this ->roles()->where('name',$role)->first()) {
            return true;
        }
        return false;
    }
}
