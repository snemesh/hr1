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
                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4">Registed date</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    {!! Form::text('created',$user->created_at,['class'=>'form-control', 'disabled'=>"disabled" ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">Hired date</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    {!! Form::text('hired',$user->hired,['placeholder' => 'Date of thr hire', 'class'=>'form-control' ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">Fired date</label>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    {!! Form::text('hired',$user->fired,['placeholder' => 'Date of thr hire', 'class'=>'form-control' ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">State</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="enable1" value="1"> Enabled
                                    </label>
                                    <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="enable0" value="0"> Disabled
                                    </label>
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
                    <input name="resivedid" hidden="hidden" value={{$user->id}}>
                    {!! Form::token() . Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>