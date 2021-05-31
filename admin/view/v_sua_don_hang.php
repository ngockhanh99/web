<form method="POST" id="loginForm" class="form-horizontal" action="admin-donhang-Them_don_hang-<?php echo $_POST['page'] ?>">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Tên Khách hàng</label>
        <div class="col-sm-8">
            <input type="text" name="txtTenKH" class="form-control txtTenNXB" id="inputEmail3" placeholder="Tên khách hàng">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Số điện thoại</label>
        <div class="col-sm-8">
            <input type="text" name="txtSDT"  class="form-control txtSDT" id="inputPassword3" placeholder="Số điện thoại ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Địa chỉ</label>
        <div class="col-sm-8">
            <input type="text" name="txtDiaChi"  class="form-control txtDiaChi" id="inputPassword3" placeholder="Địa chỉ ">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
            <input type="text" name="txtEmail" class="form-control txtSDT" id="inputPassword3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Ghi chú</label>
        <div class="col-sm-8">
            <input type="text" name="txtGhiChu" class="form-control txtSDT" id="inputPassword3" placeholder="ghi chú">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label">Trạng thái</label>
        <div class="col-sm-8">
            <select class="form-control" name="txtTrangThai">
                <option value="1" <?php if(isset($row_sua['Quyen']) && ($row_sua['Quyen']) == 1) echo 'selected=""'; ?>>Chưa chuyển</option>
                <option value="2" <?php if(isset($row_sua['Quyen']) && ($row_sua['Quyen']) == 2) echo 'selected=""'; ?>>Dã chuyển</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btnthem" class="btn btn-default them_don_hang1">Thêm</button>
            </div>
        </div>
    </div>
</form>
