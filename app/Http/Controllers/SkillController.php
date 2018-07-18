<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Show skill list
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::query()->get();

        return view('skill')->with('skills', $skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request, [
            'skill' => 'required|unique:skills|max:255',
        ]);

        $skill = new Skill();
        $skill->fill($validateData);
        $skill->save();

        return redirect('skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Link skill to user
     */
    public function link()
    {

    }
}
