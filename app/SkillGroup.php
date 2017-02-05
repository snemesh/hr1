<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;

class SkillGroup extends Model
{
    //
    protected $table = 'skill_groups';

    public function skill()
    {
        return $this->hasMany('App\Skill', 'skillgroup_id', 'id' );
    }
}
