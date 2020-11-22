<div class="card-body">
    <div id="table" class="table-editable">
    <form  action="/save-income" method="post" dir="rtl" class="from-group">
{{Csrf_field()}}
    <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                    <th class="text-center">أسم المنتج</th>
                    <th class="text-center">الكمية</th>
                    <th class="text-center"> سعر المنتج</th>
                    <th class="text-center">تاريخ شراء المنتج</th>
                    <th class="text-center">تاريخ دخول المنتج </th>
                    <th class="text-center">  الشركة الموردة </th>


                    <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0" id="new_row"> وارد  جديد</button></span>
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

<i id="pro" style="display:none">
<select name="product_id[]" dir="rtl"   class="browser-default custom-select"> 
@foreach($pro as $data)
<option value="{{$data->id}}">{{$data->name}}</option>
@endforeach
</select ></td>
<td>
</i>

<!-- Editable table -->
<i style="display:none" id="cal">
<select name="company_id[]" dir="rtl" class="browser-default custom-select"> 
@foreach($com as $data)
<option value="{{$data->id}}">{{$data->company_name}}</option>
@endforeach
</select>

<i style="display:none" id="me">
<select name="product_id[]" dir="rtl"   class="browser-default custom-select"> 
@foreach($pro as $data)
<option value="{{$data->id}}">{{$data->name}}</option>
@endforeach
</select >
</i>

<script>
    
    var $tableIncoming = $('#table');
    var invomingTr = `<tr>
                    <td class="pt-3-half" >`+$('#me').html()+`</td>
                    <td class="pt-3-half" ><input type="nmuber" placeholder="الكمية" name="quntity[]" required class="form-control"/></td>
                    <td class="pt-3-half" ><input type="number" placeholder="سعر المنتج" name="price[]" required class="form-control"/><br></td>
                    <td class="pt-3-half" ><input type="date" placeholder="تاريخ شراء المنتج " name="buy_date[]"  required class="form-control"/></td>
                    <td class="pt-3-half" ><input type="date" placeholder="تاريخ دخول المنتج" name="enterd_date[]" required class="form-control"/></td>
                    <td class="pt-3-half" >`+$('#cal').html()+`</td>

                    <td>
                    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >إزالة </button></span>
                    </td>
                </tr>`;
    $tableIncoming.on('click', '#new_row', function () {
        $('tbody').append(invomingTr);
    });
    
    $tableIncoming.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    

    
    

</script>
