<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
        <div class="x_title">
            <h2>List of company Positions<small>Custom design</small></h2>
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
                    <div class="col-lg-8"><p>Press <code>button "+"</code> to add new record</p></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tblPosition">
                    <thead>
                        <tr class="headings">
                            <th><input type="checkbox" id="check-all" class="flat"></th>
                            <th class="column-title">Position</th>
                            <th class="column-title">Updated</th>

                            {{--functions for preraring BULK ACTIONS please find in file  views/profile1.b;ade.php
                                $(document).on('click', '#delete', function ()  It used AJAX mothod to delete records frome database   --}}
                            <th class="bulk-actions dropdown" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;" href="#">Bulk Actions  ( <span class="action-cnt "></span> )
                                <i class="glyphicon glyphicon-trash"></i> <span class="btn-mini" type="submit" id="delete"> Delete</span></a>
                            </th>
                        </tr>
                    </thead>


                    {!! Form::open(['route' => 'addposition']) !!}
                    <tr>
                        <th>

                        </th>
                        <th colspan="1">
                            {!! Form::text('position', '',['placeholder' => 'new position', 'class'=>'form-control', 'required'=>'required' ]) !!}
                        </th>
                        <th>
                            <button type="submit" class="btn-danger btn" style="">Add new</button>
                        </th>
                    </tr>
                    {!! Form::token() . Form::close() !!}
                    <tbody>
                        @include('hrsystem.positiontable')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>