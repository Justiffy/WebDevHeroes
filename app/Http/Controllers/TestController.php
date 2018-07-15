<?php

namespace App\Http\Controllers;

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
}