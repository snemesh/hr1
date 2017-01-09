<div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="x_content">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title" align="center">Salary information</h3></div>
            <div class="panel-body">
                <div class="form-horizontal form-label-left">
                    {{--{!! Form::open(['action' => 'ProfileController@saveSalary']) !!}--}}
                    {!! Form::open(['route' => 'sevesalary']) !!}
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <img class="img-responsive avatar-view" src={!! (null!==$user->avatar) ? asset($user->avatar) : asset('img/default.png') !!} alt="Avatar" title="Change the avatar">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-2" for="first-name">Registred Name <span class="required">:</span>
                                </label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('name',$user->name,['placeholder' => 'Your UserName', 'class'=>'form-control col-md-7 col-xs-12', 'required'=>'required' ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="middle-name" class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12">Salary</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('salary',$user->salary,['placeholder' => 'Enter your salary', 'class'=>'form-control', 'required'=>'required' ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12">Hourly rate</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('rate',round($user->rate,2),['placeholder' => 'Will be calculated automaticly', 'class'=>'form-control', 'disabled'=>"disabled" ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="middle-name" class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12">Comments:</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control parsley" id="message"  name="comments" rows="4">{!! $user->comments !!}</textarea>

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
                    <input name="resivedid" hidden="hidden" value={{$user->id}}>
                    {!! Form::token() . Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>