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
    <div class="fc-right" style="margin-left: 80%">
        <div class="fc-button-group">
            <button type="button" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active"
                    value=""
                    id="month">الشهر
            </button>
            <button type="button" class="fc-timeGridWeek-button fc-button fc-button-primary" id="week">الاسبوع
            </button>
            <button type="button" class="fc-timeGridDay-button fc-button fc-button-primary" id="today">اليوم
            </button>
            <button type="button" class="fc-timeGridDay-button fc-button fc-button-primary" id="year">السنة
            </button>

        </div>
    </div>
</div>
<div id="putdatain"></div>


    <div class="form-group"><button  id="print" class="btn btn-success" style="font-size:18px;color:#fff">
       طباعة
        </button>
    </div>


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

    $('#today').click(function () {

        date = myFunction();
        var repotRouts = $('#report').val();
        switch (repotRouts) {
            case '1':
                $.get('/prodactsReport/' + date + ",1", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '2':
                $.get('/compayReport/' + date + ',1', function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '3':
                $.get('/prodactsReport/' + date + ",1", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '4':
                $.get('/outcomeReport/' + date + ",1", function (data) {
                    $('#putdatain').html(data);
                });
                break;
                $.get('/prodactsReport/' + date + ',1', function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case '5':
                $.get('/soothingsReport/' + date + ',1', function (data) {
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
            default:
        }


    });


    $('#week').click(function () {
        $('#print').show();
        date = myFunction();
        var repotRouts = $('#report').val();
        switch (repotRouts) {
            case '1':
                $.get('/prodactsReport/' + date + ",2", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '2':
                $.get('/compayReport/' + date + ",2", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '3':
                $.get('/incomeReport/' + date + ",2", function (data) {
                    $('#putdatain').html(data);
                });
                break;
                $.get('/prodactsReport/' + date + ",2", function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case'5':
                $.get('/soothingsReport/' + date + ",2", function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case '6':
                $.get('/calssfactionReport/' + date + ',2', function (data) {
                    $('#putdatain').html(data);
                });
                break;


            case '7':
                $.get('/statereportnReport/' + date + ',2', function (data) {
                    $('#putdatain').html(data);
                });
                break;

            default:
                $("#from").attr('action', '/soothing-print/'+$('#putdatain').html());
        }

    });


    $('#month').click(function () {

        date = myFunction();
        var repotRouts = $('#report').val();
        switch (repotRouts) {
            case '1':
                $.get('/prodactsReport/' + date + ",3", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '2':
                $.get('/compayReport/' + date + ",3", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '3':
                $.get('/incomeReport/' + date + ",3", function (data) {
                    $('#putdatain').html(data);
                });
                break;
                $.get('/prodactsReport/' + date + ",3", function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case'5':
                $.get('/soothingsReport/' + date + ",3", function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case '6':
                $.get('/calssfactionReport/' + date + ',3', function (data) {
                    $('#putdatain').html(data);
                });
                break;

            case '7':
                $.get('/statereportnReport/' + date + ',3', function (data) {
                    $('#putdatain').html(data);
                });
                break;

            default:
        }

    });
    $('#year').click(function () {

        date = myFunction();
        var repotRouts = $('#report').val();
        switch (repotRouts) {
            case '1':
                $.get('/prodactsReport/' + date + ",4", function (data) {
                    $('#putdatain').html(data);

                });
                break;
            case '2':
                $.get('/compayReport/' + date + ",4", function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '3':
                $.get('/incomeReport/' + date + ",4", function (data) {
                    $('#putdatain').html(data);
                });
                break;
                $.get('/prodactsReport/' + date + ",4", function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case'5':
                $.get('/soothingsReport/' + date + ",4", function (data) {
                    $('#putdatain').html(data);
                });
                // code block
                break;
            case '6':
                $.get('/calssfactionReport/' + date + ',4', function (data) {
                    $('#putdatain').html(data);
                });
                break;
            case '7':
                $.get('/statereportnReport/' + date + ',4', function (data) {
                    $('#putdatain').html(data);
                });
                break;

            default:
        }

    });


</script>
