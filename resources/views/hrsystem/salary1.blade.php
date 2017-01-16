{{--<div class="form-horizontal form-label-left">--}}
    {{--{!! Form::open(['route' => 'savesalary']) !!}--}}


    {{--<div>--}}
        {{--<div class="x_panel">--}}
            {{--<div class="x_title">--}}
                {{--<h2>Update salary information</h2>--}}
                {{--<ul class="nav navbar-right panel_toolbox">--}}
                    {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>--}}
                    {{--<li><a class="close-link"><i class="fa fa-close"></i></a></li>--}}
                {{--</ul>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
            {{--<div class="x_content">--}}

                {{--<div class="row">--}}
                    {{--<div class="col-lg-4">--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<label class="pull-right">Salary:</label>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-8 pull-left">--}}
                            {{--<div class="input-group">--}}
                                {{--{!! Form::text('salary',$user->salary,['placeholder' => 'Enter your salary', 'class'=>'form-control', 'required'=>'required' ]) !!}--}}
                                {{--<span class="input-group-btn">--}}
                                {{--<button type="button" class="btn btn-primary">Rate: ${!! round($user->rate,2) !!}/hr</button>--}}
                            {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3">--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<label class="pull-right">Data:</label>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-8 pull-left">--}}
                            {{--<div class="input-group">--}}
                                {{--{!! Form::text('salary',$user->salary,['placeholder' => 'Enter your salary', 'class'=>'form-control', 'required'=>'required' ]) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-5">--}}
                        {{--<div class="col-lg-2">--}}
                            {{--<label class="pull-right">Comments:</label>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6">--}}
                            {{--<div>--}}
                                {{--<textarea class="form-control parsley" id="message"  name="comments" rows="3">{!! $salarycomment  !!}</textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}




    {{--<div class="ln_solid"></div>--}}
    {{--<div class="form-group">--}}
        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
            {{--<button type="submit" class="btn btn-primary">Cancel</button>--}}
            {{--<button type="submit" class="btn btn-success pull-right">Save data</button>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<input name="resivedid" hidden="hidden" value={{$user->id}}>--}}
    {{--{!! Form::token() . Form::close() !!}--}}
{{--</div>--}}






<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Table design <small>Custom design</small></h2>
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
        <div class="x_content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-8"><p>To Add new record to the databese please press <code>Add new record</code> and then use the table to put new value</p></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tblExport">
                    <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">Salary </th>
                        <th class="column-title">Record owner</th>
                        <th class="column-title">Date</th>
                        <th class="column-title">Comment</th>

                        <th class="bulk-actions dropdown" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;" href="#">Bulk Actions  ( <span class="action-cnt "></span> )
                                <i class="glyphicon glyphicon-trash"></i> <span class="btn-mini" type="submit" id="delete"> Delete</span></a>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @include('hrsystem.salarytable')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


