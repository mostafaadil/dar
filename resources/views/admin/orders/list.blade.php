@extends('admin.admin_template ')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="An5hkKcakn7OeSnd3c5Xd0PD9g1HWclAvdchy7je">
</head>
<body class="bg-gray-200 min-h-screen font-base" dir="rtl">
<div id="app">


    <h2 data-v-64a1f7a3="" class="text-2xl font-medium" dir="rtl">الطلبيات</h2>
    <div data-v-64a1f7a3="" class="mt-4">
        <div data-v-64a1f7a3="" class="flex flex-col">
            <div data-v-64a1f7a3="" class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6">
                <div data-v-64a1f7a3=""
                     class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table data-v-64a1f7a3="" id="cars_list"  class="table table-bordered table-striped dataTable no-footer" class="min-w-full">
                        <tr data-v-64a1f7a3="">
                            <th data-v-64a1f7a3=""
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start;">
                                السيارة
                            </th>
                            </th>
                            <th data-v-64a1f7a3=""
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start;">
                                تاريخ استلام السيارة
                            </th>
                            </th>
                            <th data-v-64a1f7a3=""
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start;">
                                رخصة الزبون
                            </th>
                            </th>
                            <th data-v-64a1f7a3=""
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start;">

                                تاريخ تسليم السيارة
                            </th>

                            </th>
                            <th data-v-64a1f7a3=""
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start;">
                                حالة السيارة
                            </th>
                        </tr>
                        </thead>

                        @foreach($ordersInfo as $info)
                            <th data-v-64a1f7a3="" class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>

                            </thead>
                            <tbody data-v-64a1f7a3="" class="bg-white">
                            <tr data-v-64a1f7a3="" id="user_id_{{ $info->id }}">
                                <td data-v-64a1f7a3="" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div data-v-64a1f7a3="" class="flex items-center">
                                        <div data-v-64a1f7a3="" class="flex-shrink-0 h-10 w-10">
                                            <img data-v-64a1f7a3=""
                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                 alt="" class="h-10 w-10 rounded-full">
                                        </div>
                                        <div data-v-64a1f7a3="" class="mx-2">
                                            <div data-v-64a1f7a3=""
                                                 class="text-sm leading-5 font-medium text-gray-900">{{$info->pick_date}}</div>
                                            <div data-v-64a1f7a3=""
                                                 class="text-sm leading-5 text-gray-500">{{$info->delever_date}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td data-v-64a1f7a3="" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$info->delever_date}}
                                </td>

                                <td data-v-64a1f7a3="" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$info->coustmer_linece}}
                                </td>
                                <td data-v-64a1f7a3="" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$info->delever_date}}
                                </td>
                                <td data-v-64a1f7a3=""
                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"><span
                                        data-v-64a1f7a3=""
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                  </span></td>

                                <td class=" text regular"><a href="javascript:void(0)" id="delete"
                                                             data-id="{{$info->id }}"
                                                             class="btn btn-block btn-outline-success">تلبية الطلب</a></td>

                                @endforeach
                            </tr>
                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="modal fade" id="ignismyModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                </div>

                <div class="modal-body">

                    <div class="thank-you-pop">
                        <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                        <h1>Thank You!</h1>
                        <p id="Message"></p>
                        <h3 class="cupon-pop"><span></span></h3>

                    </div>

                </div>

            </div>
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

        $.get('/order/' + car_id, function (data) {
            $("#ignismyModal").show();

            $('#ignismyModal').modal('toggle');
            // $('#myModal').modal('show');
            //   $('#myModal').modal('hide');
            $('#Message').html(data);
            $("#user_id_" + car_id).remove();

        });
    });

</script>
</body>
