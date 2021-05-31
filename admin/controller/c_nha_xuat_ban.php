<?php
    Class C_nha_xuat_ban{
        function Hien(){
            if (!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            $hien_nha_xuat_ban = new M_database();
            $row1=$hien_nha_xuat_ban->GetAllpt('nhaxuatban', 5, $page);
            include_once 'view/v_nha_xuat_ban.php';
            $hien_nha_xuat_ban->PhanTrangLoai('nhaxuatban', 5, $page);
        }
        function Them_sua_nha_xuat_ban(){
            $page = $_GET['page'];
            if(isset($_POST['btnsua'])){
                $ten_nxb=$_POST['txtTenNXB'];
                $dia_chi_nxb=$_POST['txtDiaChi'];
                $sdt_nxb=$_POST['txtSDT'];
                $id_sua = $_GET['id'];
                $sua_nha_xuat_ban = new M_database();
                $sua_nha_xuat_ban->Update('nhaxuatban', array('tenNXB'=>$ten_nxb,'DiaChiNXB'=>$dia_chi_nxb,'SDTNXB'=>$sdt_nxb), 'id_nxb', $id_sua);
                header('location:admin-nhaxuatban-Hien-'.$page);
                
            }
            if(isset($_POST['btnthem'])){
                $ten_nxb=$_POST['txtTenNXB'];
                $dia_chi_nxb=$_POST['txtDiaChi'];
                $sdt_nxb=$_POST['txtSDT'];
                $them_nha_xuat_ban = new M_database();
                $them_nha_xuat_ban->Insert('nhaxuatban', array('tenNXB'=>$ten_nxb,'DiaChiNXB'=>$dia_chi_nxb,'SDTNXB'=>$sdt_nxb));
                header('location:admin-nhaxuatban-Hien-'.$page);
            }
        }
        function Hien_sua_nha_xuat_ban(){
            if(isset($_POST['id'])){
                $id_sua = $_POST['id'];
                $where = 'id_nxb='.$id_sua;
                include_once '../model/m_database.php';
                $sua_nha_xuat_ban = new M_database();
                $row_sua = $sua_nha_xuat_ban->GetRow('nhaxuatban',$where );
            }
            include_once '../view/v_sua_nha_xuat_ban.php';
        }
        function Xoa_nha_xuat_ban(){
            if(isset($_POST['id'])){
                $id_xoa = $_POST['id'];
                include_once '../model/m_database.php';
                 $xoa = new M_database();
                 $xoa->Delete('nhaxuatban', 'id_nxb', $id_xoa);
            }
        }
    }
    $hien = new C_nha_xuat_ban();
    $method = isset($_GET['method'])?$_GET['method']:'Hien';
    $hien->$method();
