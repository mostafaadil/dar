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

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
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
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Google Font: Source Sans Pro -->
</head>

<aside class="main-sidebar sidebar-dark-primary" style="direction:rlt;left: auto;
    right: 0;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">smart stok
</span>

    </a>

<div class="sidebar" dir="rtl">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2" dir="rtl">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview" style="margin-left:30% ;font-size: medium">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy" ></i>
                    <p >المنتجات<i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="pro">
                        <div id="external-events">
                            <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">
                                <a href="#" class="" style='font-size:small;'></i>جديد </a>
                            </div></a>
                    <li class="nav-item" id="ed-pro">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-warning ui-draggable ui-draggable-handle"  style='font-size:small'>
                                <p>تعديل/حذف منتج</p>
                            </div>
                        </a>
                    </li>
                </ul>
            <li class="nav-item has-treeview" style="margin-left:35%">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>الوارد <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="income">
                        <div id="external-events">
                            <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">
                                <i></i><a href="#" class="" style='font-size:small'></a></i>جديد
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" id="ed-income">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-warning ui-draggable ui-draggable-handle"  style='font-size:small'>
                                <p>تعديل/حذف</p>
                            </div>

                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item has-treeview" style="margin-left:35%">
                <a href="#" class="nav-link" id="data">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>الطلبيات <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview" style="margin-left:25%">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>الاصناف<i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="classfi">
                        <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">
                            <i></i><a href="#" class="" style='font-size:small'></a></i>جديد
                        </div>
                        </a>
                    </li>
                    <li class="nav-item" id="ed-calss">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-warning ui-draggable ui-draggable-handle"  style='font-size:small'>
                                <p>تعديل/حذف صنف</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview" style="margin-left:15%">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>حالة المنتحات <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="pro-st">
                        <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">
                            <i></i><a href="#" class="" style='font-size:small'></a></i>جديد
                        </div>
                    </li>
                    <li class="nav-item" id="ed-pros">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-warning ui-draggable ui-draggable-handle"  style="font-size:small">
                                <p>تعديل/حذف حالة</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview" style="margin-left:25%">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy" ></i>

                    <p>الشركات <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="comp">
                        <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">
                            <i></i><a href="#" class="" style='font-size:small'></a></i>جديد
                        </div>
                    </li>
                    <li class="nav-item" id="ed-comp">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-warning ui-draggable ui-draggable-handle"  style='font-size:small'>
                                <p>تعديل/حذف شركة</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview" style="margin-left:10%">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p> تسكين المنتجات <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="st">
                        <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">
                            <i></i><a href="#" class="" style='font-size:small'></a></i>جديد
                        </div>
                    </li>
                    <li class="nav-item" id="ed-st">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-warning ui-draggable ui-draggable-handle"
                                 style='font-size:small'>
                                <p>تعديل /حذف </p>
                            </div>
                        </a>

                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview" style="margin-left:10%">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p> قائمة التقارير<i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item" dir="rtl" id="month">
                        <div class="external-event bg-success ui-draggable ui-draggable-handle"
                             style="position: relative;">
                            <i></i><a href="#" class="" style='font-size:small'></a></i>تقارير بناء علي الشهر السنة الاسبوع واليوم
                        </div>
                    </li>
                    <li class="nav-item" id="derution">
                        <a href="#" class="nav-link">
                            <div class="external-event bg-success ui-draggable ui-draggable-handle"
                                 style='font-size:small'>
                                <p>تقارير بناء علي فترة زمنية</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>









            <li class="nav-item" dir="rtl" id="else" style="margin-left:30%">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> اخري</p>
                </a>
            </li>
            </li>

            <li class="nav-item" dir="rtl" style="margin-left:30%">
                <a href="/logout" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <span class="glyphicon glyphicon-log-out"></span> تسجيل الخروج
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
