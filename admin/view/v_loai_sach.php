<input type="button" data-page1="<?php echo $page ?>" class="sua_loai btn btn-info" data-id_sua  data-toggle="modal" data-target="#myModal1" value="Thêm loại sách">
<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table_loai_hang">
        <table style="text-align: center" id="loaisach1"  class="table table-hover table-bordered table-striped" >
        <tr><td colspan="6"><h3 style="font-size:40px;color:#483D8B;font-weight: bold;text-shadow: 4px -1px 0px rgba(177, 181, 108, 1);">Danh Sách Loại Sách</h3>
</td></tr>
        <tr >
            <th style="text-align: center">Mã sách</th>
            <th style="text-align: center">Tên sách</th>
            <th style="text-align: center">Sửa </th>
            <th style="text-align: center">Xóa</th>
        </tr>
        <?php
        foreach ($row1 as $values){
        ?>
        <tr>
           
            <td><?php echo $values['id_loai'] ?></td>
            <td><?php  echo $values['TenLoai'] ?></td>
            <td>
                <input type="button" class="sua_loai btn btn-default" data-page1="<?php echo $page ?>" data-id_sua='<?php echo $values['id_loai'] ?>'  data-toggle="modal" data-target="#myModal1" value="Sửa">
            </td>
            <td>
                <input type="button" class="xoa_loai btn btn-default" data-id_xoa="<?php echo $values['id_loai'] ?>" value="Xóa">
        </tr>
        
        <?php 
        
           }
          
        ?>
    </table>
    </div>
</div >
</div>
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Loại sách</h4>
            </div>
            <div class="modal-body hien_sua_loai2" id="hien_sua_loai">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>

