                    
                    <div class="heading-bar">
                        <a class="more-btn">Tiến hành kiểm tra</a>
                    </div>
                    <div class="table_gio_hang">
                    <form method="POST" action="gio-hang-sua" id="form_gio_hang">
                        <?php
                            if(isset($_SESSION['giohang']) && empty($_SESSION['giohang']) == FALSE){
                        ?>
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>&nbsp;</th>
                                <th>Tên sách</th>
                                <th class="center1">Giá</th>
                                <th class="center1">Số lượng</th>
                                <th class="center1" >Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                            <?php
                                foreach ($_SESSION['giohang'] as $val){
                            ?>
                            <tr>
                                <td class="center1"><img src="upload/<?php echo $val['hinhanh'] ?>"/></td>
                                <td><?php echo $val['tensach'] ?></td>
                                <td class="center1"><?php echo number_format($val['dongia'],0,'.',',') ?></td>
                                <td class="center1" ><input class="soluong1" required pattern="[0-9]{1,3}" title="Số lượng phải là chữ số và nhỏ hơn 4 kí tự" name="txtSoLuong[<?php echo  $val['id']?>]" size="2" type="text" value="<?php echo  $val['soluong']?>"/></td>
                                <td  class="center1 img_gio_hang"><?php echo number_format($val['dongia']*$val['soluong'],0,'.',',') ?></td>
                                <td ><a href="gio-hang-xoa-<?php echo  $val['id']?>" class="delete-book"> <i class="icon-trash"></i></a></td>
                            </tr>
                            <?php 
                                }
                            ?>
                            <tr>
                                <td colspan="6" style="text-align: right">
                                    <button type="submit" style="" class="btn btn-info">Cập nhật giỏ hàng</button>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    <div class="heading-bar">
                        <a class="more-btn">Tiến hành đặt hàng</a>
                    </div>
                    <form id="enableForm3" action="gio-hang-XL_Dat_Hang" method="POST" class="form-horizontal">
                        <div class="row">
                            <p style="color: red"><?php if (isset($err1)) echo $err1 ?></p>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Họ Tên (*)</label>
                                    <div class="col-md-7">
                                        <input type="text" value="<?php if(isset($_SESSION['user']['name'])) echo $_SESSION['user']['name'] ?>" class="form-control" name="txtHoTen" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Số điện thoại (*)</label>
                                    <div class="col-md-7">
                                        <input type="text" value="<?php if(isset($_SESSION['user']['sdt'])) echo $_SESSION['user']['sdt'] ?>" class="form-control" name="txtSoDienThoai" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Email (*)</label>
                                    <div class="col-md-7">
                                        <input type="email" value="<?php if(isset($_SESSION['user']['email'])) echo $_SESSION['user']['email'] ?>" class="form-control" name="txtEmail" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Địa chỉ (*)</label>
                                    <div class="col-md-7">
                                        <input type="text"  value="<?php if(isset($_SESSION['user']['diachi'])) echo $_SESSION['user']['diachi'] ?>" class="form-control" name="txtDiaChi" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Ghi chú</label>
                                    <div class="col-md-7">
                                        <textarea  name="txtGhiChu" >
                                            <?php if(isset($_SESSION['user']['ghichu'])) echo $_SESSION['user']['ghichu'] ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label>CapCha (*)</label>
                                        <input type="text"  value="" class="form-control" name="txtCaptCha" />
                                        <label style="color: red;">
                                            <?php if(isset($err_captcha)) echo $err_captcha ?>
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="public/images/captcha.php" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="padding-right: 30px;">
                                <div class="form-group">
                                    <div class="col-xs-5 col-xs-offset-5">
                                        <input type="submit" class="btn btn-info" value="Đặt hàng"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                <?php
                    }
                    else{
                        echo '<h3>Không có sản phẩm trong giỏ hàng</h3>';
                    }
                        