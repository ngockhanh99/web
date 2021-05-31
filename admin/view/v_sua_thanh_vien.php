<form method="POST" id="loginForm" class="form-horizontal" action="admin-taikhoan-Them_thanh_vien-<?php echo $_POST['page'] ?><?php if(isset($id_sua)) echo '-'.$id_sua ?>">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tên DN</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenDN" value="<?php if(isset($row_sua['TenDangNhap'])) echo $row_sua['TenDangNhap']; ?>" class="form-control txtTenNXB" id="inputEmail3" placeholder="Tên đăng nhập">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tên Hiển thị</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenHienThi" value="<?php if(isset($row_sua['TenHienThi'])) echo $row_sua['TenHienThi']; ?>" class="form-control txtTenNXB" id="inputEmail3" placeholder="Tên nhà hiển thị">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Số điện thoại</label>
        <div class="col-sm-8">
            <input type="text" name="txtSDT" value="<?php if(isset($row_sua['SDT'])) echo $row_sua['SDT']; ?>" class="form-control txtSDT" id="inputPassword3" placeholder="Số điện thoại ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Địa chỉ</label>
        <div class="col-sm-8">
            <input type="text" name="txtDiaChi" value="<?php if(isset($row_sua['DiaChi'])) echo $row_sua['DiaChi']; ?>" class="form-control txtDiaChi" id="inputPassword3" placeholder="Địa chỉ ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="text" name="txtEmail" value="<?php if(isset($row_sua['Email'])) echo $row_sua['Email']; ?>" class="form-control txtSDT" id="inputPassword3" placeholder="Email">
        </div>
    </div
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Quyền</label>
        <div class="col-sm-8">
            <select class="form-control" name="txtQuyen">
                <option value="2" <?php if(isset($row_sua['Quyen']) && ($row_sua['Quyen']) == 2) echo 'selected=""'; ?>>User</option>
                <option value="1" <?php if(isset($row_sua['Quyen']) && ($row_sua['Quyen']) == 1) echo 'selected=""'; ?>>Admin</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <div class="col-sm-offset-2 col-sm-10">
                <?php if(isset($_POST['id'])){?>
               <button type="submit" name="btnsua" data-id_sua1="<?php if(isset($row_sua['id_tk'])) echo $row_sua['id_tk']  ?>" class="btn btn-default sua_nha_xuat_ban1">Sửa</button>
                <?php }else{ ?>
               <button type="submit" name="btnthem" class="btn btn-default them_thanh_vien_1">Thêm</button>
                <?php } ?>
            </div>
        </div>
    </div>
</form>
