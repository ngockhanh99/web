<form method="POST" id="loginForm" class="form-horizontal" action="admin-nhaxuatban-Them_sua_nha_xuat_ban-<?php echo $_POST['page'] ?><?php if(isset($id_sua)) echo '-'.$id_sua ?>">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tên NXB</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenNXB" value="<?php if(isset($row_sua['TenNXB'])) echo $row_sua['TenNXB']; ?>" class="form-control txtTenNXB" id="inputEmail3" placeholder="Tên nhà xuất bản">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Số điện thoại</label>
        <div class="col-sm-8">
            <input type="text" name="txtSDT" value="<?php if(isset($row_sua['SDTNXB'])) echo $row_sua['SDTNXB']; ?>" class="form-control txtSDT" id="inputPassword3" placeholder="Số điện thoại nhà xuất bản">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Địa chỉ</label>
        <div class="col-sm-8">
            <input type="text" name="txtDiaChi" value="<?php if(isset($row_sua['DiaChiNXB'])) echo $row_sua['DiaChiNXB']; ?>" class="form-control txtDiaChi" id="inputPassword3" placeholder="Địa chỉ nhà xuất bản">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <div class="col-sm-offset-2 col-sm-10">
                <?php if(isset($_POST['id'])){?>
               <button type="submit" name="btnsua" data-id_sua1="<?php if(isset($row_sua['id_nxb'])) echo $row_sua['id_nxb']  ?>" class="btn btn-default sua_nha_xuat_ban1">Sửa</button>
                <?php }else{ ?>
               <button type="submit" name="btnthem" class="btn btn-default them_nha_xuat_ban1">Thêm</button>
                <?php } ?>
            </div>
        </div>
    </div>
</form>
