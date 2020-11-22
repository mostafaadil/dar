<head>
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
</head>
<div class="card-body" width="100%">
    <div id="table" class="table-editable">
    <form  action="/save" method="post"  class="from-group" enctype="multipart/form-data">
{{Csrf_field()}}
        <table class="table table-bordered table-responsive-md table-striped text-center" style="">
            <thead>
                <tr>
                    <th class="text-center"> Producate  arabic name  </th>
                    <th class="text-center">  Producate  english  name  </th>
                    <th class="text-center">arabic discrption  </th>
                    <th class="text-center">english   discrption </th>
                    <th class="text-center"> catogries </th>

                    <th class="text-center"> proudacts photo </th>

                    <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0" id="new_row"> add new proudact </button></span>
                    </td>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
        <div class="row" >
            <center>
                <button type="submit" class="btn btn-success btn-rounded btn-sm my-0" id="save">save</button>
           </center>
        </div>
       </form>
    </div>
</div>

<!-- Editable table -->
<i style="display:none" id="cal">
<select name="classfcation_id[]"  class="browser-default custom-select"> 
@foreach($classfcation as $data)
<option value="{{$data->id}}">{{$data->calssfcation_type_english}}</option>
@endforeach
</select >
</i>

<script>
    var $pro_table = $('#table');
    var proTr = `<tr>
                    <td class="pt-3-half" ><input type="text" placeholder="اسم المنتج" required name="arabic_name[]"require class="form-control"/></td>
                    <td class="pt-3-half" ><input type="text" placeholder="اسم المنتج" required name="english_name[]"require class="form-control"/></td>
                    <td class="pt-3-half" ><textarea  id="" cols="30" required name="arabic_discrption[]"   width="40%" rows="10"></textarea></td>

                    <td class="pt-3-half" ><textarea  id="" cols="30" required name="english__discrption[]" width="40%"   rows="10"></textarea></td></td>
                    <td class="pt-3-half" >`+$('#cal').html()+`</td>
                    <td class="pt-3-half" ><input id="file" type="file" name="imge_url[]"  required  width="40%" class="form-control"></td>
                    <td>
                    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >إزالة</button></span>
                    </td>
                </tr>`;
    $pro_table.on('click', '#new_row', function () {
        $('tbody').append(proTr);
    });
    
    $pro_table.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    
    

</script>
