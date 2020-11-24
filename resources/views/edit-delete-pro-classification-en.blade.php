<div>
    <div  style="margin-right:40%" dir="rtl">
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
     <table class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info" id="laravel_crud">
            <thead>
            <tr>
                <td class="text regular">Number</td>
                <td class="regular text"> catogrie  english  name </td>
                <td class="regular text"> catogrie arabic  name </td>

                <td class="regular text">opration</td>
            </tr>
            </thead>
            <tbody id="users-crud" {{$counter=1}}>
            @foreach($clas as $u_info)
                <tr id="user_id_{{ $u_info->id }}">
                    <td class="text regular">{{ $counter++}}</td>
                    <td class="text regular">{{ $u_info->calssfcation_type_arabic}}</td>  
                    <td class="text regular">{{ $u_info->calssfcation_type_english}}</td>  

                    <td class=" text regular"><a href="javascript:void(0)" id="edit-user"
                     data-id="{{ $u_info->id }}"
                     data-name="{{ $u_info->calssfcation_type}}" 
                
                     class="btn btn-info text regular">edit </a></td>
                    <td class="regular text">
                    <a href="javascript:void(0)" id="delete-user" data-id="{{ $u_info->id }}" class="btn btn-danger delete-user text regular">delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <div style="display: none" id="showMe" class="center-screen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="card card-info">
              <div class="card-header">
                <h4 class="card-title">Input Addon</h3>

                <button id="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
              </div>

              
                 <div class="modal-body">

                    <form id="userForm" name="userForm" class="form-horizontal">
                        <input type="hidden" name="id" id="user_id">

                        <div class="form-group">
                        <lable for="exampleInputEmail1"> catogries arabic name </label>

                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="calssfcation_type_arabic" name="calssfcation_type_arabic"
                                       placeholder="Enter Name" value="" maxlength="50" required="">
                            </div>    


                            <div class="form-group">
                            <lable for="exampleInputEmail1"> catogries english name </label>

                                <input type="text" class="form-control" id="calssfcation_type_english" name="calssfcation_type_english"
                                       placeholder="Enter Name" value="" maxlength="50" required="">
                            </div>    
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-block btn-outline-success" id="btn-save" value="create">حفظ التفبيرات
                            <i class="fas fa-save"></i> </button>
                        
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
                $('body').on('click','#edit-user', function () {

                    $('#showMe').show();

                    var  user_id = $(this).data('id');
                    var  calssfcation_type=$(this).data('calssfcation_type'); 
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    var link = '/edit-pro-classification/' + user_id;


                    $.ajax({
                        type: "get",
                        url: link,
                        dataType: 'json',
                        success: function (data) {
                            $('#user_id').val(user_id);
                            $('#calssfcation_type_english').val(data.calssfcation_type_english);

                            
                            $('#calssfcation_type_arabic').val(data.calssfcation_type_arabic);
                        


                        },
                        error: function (data) {
                            //alert(data);


                        }
                    });
                });


                //delete user login
                $('body').on('click','.delete-user', function () {
                    var user_id = $(this).data("id");
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                    if(confirm("هل انت  واثق من رغبتك حذف هذا المنتج")==true) {


                        $.ajax({
                            type: "get",
                            url: "/delete-pro-classification/" + user_id,
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
                var id = $('#user_id').val;


             //   alert(data);


                $.ajax({
                    type: "POST",
                    url: '/update-pro-classification',
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        alert(data);
                       location.reload();

                    }, error: function (data) {
                      //  alert(data);


                    }


               } );

            });

            $("#close").click(function () {
             $('#showMe').hide();
            });


             $("#search").keyup(function () {

var name= $("#search").val()
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
$.ajax({
   type: "get",
   url: '/search-pro-classification/' + name,
   dataType: 'json',
   success: function (data) {
       var temp = '';
       for (var i = 0; i < data.length; i++) {
           temp += '<tr id="user_id_'+ data[i]['id']+'">" " + <td class="text regular">' + data[i]['calssfcation_type'] + '</td> <td class=" text regular"><a href="javascript:void(0)" id="edit-user" data-id="'+ data[i]['id'] + '"class="btn btn-info text regular">تعديل</a></td> <td class="regular text"><a href="javascript:void(0)" id="delete-user" data-id="' +data[i]['id'] + '"class="btn btn-danger delete-user text regular">حذف</a></td></tr>';
       }
       $('#laravel_crud').html(temp);
   }, error: function (data) {


   }



});

});

        </script>

        </body>
        </html>
