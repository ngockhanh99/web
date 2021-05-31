<section class="span9 first">
<?php
    include_once 'site/view/pages/v_banner.php'; 
?>
    <div id="right">
        <section class="b-detail-holder">
            <article class="title-holder">
                <div class="span6">
                    <h2><?php echo $row['TenSach'] ?></h2>
                </div>

            </article>
            <div class="book-i-caption">

                <div class="span6 b-img-holder">
                    <span class='zoom' id='ex1'> <img src='upload/<?php echo $row['HinhAnh'] ?>' height="219" width="300" id='jack' alt=''/></span>
                </div>


                <div class="span6">
                    <strong class="title">Tổng quan</strong>
                    <p class="text_chi_tiet">Nhà xuất bản: <a href=""><?php echo $row['TenNXB'] ?></a></p>
                    <p class="text_chi_tiet">Tác giả: <a href=""><?php echo $row['TenTG'] ?></a></p>
                    <p class="text_chi_tiet">Giá bìa: <?php echo number_format($row['GiaCu'],0,'.',',') ?>₫</p>
                    <p class="text_chi_tiet">Giá bán: <span class="giamoi_chitiet"><?php echo number_format($row['GiaMoi'],0,'.',',') ?> ₫</span></p>
                    <p class="text_chi_tiet">Số trang: <?php echo $row['SoTrang'] ?> trang</p>
                    <div class="comm-nav">
                        <strong class="title2">Số lượng mua</strong>
                        <ul><form method="POST" action="gio-hang-XL_gio_hang-<?php echo $row['id'] ?>">
                                <li><input name="txtSoLuong" class="txtSoLuong" type="text" value="1" required pattern="[0-9]{1,3}" title="Số lượng phải là số và nhỏ hơn 4 kí tự"/></li>
                                <li><input type="submit" value="Thêm vào giỏ hàng" class="more-btn" name="giohang"/></li>
                            </form>
                        </ul>
                    </div>
                </div>

            </div>
            <section class="related-book">
                <div class="heading-bar">
                    <h2>Sách liên quan</h2>
                    <span class="h-line"></span>
                </div>
                <div class="slider6">
                    <?php
                    
                    foreach ($row2 as $val){
                    ?>
                    <div class="slide">
                        <a href="book-store-chitiet-<?php echo $val['id']?>"><img src="upload/<?php echo $val['HinhAnh'] ?>" alt="" class="pro-img"/></a>
                        <h4><a href="book-store-chitiet-<?php echo $val['id']?>">
                            <?php 
                                if(strlen($val['TenSach']) < 20) 
                                    echo $val['TenSach'];  
                                else 
                                    echo substr($val['TenSach'],0,19).'...';
                            ?>
                            </a></h4>
                        <div class="cart-price">
                            <a class="cart-btn2" href="gio-hang">Add to Cart</a>
                            <span class="price"><?php echo number_format($val['GiaMoi'],0,'.',',') ?> ₫</span>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </section>


            <section class="reviews-section">
                <figure class="left-sec">
                    <div class="r-title-bar">
                        <strong>Hỏi, Đáp Về Sản Phẩm</strong>
                    </div>
                    <ul class="review-list">
                        <li>
                            <input name="" type="text" placeholder="Hãy đặt câu hỏi..."/>
                        </li>
                        <p>Các câu hỏi thường gặp về sản phẩm:</p>
                        <p>- Chế độ bảo hành cùng cách thức vận chuyển sản phẩm này thế nào?</p>
                        <p>- Kích thước sản phẩm này ?</p>
                        <p>- Sản phẩm này có dễ dùng không ?</p>
                        <p><span>Các câu hỏi liên quan đến sản phẩm hư hỏng, cần đổi trả, v.v ... vui lòng truy cập trang hỗ trợ</span></p>
                    </ul>
                    <a href="#" class="grey-btn">Gửi câu hỏi</a>
                </figure>
                <figure class="right-sec">
                    <div class="r-title-bar">
                        <strong>Khách Hàng Nhận Xét</strong>
                    </div>
                    <ul class="review-f-list">
                        <li>
                            <label>Tên của bạn *</label>
                            <input name="" type="text"/>
                        </li>
                        <li>
                            <label>Tóm tắt đánh giá của bạn *</label>
                            <input name="" type="text"/>
                        </li>
                        <li>
                            <label>Đánh giá của bạn *</label>
                            <textarea name="" cols="2" rows="20"></textarea>
                        </li>

                    </ul>
                    <a href="#" class="grey-btn left-btn">Gửi nhận xét</a>
                </figure>
            </section>

        </section>
    </div>
</section>
<?php
include_once 'site/view/pages/v_left.php';