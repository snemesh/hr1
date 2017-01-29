<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\User;

class UserSkillSet extends Model
{
    //
    protected $table = 'user_skill_sets';

    public function skill()
    {
        return $this->hasOne('App\Skill','id','skill_id');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
