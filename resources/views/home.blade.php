@extends('layouts.app')
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<meta name="csrf-token" content="{{csrf_token()}}">

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Google Font: Source Sans Pro -->
</head>


@if (App::islocale('en'))
@include('layouts/english-sidebar')
@endif
@if (App::islocale('ar'))
@include('layouts/sidebar')
@endif



<!-- /.sidebar -->
</aside>


<div class="container">
    <div>

        @if($message=Session::get('status'))

            <script type="text/javascript">

                alert("تم الحفظ")
                $.get('{{$message}}', function (data) {

                    $("#card").html(data);

                });        </script>
    </div>
    @endif
        <div  style="margin-left:15%" class="col-md-12"  id="card">
        </div>
</div>


<script type="text/javascript">
    $('#pro').click(function () {
        $.get('/inline-pro', function (data) {

            $("#card").html(data);

        });
    });


    $('#pro-ar').click(function () {
        $.get('/inline-pro-ar', function (data) {

            $("#card").html(data);

        });
    });
    
    $('#contacts').click(function () {
        $.get('/contact/create', function (data) {

            $("#card").html(data);

        });
    });




    $.get('/all-costmers', function (data) {
        //alert("hhuu");
        $('#costmers').html(data);
    });

    $.get('/all-income', function (data) {
        //alert("hhuu");
        $('#pre').html(data);
    });


    $.get('/all-reserv', function (data) {
        //alert("hhuu");
        $('#res').html(data);
    });


    $.get('/all-soothings', function (data) {
        //alert("hhuu");
        $('#soot').html(data);
    });


    $('#else').click(function () {
        $.get('/pricing', function (data) {

            $("#card").html(data);

        });
    });

    $('#ed-pro').click(function () {
        $.get('/edation-pro', function (data) {

            $("#card").html(data);

        });

    });

    $('#ed-pro-en').click(function () {
        $.get('/edation-pro-en', function (data) {

            $("#card").html(data);

        });

    });

    $('#income').click(function () {
        $.get('/inline-income', function (data) {

            $("#card").html(data);

        });

    });
    $('#derution').click(function () {
        $.get('/derution', function (data) {

            $("#card").html(data);

        });

    });
    $('#month').click(function () {
        $.get('/month', function (data) {

            $("#card").html(data);

        });

    });


    $('#ed-income').click(function () {
        $.get('/edation-income', function (data) {

            $("#card").html(data);

        });

    });


    $("#close").click(function () {

        $('#showMe').hide();

    });

    $('#classfi_en').click(function () {
        $.get('/inline-proclasen', function (data) {

            $("#card").html(data);

        });

    });

    $('#classfi-ar').click(function () {
        $.get('/inline-proclas-ar', function (data) {

            $("#card").html(data);

        });

    });

    $('#edit-con').click(function () {
        $.get('/okx', function (data) {

            $("#card").html(data);

        });

    });



    $('#ed-calss').click(function () {
        $.get('/edation-pro-classification', function (data) {

            $("#card").html(data);

        });

    });
    $('#ed-calss-en').click(function () {
        $.get('/edation-pro-classification-en', function (data) {

            $("#card").html(data);

        });

    });


    $('#pro-st').click(function () {
        $.get('/inline-prost', function (data) {
            $("#card").html(data);
        });

    });
    $('#ed-pros').click(function () {
        $.get('/edation-prostatus', function (data) {
            $("#card").html(data);
        });

    });

    $('#comp').click(function () {
        $.get('/inline-company', function (data) {
            $("#card").html(data);
        });

    });
    $('#ed-comp').click(function () {
        $.get('/edation-comp', function (data) {
            $("#card").html(data);
        });

    });


    $('#st').click(function () {
        $.get('/inline-soothing', function (data) {
            $("#card").html(data);
        });

    });
    $('#ed-st').click(function () {
        $.get('/edation-soothing', function (data) {
            $("#card").html(data);
        });

    });

    $('#data').click(function () {
        $.get('/show-resevre', function (data) {
            $("#card").html(data);
        });

    });

</script>


<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>




