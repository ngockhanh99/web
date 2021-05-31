<?php
include_once 'config.php';
include_once 'site/model/m_database.php';
class C_login{
    function Login(){
        include_once 'site/view/v_login.php';
    }
    function XLLogin(){
        session_start();
        $tendangnhap = $_POST['txtTenDangNhap'];
        $matkhau = $_POST['txtMatKhau'];
        $login = new M_database();
        $err = $login->Login($tendangnhap,$matkhau);
        include_once 'site/view/v_login.php';
    }
    function XLDangXuat(){
        session_start();
        unset($_SESSION['user']);
        header('location:login');
    }
    function Register(){
        include_once 'site/view/v_register.php';
    }
    function XLRegister(){
        $hoten = $_POST['txtHoTen'];
        $tendangnhap = $_POST['txtTenDangNhap'];
        $matkhau1 = $_POST['password'];
        $matkhau2 = $_POST['confirm_password'];
        $matkhau = md5($matkhau1);
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSoDienThoai'];
        $diachi = $_POST['txtDiaChi'];
        $them = new M_database();
        $row = $them->GetAll('taikhoan');
        $kt = FALSE;
        foreach ($row as $val){
            if($val['TenDangNhap'] == $tendangnhap){
                $kt = true;
                $err1 = 'Tên đăng nhập đã tồn tại';
            }
        }
        if($kt == TRUE){
        include_once 'site/view/v_register.php';
        }
        if($kt == FALSE){
            $arr =array('TenHienThi'=>$hoten,'TenDangNhap'=>$tendangnhap,'MatKhau'=>$matkhau,'Email'=>$email,'SDT'=>$sdt,'DiaChi'=>$diachi,'Quyen'=>2);
            $them->Insert('taikhoan', $arr);
            ob_start();
            ?>
            <script>
                alert('đăng kí thành công');
                window.location = 'login';
            </script>

            <?php
            $html = ob_get_clean();
            echo $html;
            die();
        }
    }
    function DoiMk(){
        include_once 'site/view/v_doi_mat_khau.php';
    }
    function XLDoiMk(){
        session_start();
        $matkhau = md5($_POST['txtTenDangNhap']);
        $matkhaumoi = md5($_POST['password']);
        if($matkhau == $_SESSION['user']['matkhau']){
            $login = new M_database();
            $_SESSION['admin']['matkhau']=$matkhaumoi; 
            $login->DoiMK($matkhaumoi,$_SESSION['user']['tendangnhap']);
            ob_start();
            ?>
            <script>
                alert('Đổi mật khẩu thành công');
                window.location = 'book-store';
            </script>

            <?php
            $html = ob_get_clean();
            echo $html;
            die();
        }
        else {
            $err = 'mật khẩu không đúng';
            include_once 'site/view/v_doi_mat_khau.php';
        }
        
    }
}
$method = isset($_GET['dn'])?$_GET['dn']:'login';
$home = new C_login();
$home->$method();
