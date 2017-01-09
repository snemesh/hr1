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
        @include('hrsystem.profile1')
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
<!-- bootstrap-progressbar -->
<script src={{ asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}></script>
<!-- iCheck -->
<script src={{ asset('gentelella/vendors/iCheck/icheck.min.js') }}></script>
<!-- PNotify -->
<script src={{ asset('gentelella/vendors/pnotify/dist/pnotify.js') }}></script>
<script src={{ asset('gentelella/vendors/pnotify/dist/pnotify.buttons.js') }}></script>
<script src={{ asset('gentelella/vendors/pnotify/dist/pnotify.nonblock.js') }}></script>
<!-- Custom Theme Scripts -->
{{--<script src={{ asset('gentelella/build/js/custom.min.js') }}></script>--}}

{{--JS Plagin for work with session--}}
{{--<script src={{ asset('js/jquery.session.js') }}></script>--}}




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
</script>
<!-- /Custom Notification -->


{{--<script>--}}

    {{--$(document).ready(function() {--}}
        {{--$('#home-tabb').click(function () {--}}

{{--//            sessionStorage.setItem('activeTab1', 'active');--}}
{{--//            sessionStorage.setItem('activeTab2', '');--}}
{{--//            sessionStorage.setItem('activeTab3', '');--}}
{{--//            $('#home-tabb').attr('class', 'active');--}}
{{--//            $('#salary-tabb').attr('class', '');--}}
{{--//            $('#setting-tabb').attr('class', '');--}}




{{--//        $('#datatable').attr('id', 'datatable-buttons');--}}
{{--//        $("#datatable-buttons").load();--}}

        {{--});--}}

        {{--$('#salary-tabb').click(function () {--}}


{{--//            sessionStorage.setItem('activeTab1', '');--}}
{{--//            sessionStorage.setItem('activeTab2', 'active');--}}
{{--//            sessionStorage.setItem('activeTab3', '');--}}
{{--//            $('#home-tabb').attr('class', '');--}}
{{--//            $('#salary-tabb').attr('class', 'active');--}}
{{--//            $('#setting-tabb').attr('class', '');--}}


            {{--//alert("Кликнули по табу profile-tabb");--}}

{{--//        $('#datatable').attr('id', 'datatable-buttons');--}}
{{--//        $("#datatable-buttons").load();--}}

        {{--});--}}

        {{--$('#setting-tabb').click(function () {--}}

{{--//            sessionStorage.setItem('activeTab1', '');--}}
{{--//            sessionStorage.setItem('activeTab2', '');--}}
{{--//            sessionStorage.setItem('activeTab3', 'active');--}}
{{--//            $('#home-tabb').attr('class', '');--}}
{{--//            $('#salary-tabb').attr('class', '');--}}
{{--//            $('#setting-tabb').attr('class', 'active');--}}

{{--//            alert("Кликнули по табу settings");--}}
{{--//        $('#datatable').attr('id', 'datatable-buttons');--}}
{{--//        $("#datatable-buttons").load();--}}

        {{--});--}}


    {{--});--}}

{{--</script>--}}


@endpush




{{--$.session.set('some key', 'a value');--}}

{{--$.session.get('some key');--}}
{{--> "a value"--}}

{{--$.session.clear();--}}

{{--$.session.get('some key');--}}
{{--> undefined--}}

{{--$.session.set('some key', 'a value').get('some key');--}}
{{--> "a value"--}}

{{--$.session.remove('some key');--}}

{{--$.session.get('some key');--}}