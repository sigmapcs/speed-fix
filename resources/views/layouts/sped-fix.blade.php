<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Speed-fix</title>
    <!-- <link href="{{ asset('assets/common/img/favicon.png') }}" rel="icon" type="image/png"> -->
    <link href="{{ asset('assets/common/img/favicon.png') }}" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jscrollpane/style/jquery.jscrollpane.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ladda/dist/ladda-themeless.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/cleanhtmlaudioplayer/src/player.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/cleanhtmlvideoplayer/src/player.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-sweetalert/dist/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ionrangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/media/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/c3/c3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/chartist/dist/chartist.min.css') }}">
    <!-- v1.4.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/nprogress/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/jquery-steps/demo/css/jquery.steps.css') }}">
    <!-- v1.4.2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <!-- v1.7.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/dropify/dist/css/dropify.min.css') }}">

    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/source/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jscrollpane/script/jquery.jscrollpane.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/spin.js/spin.js') }}"></script>
    <script src="{{ asset('assets/vendors/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js') }}"></script>
    <script src="{{ asset('assets/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nestable/jquery.nestable.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables-responsive/js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendors/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('assets/vendors/d3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/peity/jquery.peity.min.js') }}"></script>
    <!-- v1.0.1 -->
    <script src="{{ asset('assets/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- v1.1.1 -->
    <script src="{{ asset('assets/vendors/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/hackertyper/hackertyper.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-countTo/jquery.countTo.js') }}"></script>
    <!-- v1.4.0 -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <!-- v1.4.2 -->
    <script src="{{ asset('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/src/Chart.bundle.min.js') }}"></script>
    <!-- v1.7.0 -->
    <script src="{{ asset('assets/vendors/dropify/dist/js/dropify.min.js') }}"></script>

    <!-- Clean UI Scripts -->
    <script src="{{ asset('assets/common/js/common.js') }}"></script>
    <script src="{{ asset('assets/common/js/demo.temp.js') }}"></script>
</head>
<body class="theme-default">
<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="/" class="logo">
            <img src="{{ asset('img/logo.png')}}" alt="Logo Speed Fiux UP" />
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
            <strong style="margin-left: 1rem">Categorias</strong>
            <li>
                <a class="left-menu-link" href="/categorias/clientes">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Clientes
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="/categorias/servicios">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Servicios
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="/categorias/personal">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Personal
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="/categorias/productos">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Productos
                </a>
            </li>
            <li>
                <a class="left-menu-link" href="/categorias/proveedores">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Proveedores
                </a>
            </li>
            <li class="left-menu-list-separator "><!-- --></li>
            
        </ul>
    </div>
</nav>
<nav class="top-menu">
    <div class="menu-icon-container hidden-md-up">
        
    </div>
    <div class="menu">
        <div class="menu-user-block">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="avatar" href="javascript:void(0);">
                        <img src="../assets/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-user"></i> {{ Auth::user()->name }}</a>
                    <!-- <div class="dropdown-divider"></div>
                    <div class="dropdown-header">Home</div>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> System Dashboard</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> User Boards</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i> Issue Navigator (35 New)</a> -->
                    <div class="dropdown-divider"></div>
                    <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-exit"></i> Logout</a> -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </ul>
            </div>
        </div>
        <div class="menu-user-block menu-notifications">
            <div class="dropdown dropdown-avatar">
                <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="menu-notification-icon icmn-bubbles7"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="" role="menu">
                    <div class="notification-block">
                        <div class="item">
                            <i class="notification-icon icmn-star-full"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">now</span>
                                    <a href="javascript: void(0);">Update Status: <span class="label label-danger font-weight-700">New</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-stack3"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">24 min ago</span>
                                    <a href="javascript: void(0);">Income: <span class="label label-default font-weight-700">$299.00</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-bubbles5"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">30 min ago</span>
                                    <a href="javascript: void(0);">Inbox Message</a>
                                </div>
                                <div class="descr">
                                    From: <a href="javascript: void(0);">David Bowie</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-pie-chart2"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">now</span>
                                    <a href="javascript: void(0);">Update Status: <span class="label label-primary font-weight-700">New</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-books"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">24 min ago</span>
                                    <a href="javascript: void(0);">Income: <span class="label label-warning font-weight-700">$299.00</span></a>
                                </div>
                                <div class="descr">
                                    Failed to get available update data. To ensure the proper functioning of your application, update now.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <i class="notification-icon icmn-cog util-spin-delayed-pseudo"></i>
                            <div class="inner">
                                <div class="title">
                                    <span class="pull-right">30 min ago</span>
                                    <a href="javascript: void(0);">Inbox Message</a>
                                </div>
                                <div class="descr">
                                    From: <a href="javascript: void(0);">David Bowie</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="menu-info-block">
            
            
        </div>
    </div>
</nav>

<section class="page-content">
<div class="page-content-inner">

    <!-- Dashboard -->
    <div class="dashboard-container">
        <div class="btn-container">
            @yield('btn-container')
        </div>
        <div class="row justify-content-center">
            @yield('content')
        </div>
        
       
    </div>

    <!-- End Dashboard -->

</div>


<!-- Page Scripts -->
<script>
    $(function() {

        ///////////////////////////////////////////////////////////
        // COUNTERS
        $('.counter-init').countTo({
            speed: 1500
        });

        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('#textarea'));

        ///////////////////////////////////////////////////////////
        // CUSTOM SCROLL
        if (!cleanUI.hasTouch) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

        ///////////////////////////////////////////////////////////
        // CALENDAR
        $('.example-calendar-block').fullCalendar({
            //aspectRatio: 2,
            height: 450,
            header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            viewRender: function(view, element) {
                if (!cleanUI.hasTouch) {
                    $('.fc-scroller').jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                }
            },
            defaultDate: '2016-05-12',
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01',
                    className: 'fc-event-success'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00',
                    className: 'fc-event-default'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00',
                    className: 'fc-event-success'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-14',
                    className: 'fc-event-danger'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                if (!$(this).hasClass('event-clicked')) {
                    $('.fc-event').removeClass('event-clicked');
                    $(this).addClass('event-clicked');
                }
            }
        });

        ///////////////////////////////////////////////////////////
        // CAROUSEL WIDGET
        $('.carousel-widget').carousel({
            interval: 4000
        });

        $('.carousel-widget-2').carousel({
            interval: 6000
        });

        ///////////////////////////////////////////////////////////
        // DATATABLES
        $('#example1').DataTable({
            responsive: true,
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]]
        });

        ///////////////////////////////////////////////////////////
        // CHART 1
        new Chartist.Line(".chart-line", {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: !0,
            chartPadding: {
                right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        ///////////////////////////////////////////////////////////
        // CHART 2
        var overlappingData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                },
                overlappingOptions = {
                    seriesBarDistance: 10,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                },
                overlappingResponsiveOptions = [
                    ["", {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0]
                            }
                        }
                    }]
                ];

        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);


    });
</script>
<!-- End Page Scripts -->
</section>



<div class="cwt__footer visible-footer">

        <div class="row">
            <div class="col-md-12">
                <div class="cwt__footer__company">
                    <img class="footer-logo" src="{{asset('img/securesoft.png') }}">
                    <span>
                        © 2018 <a href="http://securesoft.org/" class="cwt__footer__link" target="_blank">Securesoft</a>
                        <br>
                        Derechos Reservados
                    </span>
                </div>
            </div>
        </div>
</div>
</div>


</body>
</html>