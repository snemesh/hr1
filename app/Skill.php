<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SkillGroup;

class Skill extends Model
{
    //
    public function skillgroup(){

        return $this->hasMany('App\SkillGroup','id','skillgrouop_id');
    }

}
