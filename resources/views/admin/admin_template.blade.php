<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta name="csrf-token" content="{{csrf_token()}}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/public/css/flaticon.css">
    <link rel="stylesheet" href=css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</head>

<script type="text/javascript">
    $(document).ready(function () {

        /*  When user click add user button */
              alert("hi");
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        var car = '';
        $.ajax({
            type: "get",
            url: "/all-cars",
            dataType: 'json',
            success: function (data) {
                for (var i = 0; i < data.length; i++) {
                  //  alert(data[i].car_photo);
                    car += '<img class="img rounded d-flex align-items-end"  src="'+data[i].car_photo+'"/> ' +
                        '<div class="text">' +
                        '<h2 class="mb-0"><a href="#">'+data[i].car_photo+'</a></h2>' +
                        '<div class="d-flex mb-3">' +
                        '<span class="cat">Cheverolet</span>' +
                        '<p class="price ml-auto">'+data[i].car_photo+' <span>/day</span></p></div>' +
                        '<p class="d-flex mb-0 d-block">' +
                        '<a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>' +
                        ' </div>' +
                        '</div>';
                }
                alert(car);
               // $("#pushhere").html(car);
            },
            error: function (data) {
                alert(data);


            }
        });
    });

</script>
