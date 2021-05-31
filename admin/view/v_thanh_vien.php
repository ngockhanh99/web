<input type="button" data-page="<?php echo $page ?>" class="sua_thanh_vien btn btn-info" data-toggle="modal" data-target="#myModal" value="Thêm thành viên">
<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table_thanh_vien">
        <table style="text-align: center" class="table table-hover table-bordered table-striped" >
            <tr><td colspan="9"><h3>Danh Sách Thành Viên</h3></td></tr>
            <tr >
                <th style="text-align: center">Mã</th>
                <th style="text-align: center">Tên DN</th>
                <th style="text-align: center">Tên hiển thị</th>
                <th style="text-align: center">Địa chỉ</th>
                <th style="text-align: center">Số điện thoại</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Quyền</th>
                <th style="text-align: center">Sửa </th>
                <th style="text-align: center">Xóa</th>
            </tr>
            <?php
            foreach ($row1 as $value ) {
                ?>
                <tr>
                    <td><?php echo $value['id_tk'] ?></td>
                    <td><?php echo $value['TenDangNhap']  ?></td>
                    <td><?php echo $value['TenHienThi']  ?></td>
                    <td><?php echo $value['DiaChi']  ?></td>
                    <td><?php echo $value['SDT']  ?></td>
                    <td><?php echo $value['Email']  ?></td>
                    <td><?php echo $value['Quyen']  ?></td>
                    <td>
                        <input type="button" data-page="<?php echo $page ?>" class="sua_thanh_vien btn btn-default" data-id_sua="<?php echo $value['id_tk'] ?>" name="" data-toggle="modal" data-target="#myModal" value="Sửa">
                    </td>
                    <td>
                        <input type="button" class="xoa_thanh_vien btn btn-default" data-id_xoa="<?php echo $value['id_tk'] ?>" value="Xóa">
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thành viên</h4>
            </div>
            <div class="modal-body" id='hien_sua_thanh_vien'>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>