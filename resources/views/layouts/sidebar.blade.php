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

<aside class="main-sidebar sidebar-dark-primary elevation-4 " style="direction:rlt;left: auto;
    right: 0; " >
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">لوحة تحكم موقع دار الصائغ </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                عمليات لوحة التحكم الرئيسية 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
     المنتجات
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="pro-ar">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>جديد  </p>
                </a>
              </li>
              <li class="nav-item" id="ed-pro">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المنتجات  </p>
                </a>
              </li>
            </ul>

              
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
     التصنيفات
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="classfi-ar">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> جديد </p>
                </a>
              </li>
              <li class="nav-item" id="ed-calss">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض التصنيفات </p>
                </a>
              </li>
             
            </ul>

              
            
          </li>

              <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>أخري </p>
                </a>
              </li>
            </ul>
          </li>
      
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                التقارير 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="#"id="month" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Normal Reports</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
      إدارة محتوي الموقع
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="">
                <a href="#" class="nav-link">
                <span class="badge badge-info right">2</span>
                  <p>جهات الاتصالات </p>
                </a>

                <ul class="nav nav-treeview">
              <li class="nav-item" id="contacts">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> جديد  </p>
                </a>
              </li>
              <li class="nav-item" id="edit-con">
                <a href="#"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> عرض جهات الاتصال   </p>
                </a>
              </li>
            </ul>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الحسابات </p>
                </a>
              </li>
    


              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
     اللغة 
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="">
                <a href="language/ar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> العربية  </p>
                </a>
              </li>
              <li class="nav-item" id="">
                <a href="/language/en" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> الانجليزية   </p>
                </a>
              </li>
            </ul>

              
            <li class="nav-item" dir="rtl" style="margin-left:30%">
                <a href="/logout" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <span class="glyphicon glyphicon-log-out"></span> تسجيل الخروج
                </a>
            </li>
          </li>

          
    <!-- /.sidebar-menu -->
</div>
</aside>
<div class="container">
    <div>

        @if($message=Session::get('status'))

            <script type="text/javascript">

                alert("تم الحفظ")
                  </script>
    </div>
    @endif
        <div  style="margin-right:15%" id="card">
        </div>
</div>
