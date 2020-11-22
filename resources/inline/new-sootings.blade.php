
<div class="card-body">
    <div id="table" class="table-editable">
    <form  action="/save-soothing" method="post" dir="rtl" class="from-group">
    {{Csrf_field()}}
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                  <th class="text-center">المنتج</th>

                  <th class="text-center">وصف</th>
                  <th class="text-center">المساحة التخزينية </th>

                  <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0" id="new_row"> إضافة تسكين جديد</button></span>
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
<i style="display:none" id="cal" >
<select name="product_id[]" dir="rtl" class="browser-default custom-select"> 
@foreach($pro as $data)
<option value="{{$data->id}}">{{$data->name}}</option>
@endforeach
</select >
</i>

<script>
    var $tableSoohtings = $('#table');
    var soothingsTr = `<tr>
                    <td class="pt-3-half" >`+$('#cal').html()+`</td>

                    <td class="pt-3-half" > <textarea class="form-control" placeholder="وصف"  name="discarption[]"  id="exampleFormControlTextarea1" rows="3"></textarea></td>
                    <td class="pt-3-half" ><input type="number" placeholder="المساحة التخزينية " name="storage_space[]" require class="form-control"/></td>
                    <td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >إزالة</button></span>
                    </td>
                </tr>`;
    $tableSoohtings.on('click', '#new_row', function () {
        $('tbody').append(soothingsTr);
    });
    
    $tableSoohtings.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    

</script>
