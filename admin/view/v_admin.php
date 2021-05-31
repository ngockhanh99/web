<?php  ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ngọc Khánh</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link href="../public/css/styleadmin.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../public/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- <img src="../public/img/admin.jpg" class="user-image" alt="User Image"> -->
                                    <span class="hidden-xs"><?php echo $_SESSION['admin'] ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../public/img/admin.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Đoàn Ngọc Khánh - Web Developer
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Đổi mật khẩu</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login.php?dn=xldangxuat" class="btn btn-default btn-flat">Đăng xuất</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!-- <img src="../public/img/admin.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <div class="pull-left info">
                            <p>Ngọc Khánh</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                        <li><a href="?sk=sach"><i class="fa "></i> Quản lý sách </a></li>
                        <li><a href="?sk=nhaxuatban"><i class="fa "></i>Nhà xuất bản </a></li>
                        <li><a href="?sk=loaisach"><i class="fa "></i> Loại sách</a></li>
                        <li><a href="?sk=tacgia"><i class="fa "></i> Tác giả</a></li>
                        <li><a href="?sk=donhang"><i class="fa "></i>Đơn hàng</a></li>
                        <li><a href="?sk=chitiethoadon"><i class="fa "></i>Chi tiết hóa đơn</a></li>
                        <li><a href="?sk=taikhoan"><i class="fa "></i>Thành viên</a></li>
                        <li><a><i class="fa "></i>Thống kê</a></li>
                        <li><a><i class="fa "></i>Báo cáo</a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
        
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.5
                </div>
                <strong>Copyright &copy; 2021 <a href="#">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <script src="../public/js/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/app.min.js"></script>
        <script src="../public/js/admin1.js"></script>
        <script src="../public/js/formValidation.min1.js" type="text/javascript"></script>
        <script src="../public/js/formValidation.min2.js" type="text/javascript"></script>
    </body>
</html>
<?php ob_flush();  ?>