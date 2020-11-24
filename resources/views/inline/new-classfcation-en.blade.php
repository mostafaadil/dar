<head>

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
    <!-- Google Font: Source Sans Pro -->
    <script src="plugins/jquery/jquery.min.js"></script>

</head>
<div class="card-body">
    <div id="table_class" class="table-editable">
    <form  action="/save-pro-classification" method="post"  class="from-group">
{{Csrf_field()}}
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                    <th class="text-center"> catogrie </th>
                    
                    <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0" id="new_row">new </button></span>
                    </td>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
        <div class="row" >
            <center>
                <button type="submit" class="btn btn-success btn-rounded btn-sm my-0" id="save">save </button>
           </center>
        </div>
       </form>
    </div>
</div>

<!-- Editable table -->


<script  type="text/javascript">
    var $tableclas = $('#table_class');
    var  classRaw = `<tr>
                     <td class="pt-3-half" ><input type="text" placeholder=" name in arabic  "  name="calssfcation_type_arabic[]" required class="form-control"/></td>

                    <td class="pt-3-half" ><input type="text" placeholder="  name in eneglish "  name="calssfcation_type_english[]" required class="form-control"/></td>
                    <td>
                    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >remove </button></span>
                    </td>
                </tr>`;
    $tableclas.on('click', '#new_row', function () {
        $('tbody').append(classRaw);
    });
    
    $tableclas.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    
  

</script>
