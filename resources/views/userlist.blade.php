@extends('layouts.blank')

@push('stylesheets')
    <!-- iCheck -->
    <link href={!! asset('gentelella/vendors/iCheck/skins/flat/green.css') !!} rel="stylesheet" >


    <link href={!! asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!} rel="stylesheet">

    <!-- jVectorMap -->
    <link href={!! asset('gentelella/production/css/maps/jquery-jvectormap-2.0.3.css') !!} >



<!-- jVectorMap -->

    <!-- Datatables -->
    <link href={!! asset('gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') !!} rel="stylesheet">
    <link href={!! asset('gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') !!} rel="stylesheet">
    <link href={!! asset('gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') !!} rel="stylesheet">
    <link href={!! asset('gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') !!} rel="stylesheet">
    <link href={!! asset('gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') !!} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={!! asset('gentelella/build/css/custom.min.css') !!} rel="stylesheet">

    <link href={!! asset('') !!} rel="stylesheet">



@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        @include('hrsystem.userlist')
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



@push('scripts')






<!-- jQuery -->
{{--<script src={{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}></script>--}}
{{--<script src={!! asset('js/jquery.min.js') !!}></script>--}}
<!-- Bootstrap -->

{{--<script src={{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}></script>--}}
{{--<script src={!! asset('js/bootstrap.min.js') !!}></script>--}}




<!-- FastClick -->
<script src={{ asset('gentelella/vendors/fastclick/lib/fastclick.js') }}></script>

<!-- NProgress -->
<script src={{ asset('gentelella/vendors/nprogress/nprogress.js') }}></script>


<!-- Datatables -->
<script src={!! asset('gentelella/vendors/datatables.net/js/jquery.dataTables.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') !!}></script>
<script src={!! asset('gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/jszip/dist/jszip.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/pdfmake/build/pdfmake.min.js') !!}></script>
<script src={!! asset('gentelella/vendors/pdfmake/build/vfs_fonts.js') !!}></script>

{{--<script src={!! asset('gentelella/build/js/custom.min.js') !!}></script>--}}






<!-- $('#datatable-buttons').dataTable( {
"pageLength": 15
} );
 -->

<script>
    $(document).ready(function() {
//        $('#set1').click(function () {
//            $('#datatable').attr('id', 'datatable-buttons');
//            $("#datatable-buttons").load();
//        });

        $.fn.editable.defaults.params = function (params) {
            params._token = $("#_token").data("token");
            return params;
        };
        $(".salary").editable({
            //mode:'inline'
            placement:'top',
            success: function(response, newValue) {
                if(!response.success) return response.msg;
            }

        });

        $(".position").editable({
            //mode:'inline'
            placement:'top',
            //source:'array',
            //prepend:'array'

        });
        $(".group").editable({
            //mode:'inline'
            placement:'top',
            //source:'array',
            //prepend:'array'

        });


        var handleDataTableButtons = function() {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                        {
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                    ],
                    pageLength: 15, //https://datatables.net/reference/option/pageLength - здесь решение как менять параметры
                    responsive: true
                });
            }
        };

        TableManageButtons = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons();

                }
            };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();

    });




    $(document).ready(function() {

        {{--$.fn.editable.defaults.params = function (params) {--}}
            {{--params._token = $("#_token").data("token");--}}
            {{--return params;--}}
        {{--};--}}
        {{--$(".salary").editable({--}}
            {{--//type: 'text',--}}
            {{--url:'{{URL::to("/")}}/editdata'--}}
        {{--});--}}

    });

</script>

@endpush


