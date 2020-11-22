</head>
<div class="fc-center">
    <div class="form-group">
        <select class="form-control select2 select2-hidden-accessible" style="width: 60%;" data-select2-id="1"
                tabindex="-1" aria-hidden="true" id="report">
            <option value="1" class="selected" data-select2-id="62">المنتجات</option>
            <option value="2" class="selected" data-select2-id="3">الشركات</option>
            <option value="3" class="selected" data-select2-id="63">الوارد</option>
            <option value="4" class="selected" data-select2-id="64">الصادر</option>
            <option value="5" class="selected" data-select2-id="65">التسكين</option>
            <option value="6" class="selected" data-select2-id="66">الاصناف</option>
            <option value="7" class="selected" data-select2-id="67">حالات المنتجات</option>
        </select>
    </div>

    <div class="fc-toolbar fc-header-toolbar"  dir="rtl" id="duration">
        <div class="fc-right">
            <div class="fc-button-group">

                <div class="row-cols-10">
                    <lable class="lable"> الي </lable>
                    <input type="date" class="form-control" id="to" required  placeholder="منذ">
                </div>
                <div class="row-cols-11">
                    <lable class="row-cols-10">من  </lable>

                    <input type="date" class="form-control" id="from" required   placeholder="الي">
                    <div class="">
                        <button type="submit" class="btn btn-primary ui-icon-search" id="createRepoertButton" value="بحث">
                            بحث
                        </button>
                    </div>
                </div>

                </div>
        </div>
    </div>
    <div id="putdatain"></div>


    <div class="form-group">
        <button id="print" class="btn btn-success" style="font-size:18px;color:#fff">
            طباعة
        </button>
    </div>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/fullcalendar/main.min.js"></script>
    <script src="plugins/fullcalendar-daygrid/main.min.js"></script>
    <script src="plugins/fullcalendar-timegrid/main.min.js"></script>
    <script src="plugins/fullcalendar-interaction/main.min.js"></script>
    <script src="plugins/fullcalendar-bootstrap/main.min.js"></script>
    <script type="text/javascript">
        function myFunction() {
            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var output = d.getFullYear() + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

            return output;
        }

        function getLastWeek() {
            var today = new Date();
            var lastWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 7);
            return lastWeek;
        }

        $('#print').click(function () {
            printDiv();

            function printDiv() {
                var divContents = document.getElementById("putdatain").innerHTML;
                var a = window.open('', '', 'height=500, width=500');
                a.document.write('<html>');
                a.document.write('<body > <h1>Div contents are <br>');
                a.document.write(divContents);
                a.document.write('</body></html>');
                a.document.close();
                a.print();
            }

        });

        $('#createRepoertButton').click(function () {
            //  $('#submitForm').serialize();
            var repotRouts = $('#report').val();
            var from = $('#from').val();
            var to = $('#to').val();
            alert(to);

            switch (repotRouts) {
                case '1':
                    $.get('/deuration-pr-report/' + from + ',' + to, function (data) {
                        // alert(data);
                        $('#putdatain').html(data);
                    });
                    break;
                case '2':
                    $.get('/deuration-co-report/' + from + ',' + to, function (data) {
                        // alert(data);
                        $('#putdatain').html(data);
                    });
                    break;
                case '3':
                    $.get('/deuration-in-report/' + from + ',' + to, function (data) {
                        $('#putdatain').html(data);
                    });
                    break;

                case '5':
                    $.get('/deuration-st-report/' + from + ',' + to, function (data) {
                        $('#putdatain').html(data);
                    });
                    // code block
                    break;
                case '6':
                    $.get('/deuration-ps-report/' + from + ',' + to, function (data) {
                        $('#putdatain').html(data);
                    });
                default:
                // code block  deuration-co-report
            }
            /*case '2':
                                        $.get('/compayReport/' + date + ',1', function (data) {
                                            $('#putdatain').html(data);
                                        });
                                        break;
                                    case '3':
                                        $.get('/prodactsReport/' + date + ",1", function (data) {
                                            $('#putdatain').html(data);
                                        });
                                        break;
                                        $.get('/prodactsReport/' + date + ',1', function (data) {
                                            $('#putdatain').html(data);
                                        });
                                        // code block
                                        break;

                                    case '6':
                                        $.get('/calssfactionReport/' + date + ',1', function (data) {
                                            $('#putdatain').html(data);
                                        });
                                        break;
                                    case '7':
                                        $.get('/statereportnReport/' + date + ',1', function (data) {
                                            $('#putdatain').html(data);
                                        });
                                        break;
                                    */

        });


    </script>
