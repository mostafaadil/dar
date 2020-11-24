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
<div class="col-md-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div id="table" class="table table-bordered">
    <form  action="/save" method="post"  class="from-control" enctype="multipart/form-data">
{{Csrf_field()}}
        <table class="table table-bordered table-responsive-md table-striped text-center"  dir="rtl"style="margin-right:25%">
            <thead>
                <tr>
                   <th> اسم المنتج بالعربية </th>
                   <th> اسم المنتج بالانجليزية  </th>
                   <th>الوصف بالعربية</th>
                   <th>الوصف بالانجليزية </th>
                   <th> التصنيف </th>
                   <th> صورة المنتج  </th>

                    <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0"  class="form-control"  id="new_row"> إضافة  منتج جديد </button></span>
                    </td>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
        <div class="row" >
            <center>
                <button type="submit" class="btn btn-success btn-rounded btn-sm my-0" id="save">حفظ</button>
           </center>
        </div>
       </form>
    </div>
</div>

<!-- Editable table -->
<i style="display:none" id="cal">
<select name="classfcation_id[]"  style="width: 100px "class="browser-default custom-select"> 
@foreach($classfcation as $data)
<option value="{{$data->id}}">{{$data->calssfcation_type_english}}</option>
@endforeach
</select >
</i>

<script>
    var $pro_table = $('#table');
    var proTr = `<tr>
    <th><input type="text"  placeholder="اسم المنتج" required name="arabic_name[]"require class="form-control"/></td>
    <th><input type="text"  placeholder="اسم المنتج" required name="english_name[]"require class="form-control"/></td>
    <th><div class="form-group w-100" ><textarea  id="" cols="30" required name="arabic_discrption[]" 
                   " rows="10"  class="form-control"></textarea></div></td>

  <th><div class="form-group w-100"><textarea  id="" cols="30" required name="english__discrption[]"   rows="10"  class="form-control"></textarea></di</td>
  <th>`+$('#cal').html()+`</td>
  <th><input id="file" type="file" class="file" name="imge_url[]"  required   class="form-control"></td>
                    <td>
                    <span class="table-remove"  class="form-control"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >إزالة</button></span>
                    </td>
                </tr>`;
    $pro_table.on('click', '#new_row', function () {
        $('tbody').append(proTr);
    });
    
    $pro_table.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    
    

</script>
