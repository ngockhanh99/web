<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Đổi mật khẩu</title>
        <link rel="shortcut icon" href="<?php echo FULL_SITE_ROOT ?>public/images/icon.png" type="image/x-icon" />
        <link href="<?php echo FULL_SITE_ROOT ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/animate.css">
        <link rel="stylesheet" href="<?php echo FULL_SITE_ROOT ?>public/css/style2.css">
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/jquery-2.2.4.min.js"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/formValidation.min1.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/formValidation.min2.js" type="text/javascript"></script>
        <script src="<?php echo FULL_SITE_ROOT ?>public/js/index.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">

            <div class="login-box animated fadeInUp" style="max-width:470px">
                <div class="box-header">
                    <h2>Đổi mật khẩu</h2>
                </div>
                <form id="enableForm" action="login-XLDoiMK" method="POST" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-12" style="padding: 0 25px;">
                            <div class="form-group">
                                <label class="col-xs-5 control-label">Mật khẩu cũ (*)</label>
                                <div class="col-xs-7">
                                    <input type="password" class="form-control" name="txtTenDangNhap" />
                                    <span style="color: red;"><?php if(isset($err)) echo $err; ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-5 control-label">Mật khẩu mới</label>
                                <div class="col-xs-7">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-5 control-label">Nhập lại mật khẩu mới</label>
                                <div class="col-xs-7">
                                    <input type="password" class="form-control" name="confirm_password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-5 col-xs-offset-3">
                                    
                                    <input type="submit" class="btn btn-info" value="Đổi mật khẩu"/>
                                    <input type="reset" class="btn btn-default" value="reset"/>
                                <br>
                                <a href="book-store"><p class="small">quay lại trang chủ</p></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
               
            </div>

        </div>
    </body>
</html>
