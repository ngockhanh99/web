<form id="loginForm" class="form-horizontal" action="admin-sach-Them_sach-<?php echo $_POST['page'] ?><?php if(isset($row['TenSach'])) echo '-'.$row['id']; ?>" method="POST"  enctype="multipart/form-data" >
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tên sách</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenSach" value="<?php if(isset($row['TenSach'])) echo $row['TenSach']; ?>" class="form-control" id="inputEmail3" placeholder="Tên sách">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Nhà xuất bản</label>
        <div class="col-sm-8">
            <select class="form-control" name="txtNXB" >
                <option value="">Chọn nhà xuất bản</option>
                <?php
                    foreach ($row_nxb as $value_nxb){
                ?>
                <option  value="<?php echo $value_nxb['id_nxb'] ?>" <?php if(isset($row['TenSach']))if($value_nxb['id_nxb'] == $row1['id_nxb']) echo 'selected'; ?>>
                    <?php echo $value_nxb['TenNXB'] ?>
                </option>
                <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Tác giả</label>
        <div class="col-sm-8">
            <select class="form-control" name="txtTG">
                <option value="">Chọn tác giả</option>
                <?php
                    foreach ($row_tg as $value_tg){
                ?>
                <option value="<?php echo $value_tg['id_tg'] ?>" <?php if(isset($row['TenSach']))if($value_tg['id_tg'] == $row3['id_tg']) {echo 'selected';} ?>>
                    <?php echo $value_tg['TenTG'] ?>
                </option>
                <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Loại sách</label>
        <div class="col-sm-8">
            <select class="form-control" name="txtLoaiSach">
                <option value="">Chọn loại sách</option>
                <?php
                    foreach ($row_loai as $value_loai){
                ?>
                <option value="<?php echo $value_loai['id_loai']; ?>" <?php if(isset($row['TenSach']))if($value_loai['id_loai'] == $row2['id_loai']) echo 'selected'; ?>>
                    <?php echo $value_loai['TenLoai']; ?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Hình ảnh</label>
        <div class="col-sm-8">
            <?php if(isset($row['TenSach'])){ ?>
            <input type="file" name="file1" accept="image/*">
            <?php }else {?>
            <input type="file" name="file" accept="image/*">
            <?php }?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3"class="col-sm-4 control-label">Giá bìa</label>
        <div class="col-sm-8">
            <input type="text" name="txtGiaCu" value="<?php if(isset($row['TenSach'])) echo $row['GiaCu']; ?>" class="form-control" id="inputPassword3" placeholder="Giá">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3"    class="col-sm-4 control-label">Giá bán</label>
        <div class="col-sm-8">
            <input type="text" name="txtGia" value="<?php if(isset($row['TenSach'])) echo $row['GiaMoi']; ?>" class="form-control" id="inputPassword3" placeholder="Giá">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Số lượng</label>
        <div class="col-sm-8">
            <input type="text" name="txtSoLuong" value="<?php if(isset($row['TenSach'])) echo $row['SoLuong']; ?>" class="form-control" id="inputEmail3" placeholder="Sô lượng">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Số trang</label>
        <div class="col-sm-8">
            <input type="text" name="txtSoTrang" value="<?php if(isset($row['TenSach'])) echo $row['SoTrang']; ?>" class="form-control" id="inputPassword3" placeholder="Số trang">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
             <?php if(isset($_POST['id'])){?>
            <button type="submit" name="btn_sua_sach"  class="btn btn-default sua_sach1">Sửa</button>
            <?php }else{ ?>
            <button type="submit" name="btn_them_sach" class="btn btn-default them_sach1">Thêm</button>
            <?php } ?>
        </div>
    </div>
</form>