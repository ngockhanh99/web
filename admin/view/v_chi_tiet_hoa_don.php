<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table_nha_xuat_ban">
        <table style="text-align: center" class="table table-hover table-bordered table-striped" >
            <tr><td colspan="6"><h3 style="font-size:40px;color:#483D8B;font-weight: bold;text-shadow: 4px -1px 0px rgba(177, 181, 108, 1);">Danh Sách Chi Tiết</h3>
                </td>
            </tr>
            <tr>
                <th style="text-align: center">Mã hóa đơn</th>
                <th style="text-align: center">Tên sách</th>
                <th style="text-align: center">Đơn giá</th>
                <th style="text-align: center">Số lượng</th>
                <!-- <th style="text-align: center">Sửa </th>
                <th style="text-align: center">Xóa</th> -->
            </tr>
            <?php
            foreach ($row1 as $value ) {
                ?>
                <tr>
                    <td><?php echo $value['id_hd'] ?></td>
                    <td><?php echo $value['tenSach']  ?></td>
                    <td><?php echo $value['DonGia']  ?></td>
                    <td><?php echo $value['SoLuong']  ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</div>
