<div class="card-body">
    <div id="table" class="table-editable">
    <form  action="/save-prostatus" method="post" dir="rtl" class="from-group">
    {{Csrf_field()}}
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                  <th class="text-center"> المنتج</th>
                  <th class="text-center">حالة المنتج</th>

                  <th class="text-center">وحدات المنتج </th>
                    <th class="text-center"> تاريخ حالة المنتج</th>


                  <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0" id="new_row">إضافة حالة   منتج   جديدة </button></span>
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

<i style="display:none" id="me">
  <select name="product_id[]" dir="rtl"   class="browser-default custom-select">
    @foreach($pro as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
    @endforeach
  </select >
</i>

<!-- Editable table -->
<i style="display:none" id="cal">
<select   name="status_type[]"  class="browser-default custom-select">
  <option value="1">تالف </option>
  <option value="2">مفقود</option>
</select>
</i>

<script>
    var $tableProSutaus = $('#table');
    var proSutusTr = `<tr>
                       <td class="pt-3-half" >`+$('#cal').html()+`</td>

                      <td class="pt-3-half" >`+$('#me').html()+ `</td>

                    <td class="pt-3-half" ><input type="number" placeholder="وحدات المنتج " required name="unites[]" require class="form-control"/></td>
                    <td class="pt-3-half" ><input type="date" placeholder=" تاريخ حالة المنتج " required  name="date[]" require class="form-control"/></td>

                    <td>
                    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >إزالة</button></span>
                    </td>
                </tr>`;
    $tableProSutaus.on('click', '#new_row', function () {
        $('tbody').append(proSutusTr);
    });
    
    $tableProSutaus.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    
    
    

</script>
