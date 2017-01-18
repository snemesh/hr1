<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                <th class="column-title">Skill Name</th>
                                <th class="column-title">Updated</th>


                                <th class="bulk-actions dropdown" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;" href="#">Bulk Actions  ( <span class="action-cnt "></span> )
                                    <i class="glyphicon glyphicon-trash"></i> <span class="btn-mini" type="submit" id="deleteSkills"> Delete</span></a>
                                </th>
                            </tr>
                        </thead>


                        {!! Form::open(['route' => 'addskill']) !!}
                        <tr>
                            <th>

                            </th>
                            <th colspan="1">
                                {!! Form::text('skill', '',['placeholder' => 'add new skill', 'class'=>'form-control', 'required'=>'required' ]) !!}
                            </th>
                            <th>
                                <button type="submit" class="btn-danger btn" style="">Add new</button>
                            </th>
                        </tr>
                        {!! Form::token() . Form::close() !!}
                        <tbody>
                            @include('hrsystem.Skills.skillstable')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
