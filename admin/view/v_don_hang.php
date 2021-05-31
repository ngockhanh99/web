
<input type="button" data-page="<?php echo $page ?>" class="sua_don_hang btn btn-info" data-toggle="modal" data-target="#myModal" value="Thêm Dơn hàng">
<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table_don_hang">
        <table style="text-align: center;" class="table table-hover table-bordered table-striped table-responsive" >
            <tr><td colspan="10"><h3>Danh Sách đơn hàng</h3></td></tr>
            <tr >
                <th style="text-align: center">Mã</th>
                <th style="text-align: center">Tên khách hàng</th>
                <th style="text-align: center">Địa chỉ</th>
                <th style="text-align: center">Số điện thoại</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Ghi chú</th>
                <th style="text-align: center">ngày đặt</th>
                <th style="text-align: center">Thành tiền</th>
                <th style="text-align: center">Trang thái</th>
                <th style="text-align: center">Xóa</th>
            </tr>
            <?php
            foreach ($row1 as $value ) {
                ?>
                <tr>
                    <td><?php echo $value['id_hd'] ?></td>
                    <td><?php echo $value['TenKH']  ?></td>
                    <td><?php echo $value['DiaChi']  ?></td>
                    <td><?php echo $value['SDT']  ?></td>
                    <td><?php echo $value['Email']  ?></td>
                    <td><?php echo $value['GhiChu']  ?></td>
                    <td><?php echo $value['NgayDat']  ?></td>
                    <td><?php echo $value['ThanhTien']  ?></td>
                    <td><?php if($value['TrangThai'] == 1) echo 'Chưa chuyển'; else echo 'Đã chuyển'   ?></td>
                    <td>
                        <input type="button" class="xoa_don_hang btn btn-default" data-id_xoa="<?php echo $value['id_hd'] ?>" value="Xóa">
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
            <div class="modal-body" id='hien_sua_don_hang'>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>