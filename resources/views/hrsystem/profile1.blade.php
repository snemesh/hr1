<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-bars"></i> {!! $user->name !!} <small>user id #{!! $user->id !!}</small></h2>
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

            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab1" class="nav nav-tabs bar_tabs left" role="tablist">
                    <li role="presentation" class="{!! session()->pull('activetab1.tab','active') !!}"><a href="#tab_home-tb" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
                    </li>
                    <li role="presentation" class="{!! session()->pull('activetab2.tab','') !!}"><a href="#salary-tb" role="tab" id="salary-tabb" data-toggle="tab" aria-controls="salary" aria-expanded="false">Salary</a>
                    </li>
                    <li role="presentation" class="{!! session()->pull('activetab3.tab','') !!}"><a href="#settings-tb" role="tab" id="setting-tabb" data-toggle="tab" aria-controls="settings" aria-expanded="false">Setting</a>
                    </li>
                </ul>
                <div id="myTabContent2" class="tab-content">
                    <div role="tabpanel" class="{!! session()->pull('activetab1.page','tab-pane fade active in') !!}" id="tab_home-tb" aria-labelledby="home-tab">

                        @include('hrsystem.mainprofile')

                    </div>
                    <div role="tabpanel" class="{!! session()->pull('activetab2.page','') !!}" id="salary-tb" aria-labelledby="profile-tab">

                        @include('hrsystem.salary')

                    </div>
                    <div role="tabpanel" class="{!! session()->pull('activetab3.page','') !!}" id="settings-tb" aria-labelledby="profile-tab">

                        @include('hrsystem.setting')

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


