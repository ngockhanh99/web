<?php
class C_gio_hang{
    function Hien_gio_hang(){
        $this->render('v_gio_hang', []);
    }
    function XL_gio_hang(){
        $id = $_GET['id'];
        $soluong = isset($_POST['txtSoLuong'])?$_POST['txtSoLuong']:1;
        $home = new M_database();
        $row = $home->Get_Sach_Idsach($id);
        
        session_start();
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
          
            if($_SESSION['giohang'][$id]['id'] == $id){
                $_SESSION['giohang'][$id]['soluong'] +=$soluong;
            }
            
            else{
                $_SESSION['giohang'][$id]['id'] = $id;
                $_SESSION['giohang'][$id]['soluong'] = $soluong;
                $_SESSION['giohang'][$id]['dongia'] = $row['GiaMoi'];
                $_SESSION['giohang'][$id]['hinhanh'] = $row['HinhAnh'];
                $_SESSION['giohang'][$id]['tensach'] = $row['TenSach'];
            }
            
        }
        else {
            $_SESSION['giohang'] = array();
            $_SESSION['giohang'][$id]['id'] = $id;
            $_SESSION['giohang'][$id]['soluong'] = $soluong;
            $_SESSION['giohang'][$id]['dongia'] = $row['GiaMoi'];
            $_SESSION['giohang'][$id]['hinhanh'] = $row['HinhAnh'];
            $_SESSION['giohang'][$id]['tensach'] = $row['TenSach'];
        }
        header('location:gio-hang');
    }
    function Xoa(){
        $id_xoa = $_GET['id'];
        session_start();
        unset($_SESSION['giohang'][$id_xoa]);
        ob_start();
       
        $html = ob_get_clean();
   
       header('location:gio-hang');
            
    }
    function Sua(){
        $soluong = $_POST['txtSoLuong'];
        echo "$soluong";
        foreach ($soluong as $key => $val){
            if($val<=0){
                unset($_SESSION['giohang'][$key]);
            }
            else{
                $_SESSION['giohang'][$key]['soluong']=$val;
            }
        }
        header('location:gio-hang');
    }
    function XL_Dat_Hang(){
        $hoten = $_POST['txtHoTen'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSoDienThoai'];
        $diachi = $_POST['txtDiaChi'];
        $ghichu = isset($_POST['txtGhiChu'])?$_POST['txtGhiChu']:'';
        $_SESSION['user']['name']=$hoten;
        $_SESSION['user']['email']=$email;
        $_SESSION['user']['sdt']=$sdt;
        $_SESSION['user']['diachi']=$diachi;
        $_SESSION['user']['ghichu']=$ghichu;
        session_start();
        $ngay = date("Y-m-d h:i:sa");
        $arr =array('TenKH'=>$hoten,'Email'=>$email,'SDT'=>$sdt,'DiaChi'=>$diachi,'GhiChu'=>$ghichu,'ThanhTien'=>'10','NgayDat'=>$ngay,'TrangThai'=>1);
        $home = new M_database();
        $home->Dat_Hang($arr, $_SESSION['giohang']);
        unset($_SESSION['giohang']);
        ob_start();
        ?>
        <script>
            alert('Đặt hàng thành công!');
            window.location = 'book-store';
        </script>
        <?php
        $html = ob_get_clean();
        echo $html;
        //Echo "<h2>Đặt hàng thành công</h2>";
    }
    public function render($name, $VIEW_DATA = array())
    {
        //Tự động sinh các biến cho VIEW_DATA
        if (is_array($VIEW_DATA))
        {
            foreach ($VIEW_DATA as $key => $val)
            {
                $$key = $val;
            }
        }
        include_once 'site/view/pages/v_header.php';
        include_once "site/view/$name.php";
        include_once 'site/view/pages/v_footer.php';
    }
}
$method = isset($_GET['method'])?$_GET['method']:'Hien_gio_hang';
$home = new C_gio_hang();
$home->$method();