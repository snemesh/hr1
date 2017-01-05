

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{!! $user->name !!}<small>#{!! $user->id !!}</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div align="center" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <br>
                    <img class="img-responsive avatar-view" src={!! (null!==$user->avatar) ? asset($user->avatar) : asset('img/default.png') !!} alt="Avatar" title="Change the avatar">


                    <div class="row">
                        <br>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {!! Form::open(['route' => ['uploading','userid'=>$user->id],'files' => true]) !!}

                            <p><input class='form-control' type="file" name="photo" multiple accept="image/*,image/jpeg"></p>
                            <button type="submit" class="btn btn-primary col-md-12 col-sm-12 col-xs-12">Upload Image</button>
                            <input name="resivedid" hidden="hidden" value={{$user->id}}>
                            {!! Form::token() . Form::close() !!}
                        </div>
                    </div>
                    <div align="left">
                        <h3>{!! $user->name !!}</h3>
                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i> Ukraine, Odess, UA</li>
                            <li><i class="fa fa-sitemap user-profile-icon"></i>{!! null==$user->group_id ? ' The user group haven\'t defined yet': ' Your group: '.$listOfGroup[$user->group_id] !!}</li>
                            <li><i class="fa fa-briefcase user-profile-icon"></i>{!! null==$user->position_id ? ' The Position was not defined':  ' Your position: '.$listOfPositions[$user->position_id] !!}</li>
                            <li class="m-top-xs">
                                <i class="fa fa-external-link user-profile-icon"></i>
                                <a href="http://www.intersog.com/" target="_blank">www.intersog.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div align="center" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                    <div class="x_content">
                        <br>
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title" align="center">User Profile</h3></div>
                            <div class="panel-body">
                                <div class="form-horizontal form-label-left">
                                {!! Form::open(['route' => 'saveuserdata']) !!}
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4" for="first-name">Registred Name <span class="required">:</span>
                                                </label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    {!! Form::text('name',$user->name,['placeholder' => 'Your UserName', 'class'=>'form-control col-md-7 col-xs-12', 'required'=>'required' ]) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"  for="last-name">User email <span class="required">:</span>
                                                </label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <input type="text" required="required" placeholder="Enter your email" id="last-name" name="email" class="form-control col-md-7 col-xs-12" value={{$user->email}}>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">Salary</label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    {!! Form::text('salary',$user->salary,['placeholder' => 'Enter your salary', 'class'=>'form-control', 'required'=>'required' ]) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">Hourly rate</label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    {!! Form::text('rate',round($user->rate,2),['placeholder' => 'Will be calculated automaticly', 'class'=>'form-control', 'disabled'=>"disabled" ]) !!}
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4">Registed date</label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    {!! Form::text('created',$user->created_at,['class'=>'form-control', 'disabled'=>"disabled" ]) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">Hired date</label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    {!! Form::text('hired',$user->hired,['placeholder' => 'Date of thr hire', 'class'=>'form-control', 'disabled'=>"disabled" ]) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">Comments</label>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <textarea id="message" required="required" class="form-control parsley" name="comments" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" data-parsley-id="40">{!! $user->comments !!}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            {{--<button type="submit" class="btn btn-primary">Cancel</button>--}}
                                            <button type="submit" class="btn btn-success pull-right">Save data</button>
                                        </div>
                                    </div>
                                </div>
                                <input name="resivedid" hidden="hidden" value={{$user->id}}>
                                {!! Form::token() . Form::close() !!}
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title" align="center">User Group and Position</h3></div>
                            <div class="panel-body">
                                {!! Form::open(['route' => 'saveusergrouporid']) !!}
                                <input name="resivedid" hidden="hidden" value={{$user->id}}>
                                <div class="row">    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        {!! Form::select('Position',
                                        $listOfPositions,
                                        $user->position_id,
                                        ['placeholder' => 'Pick your position', 'class'=>'form-control'])!!}
                                        <span class="help-block">Your current position</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        {!! Form::select('Group',
                                            $listOfGroup,
                                            $user->group_id,
                                            ['placeholder' => 'Pick your group','class'=>'form-control']) !!}
                                        <span class="help-block">Your current Group</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pull-right">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>

                                {!! Form::token() . Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>