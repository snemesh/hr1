<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usergroup()
    {
        return $this->hasOne('App\Group','id','group_id');
    }
    public function userposition()
    {
        return $this->hasOne('App\Position','id','position_id');
    }

    public function salarylog(){

        return $this->hasMany('App\Salarylog','user_id','id');
    }

//    public function salarylogname(){
//
//        return $this->hasMany('App\Salarylog','init','name');
//    }


}
