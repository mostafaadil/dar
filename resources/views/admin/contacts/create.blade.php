<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="An5hkKcakn7OeSnd3c5Xd0PD9g1HWclAvdchy7je">

<title>Laravel</title>

<link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js" defer></script>
</head>
<body class="bg-gray-200 min-h-screen font-base" dir="rtl">
<div id="app">

    <div class="flex flex-col md:flex-row">

        <base-sidebar></base-sidebar>

        <div class="w-full md:flex-1">
            <nav class="hidden md:flex justify-between items-center bg-white p-4 shadow-md h-16">
                <div>
                    <input class="px-4 py-2 bg-gray-200 border border-gray-300 rounded focus:outline-none" type="text"
                           placeholder="Search.."/>
                </div>
                <div>
                    <button class="mx-2 text-gray-700 focus:outline-none"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                    </button>
                </div>
            </nav>
            <main>
                <!-- Replace with your content -->

                    <div class="content-wrapper" style="margin-left:10px !important;">
                        <!-- Content Header (new header) -->
                        <div class="min-h-screen flex items-center">
                            <div class="bg-white w-full max-w-lg rounded-lg shadow overflow-hidden mx-auto">
                                <div class="py-4 px-6">
                                    <div class="text-center font-bold text-gray-700 text-3xl">Cars</div>
                                    <div class="mt-1 text-center font-bold text-gray-600 text-xl"> Add new Car</div>
                                    <form method="post" action="store" enctype="multipart/form-data">
                                        {{csrf_field()}}


                                        <input type="number" name="phone number"
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
