<form id="loginForm" class="form-horizontal" action="admin-loaisach-Them_sua_loai-<?php echo $page ?><?php if(isset($tenloai)) echo '-'.$id_sua;?>"  method="POST" >
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tên Loại</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenLoai" value="<?php if(isset($tenloai)) echo $tenloai; ?>" class="form-control txtTenLoai" id="inputEmail3" placeholder="Tên Loại">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php if(isset($tenloai)) { ?>
            <button type="submit" name="btnsua" data-id_sua1='<?php if(isset($tenloai)) echo $id_sua; ?>' class="btn btn-default sua_loai1">Sửa</button>
            <?php }else{ ?>
            <button type="submit" name="btnthem"  class="btn btn-default them_loai1">Thêm</button>
            <?php } ?>
        </div>
    </div>
</form>