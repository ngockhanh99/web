<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Đăng nhập</title>
        <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>public/images/icon.png" type="image/x-icon" />
        <link href="<?php echo FULL_SITE_ROOT ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/animate.css"/>
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/style2.css"/>
	<script src="<?php echo FULL_SITE_ROOT ?>public/js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/formValidation.min1.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/formValidation.min2.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/index.js" type="text/javascript"></script>
</head>

<body>
	<div class="container">
            <div class="col-md-12">
            <div  class="login-box animated fadeInUp form-horizontal " style="max-width:340px">
                <form id="enableForm2" action="login-XLLogin" method="POST" >
			<div class="box-header">
				<h2>Đăng nhập</h2>
			</div>
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <div class="col-md-8 col-xs-offset-2">
                                <input type="text" class="form-control" name="txtTenDangNhap" value="<?php if(isset($_POST['txtTenDangNhap'])) echo $_POST['txtTenDangNhap']  ?>" id="username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <div class="col-md-8 col-xs-offset-2">
                                <input type="password" class="form-control" name="txtMatKhau" id="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <p style="color: red;"><?php if (isset($err)) echo $err; ?></p>
                            <input type="submit" class="btn btn-info" value="Đăng nhập"/>
                            <input type="reset" class="btn btn-default" value="reset"/>
                        </div>
                        <a href="login-register"><p class="small">Đăng ký</p></a>
                        <a href="book-store"><p class="small">Quay lại trang chủ</p></a>
                        
                </form>
            </div>
            </div>
	</div>
</body>
</html>