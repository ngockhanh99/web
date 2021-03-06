<?php  ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Book Store</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="<?php echo FULL_SITE_ROOT ?>public/css/styleadmin.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>public/images/icon.png" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/_all-skins.min.css">
       

    </head>
    <body class="hold-transition skin-purple sidebar-mini">
        <div class="wrapper">
            <header class="main-header" style="background-image:url();">
                <!-- Logo -->
                <a href="?sk=sach" class="logo">
                 
                
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-dark bg-primary">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><?php echo $_SESSION['admin']['tenhienthi'] ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <p>
                                            -- Web Developer --
                                        </p>
                                        <div class="user-footer">
                                            <div class="pull-left">
                                                <a href="login_admin-doimk" class="btn btn-default btn-flat">?????i m???t kh???u</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="login_admin-xldangxuat" class="btn btn-default btn-flat">????ng xu???t</a>
                                            </div>
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
                <section class="sidebar sidebar-custom">
                    <!-- Sidebar user panel -->
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
                        <li><a href="admin-sach"><i class="fa fa-book"></i><span>Qu???n l?? s??ch</span></a></li>
                        <li><a href="admin-nhaxuatban"><i class="fa fa-user-plus"></i><span>Nh?? xu???t b???n</span></a></li>
                        <li><a href="admin-loaisach"><i class="fa fa-th"></i><span>Lo???i s??ch</span></a></li>
                        <li><a href="admin-tacgia"><i class="fa fa-users"></i><span>T??c gi???</span></a></li>
                        <li><a href="admin-donhang"><i class="fa fa-shopping-basket"></i><span>????n h??ng</span></a></li>
                        <li><a href="admin-chitiethoadon"><i class="fa fa-shopping-cart"></i><span>Chi ti???t h??a ????n</span></a></li>
                        <li><a href="admin-taikhoan"><i class="fa fa-user "></i><span>Th??nh vi??n</span></a></li>
                        <!-- <li><a href=""><i class="fa fa-bar-chart"></i><span>Th???ng k??</span></a></li>
                        <li><a href=""><i class="fa fa-area-chart"></i><span>B??o c??o</span></a></li> -->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper right_col" id="right1">