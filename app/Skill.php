<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SkillGroup;

class Skill extends Model
{
    //
    protected $table = 'skills';

    public function skillgroup(){

        return $this->hasOne('App\SkillGroup', 'id', 'skillgroup_id');
    }

}
