<section class="span9 first">
    <?php
    include_once 'site/view/pages/v_banner.php';
    ?>
    <div id="right">
        <h2>Bản Đồ</h2>
        <section class="map-holder">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8281020381737!2d105.82618031444541!3d21.039562992786326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab09e5e938cb%3A0xc63d5d44826b3df6!2zMTAgSG_DoG5nIEhvYSBUaMOhbSwgVGjhu6V5IEtodcOqLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1467794722447" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <div class="span6 c-form-holder first">
            <h3>Nhập thông tin liên hệ</h3>
            <form class="form-horizontal" method="post">
                <div class="control-group col-xs-12">
                    <label class="control-label" for="inputEmail">Tên <sup>*</sup></label>
                    <div class="controls col-xs-12">
                        <input type="text" name="name" id="inputEmail" placeholder="">
                    </div>
                </div>
                <div class="control-group col-xs-12">
                    <label class="control-label" for="inputPassword">Email <sup>*</sup></label>
                    <div class="controls col-xs-12">
                        <input type="text" name="email" id="inputPassword" placeholder="">
                    </div>
                </div>
                <div class="control-group col-xs-12">
                    <label class="control-label" for="inputPassword">Tiêu đề <sup>*</sup></label>
                    <div class="controls col-xs-12">
                        <input type="text" name="subject" id="inputPassword" placeholder="">
                    </div>
                </div>
                <div class="control-group col-xs-12">
                    <label class="control-label" for="inputPassword">Tin nhắn <sup>*</sup></label>
                    <div class="controls  col-md-8 col-xs-11">
                        <textarea name="comments" id="comments_area" cols="2" rows="20"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="more-btn2">Gửi</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="span6">
            <h3>Thông tin liên lạc</h3>
            <p>Địa chỉ: Số 10 - Hoàng Hoa Thám - Hà Nội</p>
            <p>Điện thoại: <a href="tel://01213111994">0121.311.1994</a></p>  
            <p>Email:Ngockhanh@gmail.com 
            </p>

        </div>
    </div>
</section>
<?php
include_once 'site/view/pages/v_left.php';
