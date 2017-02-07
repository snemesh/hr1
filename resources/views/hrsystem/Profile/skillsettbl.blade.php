<!-- page content -->

        <div class="page-title">
            {{--<div class="row">--}}
                <div class="col-lg-10 col-md-10 col-sm-10">
                    {{--<h3>Skill-set <small>rating and skills</small></h3>--}}


                        <div class="col-lg-10">
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
            {{--</div>--}}
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Any changes will be logged to the database</h2>
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

                        {{--<p>Simple table with project listing with progress and editing options</p>--}}

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 20%">Skill</th>
                                <th>Skill group</th>
                                <th>Current score</th>
                                <th>Will be checked by</th>
                                <th style="width: 20%">Comments</th>
                            </tr>
                            </thead>
                            <tbody>

                                @include('hrsystem.profile.skilsettablebody')

                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
<!-- /page content -->
{{--End template block--}}
