<div class="card-body">
    <div id="table" class="table-editable">
    <form  action="/save-company" method="post" dir="rtl" class="from-group">
{{Csrf_field()}}
     <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                    <th class="text-center">اسم الشركة</th>
                
                    <td>
                        <span class="table-add"><button type="button" class="btn btn-success btn-rounded btn-sm my-0" id="new_row">جديد</button></span>
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


<script>
    const $tableComp = $('#table');
    const ncopmanyTr = `<tr>
                    <td class="pt-3-half" ><input type="text" placeholder="اسم الشركة" required  name="company_name[]" require class="form-control"/></td>
                    <td>
                    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" >إزالة</button></span>
                    </td>
                </tr>`;
    $tableComp.on('click', '#new_row', function () {
        $('tbody').append(ncopmanyTr);
    });
    
    $tableComp.on('click', '.table-remove', function () {
        $(this).parents('tr').detach()
    });
    
  

</script>
