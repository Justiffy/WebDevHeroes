<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\User;

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
}