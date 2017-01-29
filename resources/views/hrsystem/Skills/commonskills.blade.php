<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

        <div class="well" style="overflow: auto">
            <div class="col-lg-12">
                {!! Form::open(['route' => 'addskill']) !!}
                <div class="col-lg-8">
                    {!! Form::text('skill', '',['placeholder' => 'add new skill', 'class'=>'form-control', 'required'=>'required' ]) !!}
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn-danger btn" style="">Add Skill</button>
                </div>
                {!! Form::token() . Form::close() !!}
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
                <h2>List of company skills<small>You can edit them</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a></li>
                            <li><a href="#">Settings 2</a></li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="col-lg-8"><p>Press <code>Add new</code> to add a new skill</p></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action" id="tblSkills">
                        <thead>
                            <tr class="headings">
                                <th><input type="checkbox" id="check-all" class="flat"></th>
                                <th class="column-title">Skill name</th>
                                <th class="column-title">Skill group</th>
                                <th class="column-title">Updated</th>
                                <th class="bulk-actions dropdown" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;" href="#">Bulk Actions  ( <span class="action-cnt "></span> )
                                    <i class="glyphicon glyphicon-trash"></i> <span class="btn-mini" type="submit" id="deleteSkills"> Delete</span></a>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @include('hrsystem.Skills.skillstable')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>







    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

        <div class="well" style="overflow: auto">
            <div class="col-lg-12">
                {!! Form::open(['route' => 'addskillgroup']) !!}
                <div class="col-lg-8">
                    {!! Form::text('skillgroup', '',['placeholder' => 'add new group', 'class'=>'form-control', 'required'=>'required' ]) !!}
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn-danger btn" style="">Add Skill</button>
                </div>
                {!! Form::token() . Form::close() !!}
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
                <h2>Skill-GROUP list<small>You can edit them</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a></li>
                            <li><a href="#">Settings 2</a></li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="col-lg-8"><p>Press <code>Add new</code> to add a new group</p></div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action" id="tblSkills">
                        <thead>
                        <tr class="headings">
                            <th><input type="checkbox" id="check-all" class="flat"></th>
                            <th class="column-title">Group name</th>
                            <th class="column-title">Updated</th>
                            <th class="bulk-actions dropdown" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;" href="#">Bulk Actions  ( <span class="action-cnt "></span> )
                                    <i class="glyphicon glyphicon-trash"></i> <span class="btn-mini" type="submit" id="deleteSkills"> Delete</span></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @include('hrsystem.Skills.skillgrouptable')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
