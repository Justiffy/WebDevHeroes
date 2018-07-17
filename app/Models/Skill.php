<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Skill
 *
 * @property string skill
 */
class Skill extends Model
{
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_skill');
    }
}