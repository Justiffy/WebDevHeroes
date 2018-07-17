<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;

class TestController extends Controller
{
    public function test()
    {
        return 'ok';
    }

    public function sql()
    {
        return User::findOrFail(1);
    }

    public function skill()
    {
        $skill = Skill::findOrFail(1);
        return $skill;
    }

    public function userSkill()
    {
        $user = User::findOrFail(1);
        dd($user->skills);
        return $user->skills;
    }
}