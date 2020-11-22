@extends('admin.admin_template')


<table id="cars_list" class="table table-bordered table-striped dataTable no-footer" style="" role="grid" aria-describedby="example1_info">
    <thead>

    <tbody id="users-crud">
    @foreach($carsSelect as $u_info)
        <tr id="user_id_{{ $u_info->id }}">
            <td class="text regular">{{ $u_info->id  }}</td>
            <td class=" text regular">{{ $u_info->car_name }}</td>
            <td><img src="{{asset( $u_info->car_photo)}}" style="width: 220px; height: 200px"></td>

            <td class=" text regular"><a href="javascript:void(0)" id="edit-car" data-id="{{ $u_info->id }}"
                                         class="btn btn-block btn-outline-info">تعديل</a></td>

            <td class=" text regular"><a href="javascript:void(0)" id="delete" data-id="{{ $u_info->id }}"
                                         class="btn btn-block btn-outline-danger">delete</a></td>

        </tr>
    @endforeach
    </tbody>
</table>


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
                <div class="modal-body" dir="rtl" >
<form id="userForm" name="userForm" class="form-horizontal">
    <div class="form-group" >
        <label for="name"  style="margin-left:80%"  class="col-sm-1control-label"> *اسم االشركة</label>

        <div class="col-sm-12">
            <input type="text" class="form-control" id="car_name" name="car_name"
                   placeholder="Enter Name" value="" maxlength="50" required="">
            <input type="hidden" class="form-control" id="id" name="id"
                   placeholder="Enter Name" value="" maxlength="50" required="">

            <input type="hidden" class="form-control" id="" value="1" name="car_type"
                 >

        </div>

        <div class="col-sm-12" id="car_photo">

        </div>

    </div>


    </div>


    <div class="modal-footer"   style="margin-left:59%">
        <button type="submit" class="btn btn-block btn-outline-success" id="btn-save" value="create">حفظ التفبيرات
        </button>
    </div>
</form>
            </div>
        </div>
    </div>

<script src="js/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        /*  When user click add user button */

        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    });

    $('#cars_list').on('click', '#delete', function () {

        var car_id = $(this).data("id");

        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        $.get('/cars/delete/'+car_id,function (data) {

            $("#user_id_" + car_id).remove();

        });

    });
    //get the data of selected car

    $('#cars_list').on('click', '#edit-car', function () {

        var car_id = $(this).data("id");

        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        $.ajax({
            type: "get",
            url: '/edit/'+car_id,
            dataType: 'json',
            success: function (data) {

                $('#showMe').show();

                /* formate the returned data into the input filed */

                $('#car_name').val(data.car_name);
                $('#id').val(data.id);


                /* cretae imge tag insed and the infalte there */

                 var imge_tag=' <img src='+data.car_photo+' style="width:200px,hight:200px">';

                 $('#car_type').val(data.car_type);

            },
            error: function (data) {
                alert(data);
            }
        });


        $('#userForm').submit(function () {

            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            alert($('#userForm').serialize());
            $.ajax({
                method:'POST',
                link:'/cars/update',
                data:$('#userForm').serialize(),
                dataType: 'json',
                success: function (data) {
                    alert(data);
                },
                error: function (data) {
                    alert(data);
                }

            })

        });

    });
</script>

