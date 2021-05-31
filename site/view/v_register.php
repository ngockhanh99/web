<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Đăng ký</title>
        <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>public/images/icon.png" type="image/x-icon" />
        <link href="<?php echo FULL_SITE_ROOT ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/animate.css">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/style2.css">

        <script src="<?php echo FULL_SITE_ROOT ?>public/js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/formValidation.min1.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/formValidation.min2.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/index.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="container">

            <div class="login-box animated fadeInUp" style="max-width: 850px !important">
                <div class="box-header">
                    <h2>Đăng Kí</h2>
                </div>
                <form id="enableForm" action="login-XLRegister" method="POST" class="form-horizontal">
                    <div class="row">
                        <p style="color: red"><?php if (isset($err1)) echo $err1 ?></p>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-xs-5 control-label">Tên Đăng nhập (*)</label>
                                <div class="col-xs-7">
                                    <input type="text" value="<?php if(isset($tendangnhap)) echo $tendangnhap; ?>" class="form-control" name="txtTenDangNhap" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-5 control-label">Mật khẩu</label>
                                <div class="col-xs-7">
                                    <input type="password" value="<?php if(isset($matkhau1)) echo $matkhau1; ?>" class="form-control" name="password" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-5 control-label">Nhập lại mật khẩu</label>
                                <div class="col-xs-7">
                                    <input type="password" value="<?php if(isset($matkhau2)) echo $matkhau2; ?>" class="form-control" name="confirm_password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-5 control-label">Email (*)</label>
                                <div class="col-xs-7">
                                    <input type="email" value="<?php if(isset($email)) echo $email; ?>" class="form-control" name="txtEmail" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 30px;">
                             <div class="form-group">
                                <label class="col-xs-5 control-label">Họ Tên</label>
                                <div class="col-xs-7">
                                    <input type="text" value="<?php if(isset($hoten)) echo $hoten; ?>" class="form-control" name="txtHoTen" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-5 control-label">Số điện thoại</label>
                                <div class="col-xs-7">
                                    <input type="text" value="<?php if(isset($sdt)) echo $sdt; ?>" class="form-control" name="txtSoDienThoai" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-5 control-label">Địa chỉ</label>
                                <div class="col-xs-7">
                                    <input type="text" value="<?php if(isset($diachi)) echo $diachi; ?>" class="form-control" name="txtDiaChi" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    
                                    <input type="submit" class="btn btn-info" value="Đăng kí"/>
                                    <input type="reset" class="btn btn-default" value="reset"/>
                                <br>
                                <a href="book-store"><p class="small">quay lại trang chủ</p></a>
                                <a href="login"><p class="small">Đăng nhập</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>

        </div>
    </body>
</html>
<?php
ob_flush();