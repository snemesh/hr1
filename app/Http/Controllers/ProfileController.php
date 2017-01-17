<?php

namespace App\Http\Controllers;

use App\Group;
use App\Position;
use App\Salarylog;
use App\User;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        //$this->middleware('log', ['only' => ['fooAction', 'barAction']]);
        //$this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
        $this->request = $request;

    }


//    public function showProfile(Request $request)
//    {
//        //
//
//        $user = Auth::user();
//        $listOfPositions = Position::query()->pluck('positionname','id')->toArray();
//        $listOfGroup = Group::query()->pluck('groupname','id')->toArray();
////        var_dump($user);
////        var_dump($listOfPositions);
//
//        return view('profile',['user'=>$user, 'listOfGroup'=>$listOfGroup, 'listOfPositions'=>$listOfPositions]);
//    }


    public function showUserProfile(Request $request)
    {
        //

        $getUserId = $request->id;
        $user = User::find($getUserId);

        $listOfPositions = Position::query()->pluck('positionname','id')->toArray();
        $listOfGroup = Group::query()->pluck('groupname','id')->toArray();
//        var_dump($user);
//        var_dump($listOfPositions);

        return view('profile',['user'=>$user, 'listOfGroup'=>$listOfGroup, 'listOfPositions'=>$listOfPositions]);
    }

    public function SaveUserGroupOrPosition(Request $request){

        $this->validate($request,[
            'Position'=> 'required',
            'Group'=> 'required',
            'resivedid' => 'required',

        ]);
//        echo 'Position =' .$request->Position;
//        echo "<br>";
//        echo 'Group = '.$request->Group;
//        echo "<br>";
//        echo 'param = '.$request->resivedid;


        $curentUser=User::find($request->resivedid);
        $updatedUser = User::find($curentUser->id);
        if( null!==$request->Position) $updatedUser->position_id = $request->Position;
        if( null!==$request->Group) $updatedUser->group_id = $request->Group;

        $updatedUser->save();

        return back();


    }

    public function NewSalary(){

        return back();
    }

    public function UserStatus(){

        return back();
    }

    public function index()
    {
        //
    }

    public function getResizeImage()
    {
        return view('profile');
    }

    public function postResizeImage(Request $request)
    {

        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $photo = $request->file('photo');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail_images');
        $thumb_img = Image::make($photo->getRealPath())->resize(225, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename);

    }


    public function upload (Request $request)
    {
        $user = User::find($request->resivedid);
        $this->validate($request,[
            'resivedid' => 'int',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $photo = $request->file('photo');
        $userid = $request->userid;

        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail_images');
        $thumb_img = Image::make($photo->getRealPath())->resize(225, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $thumb_img->save($destinationPath.'/'.$imagename,80);

        $destinationPath = public_path('/normal_images');
        $photo->move($destinationPath, $imagename);
        $updatedUser = User::find($request->resivedid);;
        $updatedUser->avatar = '/thumbnail_images/'.$imagename;
        $updatedUser->save();

        $listOfPositions = Position::query()->pluck('positionname','id')->toArray();
        $listOfGroup = Group::query()->pluck('groupname','id')->toArray();



        $user = Auth::user();

        if ($user->enable==0){


            session()->set('enabled.bt1.class','btn btn-success');
            session()->set('enabled.bt2.class','btn btn-default');

            session()->set('enabled.bt1.value','0');
            session()->set('enabled.bt2.value','1');


            $bt1['class'] = session()->get('enabled.bt1.class','btn btn-success');
            $bt2['class'] = session()->get('enabled.bt2.class','btn btn-default');

            $bt1['value'] = session()->get('enabled.bt1.value','0');
            $bt2['value'] = session()->get('enabled.bt2.value','1');


        } else{

            session()->set('enabled.bt1.class','btn btn-default');
            session()->set('enabled.bt2.class','btn btn-danger');

            session()->set('enabled.bt1.value','1');
            session()->set('enabled.bt2.value','0');

            $bt1['class'] = session()->get('enabled.bt1.class','btn btn-default');
            $bt2['class'] = session()->get('enabled.bt2.class','btn btn-danger');

            $bt1['value'] = session()->get('enabled.bt1.value','1');
            $bt2['value'] = session()->get('enabled.bt2.value','0');


        }

        if($request->isMethod('post')){

//            $request->session()->flush('activetab1.tab');
//            $request->session()->flush('activetab2.tab');
//            $request->session()->flush('activetab3.tab');



            $request->session()->flash('activetab1.tab','active');
            $request->session()->flash('activetab2.tab','');
            $request->session()->flash('activetab3.tab','');

            $request->session()->flash('activetab1.page','tab-pane fade active in');
            $request->session()->flash('activetab2.page','tab-pane fade');
            $request->session()->flash('activetab3.page','tab-pane fade');
        }


        return back();
//        return view('profile1')
//            ->with('user',$updatedUser)
//            ->with('$avatar','avatar')
//            ->with('listOfPositions',$listOfPositions)
//            ->with('listOfGroup',$listOfGroup)
//            ->with('bt1' , $bt1)
//            ->with('bt2' , $bt2);
    }

    public function showProfile (Request $request)
    {

        $id = $request->id;
        ($id==null) ? $user = Auth::user(): $user = User::find($request->id);



        if ($user->enable==0){

            session()->set('enabled.bt1.class','btn btn-success');
            session()->set('enabled.bt2.class','btn btn-default');

            session()->set('enabled.bt1.value','0');
            session()->set('enabled.bt2.value','1');


            $bt1['class'] = session()->get('enabled.bt1.class','btn btn-success');
            $bt2['class'] = session()->get('enabled.bt2.class','btn btn-default');

            $bt1['value'] = session()->get('enabled.bt1.value','0');
            $bt2['value'] = session()->get('enabled.bt2.value','1');


        } else{

            session()->set('enabled.bt1.class','btn btn-default');
            session()->set('enabled.bt2.class','btn btn-danger');

            session()->set('enabled.bt1.value','1');
            session()->set('enabled.bt2.value','0');

            $bt1['class'] = session()->get('enabled.bt1.class','btn btn-default');
            $bt2['class'] = session()->get('enabled.bt2.class','btn btn-danger');

            $bt1['value'] = session()->get('enabled.bt1.value','1');
            $bt2['value'] = session()->get('enabled.bt2.value','0');


        }

        $listOfPositions = Position::query()->pluck('positionname','id')->toArray();
        $listOfGroup = Group::query()->pluck('groupname','id')->toArray();
        $listOfPositionsOBJ=Position::query()->pluck('positionname','id')->toJson();
        $listOfGroupsOBJ=Group::query()->pluck('groupname','id')->toJson();



        //$salarycomment=User::find($user->id)->salarylog()->where('salary','=', $user->salary);
        //$salarycomments=User::find(97);//->salarylog();
//        $myuser=User::find(97);
//        $logcomment = $myuser->salarylog;
//        $logeduser = Salarylog::find(1);
//        $res = $logeduser->user->salary;


        $curUser=User::find($user->id);
        $salarycomment = $curUser->salarylog->where('salary', $user->salary)->pluck('comments')->last();

        //dump($salarycomment);
        //$userPosition = $curUser->userposition->positionname;
        //$userGroup = $curUser->usergroup->groupname;
        //dump($userPosition);

        $mySalaryLogs=User::find($user->id)->salarylog;
        $mySalaryLogs=DB::table('salarylog')->where('user_id',$user->id)->orderBy('updated_at', 'desc')->get();

        return view('profile1')->with('bt1' , $bt1)
            ->with('bt2', $bt2)
            ->with('user', $user)
            ->with('listOfPositions', $listOfPositions)
            ->with('listOfGroup' , $listOfGroup)
            ->with('salarycomment',$salarycomment)
            ->with('mySalaryLogs', $mySalaryLogs)
            ->with('listOfPositionsOBJ',$listOfPositionsOBJ)
            ->with('listOfGroupsOBJ',$listOfGroupsOBJ);
    }



    public function saveProfile (Request $request)
    {


            $this->validate($request,[
                'resivedid'=> 'int',
                'name'=> 'string|max:50',
                'email'=> 'email',
                'created'=> 'date',
                'hired'=> 'date',
                'fired'=> 'date',
                'enable0'=> 'boolean',
                'enable1'=> 'boolean',
                'comments'=> 'string|max:100',

            ]);

        if($request->has('resivedid')) {
            $user = User::find($request->resivedid);
        } else{
            $user = Auth::user();
        }

        $updatedUser = User::find($user->id); //находим запись

        if($updatedUser->comments!=$request->comments) $updatedUser->comments = $request->comments;
        if($updatedUser->email!=$request->email) $updatedUser->email = $request->email;
        if($updatedUser->name!=$request->name) $updatedUser->name = $request->name;
        if($updatedUser->fired!=$request->fired) $updatedUser->fired = $request->fired;
        if($updatedUser->hired!=$request->hired) $updatedUser->hired = $request->hired;


        if($request->enable0=='1') $updatedUser->enable = 0;
        if($request->enable1=='1') $updatedUser->enable = 1;


        $updatedUser->save();                            //сохраняем


        if ($user->enable==0) {

            $bt1['class'] = $request->session()->get('enabled.bt1.class', 'btn btn-success');
            $bt2['class'] = $request->session()->get('enabled.bt2.class', 'btn btn-default');

            $bt1['value'] = $request->session()->get('enabled.bt1.value', '0');
            $bt2['value'] = $request->session()->get('enabled.bt2.value', '1');
        }
        if ($user->enable==1){

            $bt1['class'] = $request->session()->get('enabled.bt1.class','btn btn-default');
            $bt2['class'] = $request->session()->get('enabled.bt2.class','btn btn-danger');

            $bt1['value'] = $request->session()->get('enabled.bt1.value','1');
            $bt2['value'] = $request->session()->get('enabled.bt2.value','0');


        }


        if($request->isMethod('post')){
            $request->session()->flash('activetab1.tab','active');
            $request->session()->flash('activetab2.tab','');
            $request->session()->flash('activetab3.tab','');

            $request->session()->flash('activetab1.page','tab-pane fade active in');
            $request->session()->flash('activetab2.page','tab-pane fade');
            $request->session()->flash('activetab3.page','tab-pane fade');
        }




        $listOfPositions = Position::query()->pluck('positionname','id')->toArray();
        $listOfGroup = Group::query()->pluck('groupname','id')->toArray();


        return back()->with('bt1', $bt1)
                     ->with('bt2' , $bt2)
                     ->with('user' , $user)
                     ->with('listOfPositions', $listOfPositions)
                     ->with('listOfGroup' , $listOfGroup);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveuserddata(Request $request){
        $numbersOfDaysInMonth = 173;
        if($request->isMethod('post')){
            $this->validate($request,[
                'resivedid'=> '',
                'name'=> '',
                'email'=> '',
                'created'=> '',
                'hired'=> '',
                'fired'=> '',
                'enable0'=> '',
                'enable1'=> '',
                'comments'=> 'required|string|max:100',


                //TODO сделать валидацию коментария
            ]);
        }

//        echo 'email = '. $request->email;
//        echo "<br>";
//        echo 'name = '.$request->name;
//        echo "<br>";
//        echo 'salary = '.$request->salary;
//        echo "<br>";
//        echo 'comments = '.$request->comments;
//        echo "<br>";
//        echo 'resivedid = '.$request->resivedid;
//        echo "<br>";

//        TODO Сделать валидацию введеных значений
//        TODO Возможно стоит вынести в отдельную функцию
//        echo $request->resivedid;

        $userId = User::find($request->resivedid);


        $updatedUser = User::find($userId->id); //находим запись
        //$oldValueofSalary = $updatedUser->salary;        //сохраняем старое значение salary

        //присваеваем новое значение salary из формы
        if($updatedUser->salary!=$request->salary) {
            $updatedUser->salary = $request->salary;
            $userRate =  $request->salary/$numbersOfDaysInMonth;  //call a rate
            $updatedUser->rate = round($userRate,2);
            $logedSalary = new Salarylog;                // creating new reccord in the logsalary table
            $logedSalary->user_id = $userId->id;
            $logedSalary->salary = $request->salary;
            $initUser = Auth::user();
            $logedSalary->init = $initUser->email;
            $logedSalary->comments = $request->comments;
            $logedSalary->save(); //saving results

//            echo '$updatedUser->salary ='.$updatedUser->salary."<br>";

        }
        if($updatedUser->comments!=$request->comments) $updatedUser->comments = $request->comments;
        if($updatedUser->email!=$request->email) $updatedUser->email = $request->email;
        if($updatedUser->name!=$request->name) $updatedUser->name = $request->name;
        if($updatedUser->fired!=$request->fired) $updatedUser->fired = $request->fired;


        $updatedUser->save();                            //сохраняем

        //создаем новую запись за значеним Salary в таблице Salarylog


        return back();


    }


    public function saveSalary(Request $request){
        $numbersOfDaysInMonth = 173;
        if($request->isMethod('post')){
            $this->validate($request,[
                'resivedid'=> 'int',
                'name'=> 'string|max:50',
                'email'=> 'string|max:50',
                'salary'=> 'numeric',
                'comments'=> 'required_if:salary,numeric|string|max:100',
                'updated_at'=>'date',
            ]);
        }

//        echo "name = ". $request->name."<br>";
//        echo "salary = ". $request->salary."<br>";
//        echo "comments = ". $request->comments."<br>";

        $updatedUser = User::find($request->resivedid); //находим запись

        //присваеваем новое значение salary из формы
        if($updatedUser->salary!=$request->salary) {
            $updatedUser->salary = $request->salary;
            $userRate =  $request->salary/$numbersOfDaysInMonth;  //call a rate
            $updatedUser->rate = round($userRate,2);
            $logedSalary = new Salarylog;                // creating new reccord in the logsalary table
            $logedSalary->user_id = $request->resivedid;
            $logedSalary->salary = $request->salary;
            $initUser = Auth::user();
            $logedSalary->init = $initUser->email;
            $logedSalary->comments = $request->comments;
            if($request->updated_at!=null){
                $logedSalary->updated_at = $request->updated_at;
            }
            $logedSalary->save(); //saving results

        }

        if($updatedUser->name!=$request->name  and $request->name!=null) $updatedUser->name = $request->name;
        $updatedUser->save();                            //сохраняем

        if($request->isMethod('post')) {
            $request->session()->flash('activetab1.tab', '');
            $request->session()->flash('activetab2.tab', 'active');
            $request->session()->flash('activetab3.tab', '');

            $request->session()->flash('activetab1.page', 'tab-pane fade');
            $request->session()->flash('activetab2.page', 'tab-pane fade active in');
            $request->session()->flash('activetab3.page', 'tab-pane fade');
        }

        return back();
    }

    public function saveSettings(Request $request){

        if($request->isMethod('post')){
            $this->validate($request,[
                'resivedid'=> 'int',
                'position'=> 'numeric',
                'group'=> 'numeric',
            ]);
        }

        $updatedUser = User::find($request->resivedid); //находим запись
        //dump($updatedUser->position_id);
        //dump($request->position);



//        //присваеваем новое значение salary из формы
        if($updatedUser->position_id!=$request->position) {
            $updatedUser->position_id = $request->position;
        }
        if($updatedUser->group_id!=$request->group) {
            $updatedUser->group_id = $request->group;
        }

        $updatedUser->save();                            //сохраняем

        if($request->isMethod('post')) {
            $request->session()->flash('activetab1.tab', '');
            $request->session()->flash('activetab2.tab', '');
            $request->session()->flash('activetab3.tab', 'active');

            $request->session()->flash('activetab1.page', 'tab-pane fade');
            $request->session()->flash('activetab2.page', 'tab-pane fade');
            $request->session()->flash('activetab3.page', 'tab-pane fade active in');
        }

        return back();
    }

    public function updateField(Request $request)
    {
        if($request->ajax()) {
            $this->school->find($request->get('pk'))->update([$request->get('name') => $request->get('value')]);
        }

        return response()->json(['success'=>true]);
    }


    public function inlineEdit(Request $request){



        $id = $request->get('pk');
        $value = $request->get('value');
        $user=User::find($id);
        $user->comments = $value;

        if($user->save())
            return Response()->json(['status'=>1]);
        else
            return Response()->json(['status'=>0]);


        //        return response()->json([
//            'status' => '1'
//        ]);

//        $data = $request->all();
//        dump($data);
    }


//return response()->json([
//'name' => 'Abigail',
//'state' => 'CA'
//]);
//If you would like to create a JSONP response, you may use the json method in combination with the withCallback method:
//
//return response()
//            ->json(['name' => 'Abigail', 'state' => 'CA'])
//            ->withCallback($request->input('callback'));
//

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



}
