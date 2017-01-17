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

        return view('settings')
            ->with('listOfPositionsOBJ', $listOfPositionsOBJ)
            ->with('listOfPositions',$listOfPositions);
          ;
    }

}
