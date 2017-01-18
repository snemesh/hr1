<?php

namespace App\Http\Controllers;

use App\Group;
use App\Position;
use App\User;
use Illuminate\Http\Request;
use App\Salarylog;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;

class UserListController extends Controller
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


    public function showUsers(){
        $listOfusers = User::All();

        $listOfPositions = Position::query()->pluck('positionname','id')->toArray();
        $listOfGroup = Group::query()->pluck('groupname','id')->toArray();
        $listOfPositionsOBJ=Position::query()->pluck('positionname','id')->toJson();
        $listOfGroupsOBJ=Group::query()->pluck('groupname','id')->toJson();

        return view('userlist')
            ->with('listOfusers', $listOfusers)
            ->with('listOfPositions', $listOfPositions)
            ->with('listOfGroup', $listOfGroup)
            ->with('listOfPositionsOBJ', $listOfPositionsOBJ)
            ->with('listOfGroupsOBJ', $listOfGroupsOBJ);

    }

    public function editSalary(Request $request){
        $numbersOfDaysInMonth = 173;
        $this->validate($request,[
            'id'=> 'int',
            'value'=> 'numeric',
        ]);
        $id = $request->get('pk');
        //$id="d";
        $value = $request->get('value');
        $updatedUser=User::find($id);


        if($updatedUser->salary!=$value) {
            $updatedUser->salary = $value;
            $userRate = $value / $numbersOfDaysInMonth;  //call a rate
            $updatedUser->rate = round($userRate, 2);
            $logedSalary = new Salarylog;                // creating new reccord in the logsalary table
            $logedSalary->user_id = $id;
            $logedSalary->salary = $value;
            $initUser = Auth::user();
            $logedSalary->init = $initUser->email;
            $logedSalary->comments = "Bulk updated";
            $logedSalary->save(); //saving results
        }



        if($updatedUser->save())
            return Response()->json(['status'=>1]);
            //return Response("Cannot update this information!");

        else
            return Response()->json(['status'=>0]);
            //return Response("Perfect!");

    }
    public function editPosition(Request $request){

        $this->validate($request,[
            'id'=> 'int',
            'value'=> 'numeric',
        ]);
        $id = $request->get('pk');

        $value = $request->get('value');
        $updatedUser=User::find($id);

        if($updatedUser->position_id!=$value) {
            $updatedUser->position_id = $value;
        }

        if($updatedUser->save())
            return Response()->json(['status'=>1]);
        else
            return Response()->json(['status'=>0]);
    }


    public function editGroup(Request $request){

        $this->validate($request,[
            'id'=> 'int',
            'value'=> 'numeric',
        ]);
        $id = $request->get('pk');

        $value = $request->get('value');
        $updatedUser=User::find($id);

        if($updatedUser->group_id!=$value) {
            $updatedUser->group_id = $value;
        }
        // set class='activetab2.tab active' for activeted tab



        if($updatedUser->save())
            return Response()->json(['status'=>1]);
        else
            return Response()->json(['status'=>0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function massDelete(Request $request) {

        $ids = $request->users_ids;
        Salarylog::destroy($ids);

        if($request->isMethod('delete')) {
            $request->session()->flash('activetab1.tab', '');
            $request->session()->flash('activetab2.tab', 'active');
            $request->session()->flash('activetab3.tab', '');

            $request->session()->flash('activetab1.page', 'tab-pane fade');
            $request->session()->flash('activetab2.page', 'tab-pane fade active in');
            $request->session()->flash('activetab3.page', 'tab-pane fade');
        }

        return($ids);
    }

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
}
