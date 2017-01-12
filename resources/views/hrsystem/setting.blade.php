<div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="x_content">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title" align="center">Salary information</h3></div>
            <div class="panel-body">
                <div class="form-horizontal form-label-left">
                    {!! Form::open(['route' => 'savesettings']) !!}
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <img class="img-responsive avatar-view" src={!! (null!==$user->avatar) ? asset($user->avatar) : asset('img/default.png') !!} alt="Avatar" title="Change the avatar">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-lg-3 col-md-4 col-sm-5 col-xs-12" for="first-name">Registred Name</label>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                                    {!! Form::text('name',$user->name,['placeholder' => 'Your UserName', 'class'=>'form-control col-md-7 col-xs-12', 'required'=>'required' ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-3 col-md-4 col-sm-5 col-xs-12" for="first-name">Position</label>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                                    {!! Form::select('position',
                                    $listOfPositions,
                                    $user->position_id,
                                    ['placeholder' => 'Pick your position', 'class'=>'form-control'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-3 col-md-4 col-sm-5 col-xs-12" for="first-name">Group</label>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                                    {!! Form::select('group',
                                        $listOfGroup,
                                        $user->group_id,
                                        ['placeholder' => 'Pick your group','class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
                            <p id="text" class="pUpdate"
                               data-type="text"
                               data-pk='97'
                               data-ajax--url="/editdata"
                               data-url="editdata"
                               data-title="Comments">{!! $user->comments !!}</p>

                            {{--<a id="text" class="pUpdate" data-token="{{ csrf_token() }}" data-pk="97">200</a>--}}
                            {{--<br>--}}
                            {{--{!! link_to('/editdata', 'Test link', ['id'=>'text','class'=>'pUpdate','data-pk'=>97], $secure = null)  !!}--}}

                            {{--{!! link_to('editdata', $user->name, ['id'=>'text','class'=>'pUpdate', 'data-url'=>'/editdata', 'data-pk'=>$user->id] )  !!}--}}

                            {{--<a id="text" class="pUpdate" data-token="{!! csrf_token() !!}" data-pk="97" data-url="/editdata">User(97)</a>--}}

                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-success pull-right">Save data</button>
                        </div>
                    </div>
                    <input name="resivedid" hidden="hidden" value={{$user->id}}>
                    {!! Form::token() . Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

