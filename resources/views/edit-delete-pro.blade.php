<html lang="en">
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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<div>
  <div style="margin-right:40%" dir="rtl">
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" id="search" placeholder="بحث" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-info" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
  </div>
  </form>

  <div>
    <table class="table table-bordered text regular" dir="rtl" style="  margin: 0px auto;"
           id="laravel_crud">
      <thead>

      </thead>
      <thead>
      <tr>
        <th class="text regular">الرقم</th>
        <th class="regular text" id="txt_name">اسم المنتج بالعربية </th>
        <th class="regular text" id="txt_name">اسم المنتج بالانجليزية </th>
        <th class="regular text" id="txt_name">وصف  المنتج بالعربية </th>
        <th class="regular text" id="txt_name">وصف  المنتج بالانجليزية </th>
        <th class="regular text" id="txt_name">التصنيف </th>

        <th class="regular text" id="txt_name">صورة المنتج </th>
        </td>
      </tr>
      </thead>
      <tbody id="users-crud" {{$counter=1}}>
      @foreach($pro as $u_info)
        <tr id="user_id_{{ $u_info->id }}">
          <td class="text regular">{{$counter++ }}</td>
          <td class=" text regular">{{ $u_info->arabic_name }}</td>
          <td class=" text regular">{{ $u_info->english_name }}</td>
          <td class=" text regular">{{ $u_info->arabic_discrption }}</td>
          <td class=" text regular">{{ $u_info->english__discrption }}</td>

          <td class=" regular text">{{ $u_info->productclassification->calssfcation_type_arabic }}</td>

          <td class="text regular"><img src="{{asset($u_info->imge_url)}}" style="width:100px;hight:20%"></td>


          <td class=" text regular"><a href="javascript:void(0)" id="edit-user" data-id="{{ $u_info->id }}"
                                       class="btn btn-info text regular">تعديل</a></td>
          <td class="regular text"><a href="javascript:void(0)" id="delete-user" data-id="{{ $u_info->id }}"
                                      class="btn btn-danger delete-user text regular">حذف</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>


  <div style="display: none" id="showMe" class="center-screen" tabindex="-1" role="dialog"
       aria-labelledby="myModalLabel"
       aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="card card-info">
          <div class="card-header">
            <h4 class="card-title">Input Addon</h3>

              <button id="close" dir="ltr" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body" dir="rtl">

            <form id="userForm" name="userForm" class="form-horizontal">
              <input type="hidden" name="user_id" id="user_id">

              <div class="form-group">
                <label for="name" style="margin-left:80%" class="col-sm-1control-label"> *اسم المنتج</label>

                <div class="col-sm-12">
                  <input type="text" class="form-control" id="thename" name="english_name"
                         placeholder="Enter Name" value="" maxlength="50" required="">


                         <input type="text" class="form-control" id="thename2" name="arabic_name"
                         placeholder="Enter Name" value="" maxlength="50" required="">
                         <textarea name="arabic_discrption" id="arabic_discrption" cols="30" rows="10"></textarea>
                         <textarea name="english__discrption" id="english__discrption" cols="30" rows="10"></textarea>

                </div>
              </div>

              <label for="name" style="margin-left:80%" class="col-sm-1control-label"> *اسم االشركة</label>

              <select name="classfcation_id" dir="rtl" class="browser-default custom-select">

                @foreach($classfcation as $data)
                  <option value="{{$data->id}}">{{$data->calssfcation_type_english}}</option>
                @endforeach
              </select>
              <div class="form-group">
                <div class="col-sm-12">

                  <label for="name" style="margin-left:80%" class="col-sm-1control-label"> *تاريخ الدخول </label>
               
              </div>


              <div class="modal-footer">
                <button type="submit" class="btn btn-block btn-outline-success" id="btn-save" value="create">حفظ
                  التفبيرات
                  <i class="fas fa-save"></i></button>

              </div>
            </form>
          </div>
        </div>
      </div>


      <div id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
           aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
          <!--Content-->

          <!--Body-->
          <!--/.Content-->
        </div>
      </div>
      <script src="plugins/jquery/jquery.min.js"></script>


      <script>
          $(document).ready(function () {
              /*  When user click add user button */
              $('#create-new-user').click(function () {
                  $('#btn-save').val("create-user");
                  $('#userForm').trigger("reset");
                  $('#userCrudModal').html("Add New User");
                  $('#ajax-crud-modal').modal('show');
              });


              // update data

              /* When click edit user */
              $('body').on('click', '#edit-user', function () {

                  $('#showMe').show();

                  var user_id = $(this).data('id');
                  $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                  var link = '/edit-pro/' + user_id;


                  $.ajax({
                      type: "get",
                      url: link,
                      dataType: 'json',
                      success: function (data) {
                          $('#user_id').val(user_id);
                          $('#thename').val(data.english_name);
                          $('#thename2').val(data.arabic_name);
                          $('#arabic_discrption').val(data.arabic_discrption);
                          $('#english__discrption').val(data.english__discrption);


                          


                          $('#dis').val(data.dis);

                      },
                      error: function (data) {
                          alert(data);


                      }
                  });
              });


              //delete user login
              $('body').on('click', '.delete-user', function () {
                  var user_id = $(this).data("id");
                  $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                  confirm("هل انت  واثق من رغبتك حذف هذا المنتج");

                  if(confirm("هل انت  واثق من رغبتك حذف هذا المنتج")==true){
                      $.ajax({
                          type: "get",
                          url: "/delete-pro/" + user_id,
                          success: function (data) {
                              alert("success" + data);
                              $("#user_id_" + user_id).remove();
                          },
                          error: function (data) {
                              alert(data);


                          }
                      });
                  }



              });
          });

          $("#btn-save").click(function () {
              $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
              var data = ($('#userForm').serialize());
            //  var id = $('#user_id').val;
              // var alldata=data+"id="+id;
              alert(data);

           //   location.reload();


              $.ajax({
                  type: "POST",
                  url: '/update-pro',
                  data: data,
                  dataType: 'json',
                  success: function (data) {
                      alert(data);
                  }, error: function (data) {
                      alert(data);


                  }


              });

          });

          $("#close").click(function () {

              $('#showMe').hide();

          });


          $(document).ready(function () {

              // Search all columns
              $('#search').keyup(function () {
                  // Search Text
                  var search = $(this).val();

                  // Hide all table tbody rows
                  $('#laravel_crud tbody tr').hide();

                  // Count total search result
                  var len = $('table tbody tr:not(.notfound) td:contains("' + search + '")').length;

                  if (len > 0) {
                      // Searching text in columns and show match row
                      $('#laravel_crud tbody tr:not(.notfound) td:contains("' + search + '")').each(function () {
                          $(this).closest('tr').show();
                      });
                  } else {
                      $('.notfound').show();
                  }

              });

              // Search on name column only
              $('#txt_name').keyup(function () {
                  // Search Text
                  var search = $(this).val();

                  // Hide all table tbody rows
                  $('#laravel_crud tbody tr').hide();

                  // Count total search result
                  var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("' + search + '")').length;

                  if (len > 0) {
                      // Searching text in columns and show match row
                      $('#laravel_crud tbody tr:not(.notfound) td:contains("' + search + '")').each(function () {
                          $(this).closest('tr').show();
                      });
                  } else {
                      $('.notfound').show();
                  }

              });

          });
      </script>

      </body>
</html>
