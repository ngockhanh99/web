<form id="loginForm" class="form-horizontal" action="admin-tacgia-Them_sua_tac_gia-<?php echo $_POST['page'] ?><?php if(isset($_POST['id'])) echo '-'.$id ?>" method="POST">
    <div class="form-group">
        <label for="inputEmail3"   class="col-sm-4 control-label">Tên Tác giả</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenTG" value="<?php if(isset($_POST['id'])) echo $ten ?>" class="form-control txtTenTG" id="inputEmail3">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Số điện thoại</label>
        <div class="col-sm-8">
            <input type="text" name="txtSDT" value="<?php if(isset($_POST['id'])) echo $dienthoai ?>" class="form-control txtSDT" id="inputPassword3">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Địa chỉ</label>
        <div class="col-sm-8">
            <input type="text" name="txtDiaChi" value="<?php if(isset($_POST['id'])) echo $diachi ?>" class="form-control txtDiaChi" id="inputPassword3">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php if(isset($_POST['id'])){?>
            <button type="submit" name="btnsua"  data-id_sua1="<?php if(isset($_POST['id'])) echo $id  ?>" class="btn btn-default sua_tac_gia1">Sửa</button>
            <?php }else{ ?>
            <button type="submit" name="btnthem"  class="btn btn-default them_tac_gia1">Thêm</button>
            <?php } ?>
        </div>
    </div>
</form>