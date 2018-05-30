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
    <link rel="stylesheet" href="{{ asset('login.cass')}}">
</head>
<body class="theme-default">

<section class="page-content">
<div class="page-content-inner" style="background-image: url({{ asset('assets/common/img/temp/login/4.jpg')}})">
 <!-- Login Omega Page -->
 <div class="single-page-block-header">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                    <a href="javascript: history.back();">
                        <img src="{{ asset('img/logo.png')}}" alt="Logo Speed Fiux UP" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-page-block-header-menu">
                    <ul class="list-unstyled list-inline">
                        <!-- <li><a href="javascript: history.back();">&larr; Back</a></li> -->
                        <!-- <li><a href="/login">Ingresar</a></li>
                        <li><a href="/register">Registrar</a></li> -->
                        <!-- <li><a href="javascript: void(0);">Support</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="single-page-block">
        <div class="single-page-block-inner "><!-- effect-3d-element -->
            <div class="blur-placeholder"><!-- --></div>
            <div class="single-page-block-form">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="single-page-block-footer text-center">
        <!-- <ul class="list-unstyled list-inline">
            <li><a href="javascript: void(0);">Terms of Use</a></li>
            <li class="active"><a href="javascript: void(0);">Compliance</a></li>
            <li><a href="javascript: void(0);">Confidential Information</a></li>
            <li><a href="javascript: void(0);">Support</a></li>
            <li><a href="javascript: void(0);">Contacts</a></li>
        </ul> -->
    </div>
    <!-- End Login Omega Page -->

</div>

<!-- Page Scripts -->
<script>
    $(function() {

        // Add class to body for change layout settings
        $('body').addClass('single-page single-page-inverse');

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

        // Show/Hide Password
        $('.password').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });

        // Set Background Image for Form Block
        function setImage() {
            var imgUrl = $('.page-content-inner').css('background-image');

            $('.blur-placeholder').css('background-image', imgUrl);
        };

        function changeImgPositon() {
            var width = $(window).width(),
                    height = $(window).height(),
                    left = - (width - $('.single-page-block-inner').outerWidth()) / 2,
                    top = - (height - $('.single-page-block-inner').outerHeight()) / 2;


            $('.blur-placeholder').css({
                width: width,
                height: height,
                left: left,
                top: top
            });
        };

        setImage();
        changeImgPositon();

        $(window).on('resize', function(){
            changeImgPositon();
        });

        // Mouse Move 3d Effect
        var rotation = function(e){
            var perX = (e.clientX/$(window).width())-0.5;
            var perY = (e.clientY/$(window).height())-0.5;
            TweenMax.to(".effect-3d-element", 0.4, { rotationY:15*perX, rotationX:15*perY,  ease:Linear.easeNone, transformPerspective:1000, transformOrigin:"center" })
        };

        if (!cleanUI.hasTouch) {
            $('body').mousemove(rotation);
        }

    });
</script>
<!-- End Page Scripts -->
</section>

<div class="main-backdrop"><!-- --></div>

</body>
</html>