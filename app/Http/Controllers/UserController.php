<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $skills = [];
        if (Auth::check()) {
            /** @var User $user */
            $user = Auth::user();
            $skills = $user->skills;
        }

        return view('user.home')->with('skills', $skills);
    }

    //TODO move to UserSkillController as index
    public function skill()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('user.skill');
    }
}