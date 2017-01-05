@extends('layouts.blank')

@push('stylesheets')
    <!-- iCheck -->
    <link href={!! asset('gentelella/vendors/iCheck/skins/flat/green.css') !!} rel="stylesheet" />
    <link href={!! asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!} rel="stylesheet"/>
    <!-- jVectorMap -->
    <link href={!! asset('gentelella/production/css/maps/jquery-jvectormap-2.0.3.css') !!} />
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        @include('hrsystem.profile')
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Intersog - HR system by <a href="https://intersog.com">Intersog</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection

@stack('scripts')