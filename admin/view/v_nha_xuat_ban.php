<input type="button" data-page="<?php echo $page ?>" class="sua_nha_xuat_ban btn btn-info" data-toggle="modal" data-target="#myModal" value="Thêm Nhà Xuất Bản">
<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table_nha_xuat_ban">
        <table style="text-align: center" class="table table-hover table-bordered table-striped" >
            <tr><td colspan="6"><h3 style="font-size:40px;color:#483D8B;font-weight: bold;text-shadow: 4px -1px 0px rgba(177, 181, 108, 1);">Danh Sách Nhà Xuất Bản</h3>
</td></tr>
            <tr >
                <th style="text-align: center">Mã nhà xuất bản</th>
                <th style="text-align: center">Tên nhà xuất bản</th>
                <th style="text-align: center">Số điện thoại NXB</th>
                <th style="text-align: center">Địa chỉ NXB</th>
                <th style="text-align: center">Sửa </th>
                <th style="text-align: center">Xóa</th>
            </tr>
            <?php
            foreach ($row1 as $value ) {
                ?>
                <tr>
                    <td><?php echo $value['id_nxb'] ?></td>
                    <td><?php echo $value['TenNXB']  ?></td>
                    <td><?php echo $value['SDTNXB']  ?></td>
                    <td><?php echo $value['DiaChiNXB']  ?></td>
                    <td>
                        <input type="button" data-page="<?php echo $page ?>" class="sua_nha_xuat_ban btn btn-default" data-id_sua="<?php echo $value['id_nxb'] ?>" name="" data-toggle="modal" data-target="#myModal" value="Sửa">
                    </td>
                    <td>
                        <input type="button" class="xoa_nha_xuat_ban btn btn-default" data-id_xoa="<?php echo $value['id_nxb'] ?>" value="Xóa">
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
                <h4 class="modal-title">Nhà xuất bản</h4>
            </div>
            <div class="modal-body" id='hien_sua_nha_xuat_ban'>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>