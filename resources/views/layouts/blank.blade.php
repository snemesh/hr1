<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HR System!</title>




        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">







        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

            </div>
        </div>



        <!-- jQuery -->
        <script src={!! asset('js/jquery.min.js') !!}></script>

        <!-- Bootstrap -->
        <script src={!! asset('js/bootstrap.min.js') !!}></script>
        
        <!-- Custom Theme Scripts -->
        <script src={!! asset('js/gentelella.min.js') !!}></script>



        {{--X-editable build--}}
        {{--<script src={!! asset('bootstrap/bootstrap-editable/css/bootstrap-editable.css') !!}></script>--}}
        {{--<script src={!! asset('bootstrap/bootstrap-editable/js/bootstrap-editable.min.js') !!}></script>--}}

        <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
        {{--<script src={!! asset('css/bootstrap-editable.css') !!}></script>--}}
        <script src={!! asset('js/bootstrap-editable.min.js') !!}></script>




        @stack('scripts')




    </body>
</html>
