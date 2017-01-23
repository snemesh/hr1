<?php

namespace App\Http\Controllers;

use App\Skill;
use App\SkillGroup;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function showCommonSkillList(){
        $skillLists = Skill::all();
        $groupListOBJ=SkillGroup::all()->pluck('groupname','id')->toJson();
        //dump($groupListOBJ);

        return view('skills')
            ->with('skillLists',$skillLists)
            ->with('groupListOBJ',$groupListOBJ);
    }

    public function changeSkillName(Request $request){

        $this->validate($request,[
            'id'=> 'int',
            'value'=> 'required|string|max:25',
        ]);
        $id = $request->get('pk');

        $value = $request->get('value');
        $updatedSkill=Skill::find($id);

        if($updatedSkill->name!=$value) {
            $updatedSkill->name = $value;
        }

        if($updatedSkill->save())
            return Response()->json(['status'=>1]);
        else
            return Response()->json(['status'=>0]);

    }


    public function balkDeleteSkills(Request $request){
        $ids = $request->skill_ids;
        Skill::destroy($ids);
        return($ids);
    }

    public function addSkill(Request $request){

        $this->validate($request,[
            'skill'=> 'string|max:50',
        ]);

        $newSkill = new Skill();
        $newSkill->name = $request->skill;
        $newSkill->save();
        return(redirect('/skills'));
    }
}
