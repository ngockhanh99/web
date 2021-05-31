
<input type="button" data-page="<?php echo $page ?>" class="sua_sach btn btn-info" data-toggle="modal" data-target="#myModal" value="Thêm Sách">

<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table_don_hang ">
        <table style="text-align: center" class="table table-hover table-bordered table-striped table-warning" >
        <tr><td colspan="12">
        <h3 style="margin-top:0px;font-size:40px;color:#d58512;font-weight: bold;text-shadow: 4px -1px 0px rgba(177, 181, 108, 1);">Danh Sách sách</h3>
        <form style="float:right;" action="admin-sach-xlxuatfile-0" method="POST">
            <button type="submit" class="btn btn-success" name="export"><i class="fa fa-download" style="margin-right:2px"></i>Xuất File</button>
        </form>
        </td>
        </tr>
        <tr style="color:#ffffff;background-color: #00c0ef;font-family: Helvetica;font-size:14px">
            <th style="text-align: center;color:#ffffff;padding-top:20px ">Mã Sách</th>
            <th style="text-align: center;padding-top:20px ">Tên Sách</th>
            <th style="text-align: center;color:#ffffff; padding-top:20px" > Nhà Xuất Bản </th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Tác Giả</th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Loại</th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Hình Ảnh</th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Giá Bìa</th>
            <th style="text-align: center;color:#ffffff;padding-top:15px">Giá Bán</th>
            <th style="text-align: center;color:#ffffff;padding-top:15px">Số Lượng</th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Số Trang</th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Sửa </th>
            <th style="text-align: center;color:#ffffff;padding-top:20px">Xóa</th>
        </tr>
        <?php
        foreach ($row1 as $values){
        ?>
        <tr>
            <td><?php echo $values['id'] ?></td>
            <td><?php echo $values['TenSach'] ?></td>
            <td><?php echo $values['TenNXB'] ?></td>
            <td><?php echo $values['TenTG'] ?></td>
            <td><?php echo $values['TenLoai'] ?></td>
            <td><img src="<?php echo FULL_SITE_ROOT ?>upload/<?php echo $values['HinhAnh'] ?>" height="60px" width="40px"></td>
            <td><?php echo number_format($values['GiaCu'], 0,'.',',') ?></td>
            <td><?php echo number_format($values['GiaMoi'],0,'.',',') ?></td>
            <td><?php echo $values['SoLuong'] ?></td>
            <td><?php echo $values['SoTrang'] ?></td>
            <td>
                <input type="button" data-page="<?php echo $page ?>" class="sua_sach btn btn-default" data-id_sua="<?php echo $values['id'] ?>" name="" data-toggle="modal" data-target="#myModal" value="Sửa">
            </td>
            <td>
                <input type="button" class="xoa_sach btn btn-default" data-id_xoa="<?php echo $values['id'] ?>" value="Xóa">
            </td>
        </tr>
        <?php 
           }
        ?>
    </table>
    </div>
</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thêm Sách</h4>
            </div>
            <div class="modal-body" id="hien_sua_sach">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>
