<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location:login_admin');
    }
    include_once '../config.php';
    include_once 'view/v_head1.php';
    include_once 'model/m_database.php';
    include_once 'Classes/PHPexcel.php';
    if(!isset($_GET['sk'])){
        include_once 'controller/c_sach.php';
    }
    else {
        $sk=$_GET['sk'];
        switch ($sk)
        {
            case 'loaisach':
                include_once 'controller/c_loai_sach.php';
                break;
            case 'tacgia':
                include_once 'controller/c_tac_gia.php';
                break;
            case 'sach':
                include_once 'controller/c_sach.php';
                break;
            case 'nhaxuatban':
                include_once 'controller/c_nha_xuat_ban.php';
                break;
            case 'donhang':
                include_once 'controller/c_don_hang.php';
                break;
            case 'chitiethoadon':
                include_once 'controller/c_chi_tiet_hoa_don.php';
                break;
            case 'taikhoan':
                include_once 'controller/c_thanh_vien.php';
                break;
        }
    }
    include_once 'view/v_footer1.php';