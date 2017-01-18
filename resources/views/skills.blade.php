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
        <div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
        @include('hrsystem.Skills.commonskills')
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


<!-- bootstrap-progressbar -->
<script src={{ asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}></script>
<!-- iCheck -->
<script src={{ asset('gentelella/vendors/iCheck/icheck.min.js') }}></script>
<!-- PNotify -->
<script src={{ asset('gentelella/vendors/pnotify/dist/pnotify.js') }}></script>
<script src={{ asset('gentelella/vendors/pnotify/dist/pnotify.buttons.js') }}></script>
<script src={{ asset('gentelella/vendors/pnotify/dist/pnotify.nonblock.js') }}></script>

<!-- bootstrap-daterangepicker -->
<script src={{ asset('gentelella/production/js/moment/moment.min.js') }}></script>
<script src={{ asset('gentelella/production/js/datepicker/daterangepicker.js') }}></script>







<script>
    $(document).ready(function() {

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


</script>

{{--=========================================================================================================--}}


{{--Scripts for the tables--}}


{{--=========================================================================================================--}}

<!-- PNotify -->
<script>

    $(document).ready(function() {

        new PNotify({
            title: "PNotify",
            type: "info",
            text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
            nonblock: {
                nonblock: true
            },
            addclass: 'dark',
            styling: 'bootstrap3',
            hide: false,
            before_close: function(PNotify) {
                PNotify.update({
                    title: PNotify.options.title + " - Enjoy your Stay",
                    before_close: null
                });

                PNotify.queueRemove();

                return false;
            }
        });

    });
</script>
<!-- /PNotify -->

<!-- Custom Notification -->
<script>
    $(document).ready(function() {

        $.fn.editable.defaults.params = function (params) {
            params._token = $("#_token").data("token");
            return params;
        };

        $(document).on('click', '#addrecord', function(e) {
            $('#newline').removeAttr('hidden');
        });



        $("#salary").editable({
            //mode:'inline'
            placement:'top',
            success: function(response, newValue) {
                //location.reload();
                if(!response.success) return response.msg;
            }

        });

        var cnt = 10;

        TabbedNotification = function(options) {
            var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
                "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

            if (!document.getElementById('custom_notifications')) {
                alert('doesnt exists');
            } else {
                $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
                $('#custom_notifications #notif-group').append(message);
                cnt++;
                CustomTabs(options);
            }
        };

        CustomTabs = function(options) {
            $('.tabbed_notifications > div').hide();
            $('.tabbed_notifications > div:first-of-type').show();
            $('#custom_notifications').removeClass('dsp_none');
            $('.notifications a').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                    others = $this.closest('li').siblings().children('a'),
                    target = $this.attr('href');
                others.removeClass('active');
                $this.addClass('active');
                $(tabbed_notifications).children('div').hide();
                $(target).show();
            });
        };

        CustomTabs();
        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
            idname = $(this).parent().parent().attr("id");
            tabid = idname.substr(-2);
            $('#ntf' + tabid).remove();
            $('#ntlink' + tabid).parent().remove();
            $('.notifications a').first().addClass('active');
            $('#notif-group div').first().css('display', 'block');
        });
    });



    $(document).ready(function() {
        $.fn.editable.defaults.params = function (params) {
            params._token = $("#_token").data("token");
            return params;
        };
        $("#text").editable({
            url:'{{URL::to("/")}}/editdata'
        });

        $(".position").editable({
            placement:'right'
        });

        $("#position").editable({
            placement:'right'
        });


        $(".group").editable({
            placement:'right'

        });

    });


//    $(document).on('click', '#delete', function () { //prepare list for bulk delete
//        var myId = [];
//        var MyRows = $('table#tblExport').find('.checked'); //searching elements with class=checked
//        for (var i = 0; i < MyRows.length; i++){
//            myId.push($(MyRows[i]).find('.record').attr('id')); //add 'id' of the found element to the array myId
//        }
//        console.log(myId);
//        var token = $("#_token").data("token");
//
//        $.ajax({
//            url: '/mass_delete',
//            type: 'DELETE',
//            data: {
//                "users_ids": myId,
//                "_method": 'DELETE',
//                "_token": token
//            }
//        })
//            .done(function( response ) {
//                console.log("Success!!!");
//            })
//            .fail(function() {
//                console.log("Error!!!");
//            })
//        location.reload();
//    });





    $(document).on('click', '#deleteSkills', function () { //prepare list for bulk delete
        var SkillID = [];
        var MyRows = $('table#tblSkills').find('.checked'); //searching elements with class=checked
        for (var i = 0; i < MyRows.length; i++){
            SkillID.push($(MyRows[i]).find('.record').attr('id')); //add 'id' of the found element to the array myId
            alert(SkillID);
        }


        var GroupId = [];
        var MyRows = $('table#tblGroup .checked'); //searching elements with class=checked
        for (var i = 0; i < MyRows.length; i++){
            GroupId.push($(MyRows[i]).find('.record').attr('id')); //add 'id' of the found element to the array myId
        }


        console.log(SkillID);
        var token = $("#_token").data("token");

        $.ajax({
            url: '/bulk_delete_skills',
            type: 'DELETE',
            data: {
                "skill_ids": SkillID,
                "_method": 'DELETE',
                "_token": token
            }
        })
            .done(function( response ) {
                console.log("Success Deletting!!!");
                location.reload();
            })
            .fail(function() {
                console.log("Error with DELETE!!!");
            });

    });



</script>




<script>
    $(document).ready(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();

        $('#single_cal1').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_1"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_2"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4",
            startDate: start,
            endDate: end,
            format: 'YYYY-MM-DD'

        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>


@endpush


