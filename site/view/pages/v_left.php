<section class="span3">
    <div class="side-holder">
        <article class="banner-ad">
            <img src="public/images/khuyenmai.jpg" alt=""/>
        </article>
    </div>
    <div class="side-holder">
        <article class="shop-by-list">
            <h2>Danh mục sản phẩm</h2>
            <div class="side-inner-holder">
                <strong class="title">Thể loại</strong>
                <ul class="side-list">
                    <?php
                    foreach ($ds_loai as $val){
                    ?>
                    <li><a href="book-store-Sach_theo_loai-<?php echo $val['id_loai'] ?>"><?php echo $val['TenLoai'] ?></a></li>
                    <?php } ?>
                </ul>
                
                <strong class="title">Giá</strong>
                <ul class="side-list">
                    <li><a href="book-store-Sach_theo_gia-1">Từ 0đ - 500,000đ</a></li>
                    <li><a href="book-store-Sach_theo_gia-2">Từ 500,000đ - 1,000,000đ</a></li>
                    <li><a href="book-store-Sach_theo_gia-3">Lớn hơn 1,000,000đ</a></li>
                </ul>
                <strong class="title">Tác giả</strong>
                <ul class="side-list">
                    <?php
                    foreach ($ds_tac_gia as $val1){
                    ?>
                    <li><a href="book-store-Sach_theo_tac_gia-<?php echo $val1['id_tg'] ?>"><?php echo $val1['TenTG'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </article>
    </div>


    <div class="side-holder">
        <article class="l-reviews">
            <h2>Sách xem nhiều nhất</h2>
            <div class="side-inner-holder">
                <?php
                    foreach ($ds_xem_nhieu as $val){
                ?>
                <article class="r-post sach_xem_nhieu">
                    <div class="r-img-title">
                        <a href="book-store-chitiet-<?php echo $val['id']?>"><img src="upload/<?php echo $val['HinhAnh'] ?>"/></a>
                        <div class="r-det-holder span6">
                            <strong class="r-author">Tên sách: <a href="book-store-chitiet-<?php echo $val['id']?>"><?php echo $val['TenSach'] ?></a></strong>
                        </div>
                        <div class="r-det-holder span6">
                            <span class="r-by">Tên tác giả:<a href="book-store-Sach_theo_tac_gia-<?php echo $val['id_tg'] ?>"><?php echo $val['TenTG'] ?></a></span>
                            <span class="r-by">Giá: <?php echo number_format($val['GiaMoi'],0,'.',',') ?>đ</span>
                            <span class="r-by">Số lượt xem: <?php echo $val['SoLuotXem'] ?></span>
                        </div>
                    </div>
                </article>
                <?php
                    }
                ?>
            </div>
        </article>
    </div>
</section>