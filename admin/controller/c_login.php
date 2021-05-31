<?php
include_once '../config.php';
include_once 'model/m_database.php';
class C_login{
    function Login(){
        include_once 'view/v_login.php';
    }
    function XLLogin(){
        session_start();
        $tendangnhap = $_POST['txtTenDangNhap'];
        $matkhau = $_POST['txtMatKhau'];
        $login = new M_database();
        $err = $login->Login($tendangnhap,$matkhau);
        include_once 'view/v_login.php';
    }
    function XLDangXuat(){
        session_start();
        session_destroy();
        header('location:login_admin');
    }
    function DoiMk(){
        include_once 'view/v_doi_mat_khau.php';
    }
    function XLDoiMk(){
        session_start();
        $matkhau = md5($_POST['txtTenDangNhap']);
        $matkhaumoi = md5($_POST['password']);
        if($matkhau == $_SESSION['admin']['matkhau']){
            $login = new M_database();
            $_SESSION['admin']['matkhau']=$matkhaumoi; 
            $login->DoiMK($matkhaumoi,$_SESSION['admin']['tendangnhap']);
            ob_start();
            ?>
            <script>
                alert('Đổi mật khẩu thành công');
                window.location = 'admin.html';
            </script>

            <?php
            $html = ob_get_clean();
            echo $html;
            die();
        }
        else {
            $err = 'mật khẩu không đúng';
            include_once 'view/v_doi_mat_khau.php';
        }
        
    }
}
$method = isset($_GET['dn'])?$_GET['dn']:'login';
$home = new C_login();
$home->$method();
