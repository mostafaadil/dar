            <main>
                <!-- Replace with your content -->

                    <div class="content-wrapper" style="margin-left:10px !important;">
                        <!-- Content Header (new header) -->
                        <div class="min-h-screen flex items-center">
                            <div class="bg-white w-full max-w-lg rounded-lg shadow overflow-hidden mx-auto">
                                <div class="py-4 px-6">
                                    <div class="text-center font-bold text-gray-700 text-3xl">جهات الاتصال</div>
                                    <div class="mt-1 text-center font-bold text-gray-600 text-xl">إاضافة جهة اتصال جديدة</div>
                                    <form method="post" action="store" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <input type="number" name="phone_number"
                                               placeholder="phone"
                                               class="w-full mt-2 py-3 px-4 bg-gray-100 text-gray-700 border border-gray-300 rounded  block appearance-none placeholder-gray-500 focus:outline-none focus:bg-white">

                                        <button data-v-64a1f7a3="" type="submit"
                                                class="px-2 py-1 bg-green-500 hover:bg-green-600 text-white text-lg font-medium rounded">

                                            add
                                        </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    </main>
</div>
</div>
</div>
