<!-- page content -->
<div class="left_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="row">
                <div class="col-lg-3">
                    <h3>Skill-set <small>rating and skills</small></h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projects</h2>
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

                        <p>Simple table with project listing with progress and editing options</p>

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 20%">Skill</th>
                                <th>Team Members</th>
                                <th>Current rate</th>
                                <th>Status</th>
                                <th style="width: 20%">#Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#</td>
                                <td>
                                    <a>Pesamakini Backend UI</a>
                                    <br />
                                    <small>Created 01.01.2015</small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <img src={{ asset("img/default.png")}}  class="avatar" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src={{ asset("img/default.png")}}  class="avatar" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src={{ asset("img/default.png")}}  class="avatar" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src={{ asset("img/default.png")}}  class="avatar" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <div class="progress progress_sm">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                    <small>60% Complete</small>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">Success</button>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
