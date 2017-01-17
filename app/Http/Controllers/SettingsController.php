<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Position;
use App\Salarylog;
use App\Group;



class SettingsController extends Controller
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
    public function update(){

    }


    public function changePositionName(Request $request)
    {
        $this->validate($request,[
            'id'=> 'int',
            'value'=> 'required|string|max:25',
        ]);
        $id = $request->get('pk');

        $value = $request->get('value');
        $updatedPosition=Position::find($id);


        if($updatedPosition->positionname!=$value) {
            $updatedPosition->positionname = $value;
        }

        if($updatedPosition->save())
            return Response()->json(['status'=>1]);
        else
            return Response()->json(['status'=>0]);

    }

    public function changeGroupName(Request $request)
    {
        $this->validate($request,[
            'id'=> 'int',
            'value'=> 'required|string|max:25',
        ]);
        $id = $request->get('pk');

        $value = $request->get('value');
        $updatedGroup=Group::find($id);


        if($updatedGroup->groupname!=$value) {
            $updatedGroup->groupname = $value;
        }

        if($updatedGroup->save())
            return Response()->json(['status'=>1]);
        else
            return Response()->json(['status'=>0]);

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

    public function showPositions(Request $request){

        $listOfPositions=Position::query()->get();
        $listOfPositionsOBJ=Position::query()->pluck('positionname','id')->toJson();
        $listOfGroups=Group::query()->get();
        $listOfGroupsOBJ=Group::query()->pluck('groupname','id')->toJson();

        return view('settings')
            ->with('listOfPositionsOBJ', $listOfPositionsOBJ)
            ->with('listOfPositions',$listOfPositions)
            ->with('listOfGroupsOBJ', $listOfGroupsOBJ)
            ->with('listOfGroups',$listOfGroups);

    }

    public function showGroup(Request $request){

        $listOfGroups=Group::query()->get();
        $listOfGroupsOBJ=Position::query()->pluck('groupname','id')->toJson();

        return view('settings')
            ->with('listOfGroupsOBJ', $listOfGroupsOBJ)
            ->with('listOfGroups',$listOfGroups);

    }

    public function addPosition(Request $request){
        $this->validate($request,[
            'position'=> 'string|max:50',
        ]);

        $newPosition = new Position();
        $newPosition->positionname = $request->position;
        $newPosition->save();
        return(redirect('/settings'));
    }

    public function addGroup(Request $request){
        $this->validate($request,[
            'group'=> 'string|max:50',
        ]);

        $newGroup = new Group();
        $newGroup->groupname = $request->group;
        $newGroup->save();
        return(redirect('/settings'));
    }


    public function balkDeletePositions(Request $request){
        $ids = $request->position_ids;

        Position::destroy($ids);
        return($ids);
    }

    public function balkDeleteGroups(Request $request){
        $ids = $request->group_ids;

        Group::destroy($ids);
        return($ids);
    }



}

