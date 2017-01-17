<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="x_panel">
        <div class="x_title">
            <h2>Table design <small>Custom design</small></h2>
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
                    <div class="col-lg-8"><p>To Add new record to the databese please press <code>button " + "</code></p></div>
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
                    <tbody>
                        @include('hrsystem.positiontable')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>