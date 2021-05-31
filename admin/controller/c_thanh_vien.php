<?php
    Class C_Thanh_vien{
        function Hien(){
            if (!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            $hien_nha_xuat_ban = new M_database();
            $row1=$hien_nha_xuat_ban->GetAllpt('taikhoan', 5, $page);
            include_once 'view/v_thanh_vien.php';
            $hien_nha_xuat_ban->PhanTrangLoai('taikhoan', 5, $page);
        }
        function Them_thanh_vien(){
            $page = $_GET['page'];
            if(isset($_POST['btnsua'])){
                $tendn=$_POST['txtTenDN'];
                $tenhienthi=$_POST['txtTenHienThi'];
                $sdt=$_POST['txtSDT'];
                $diachi=$_POST['txtDiaChi'];
                $email=$_POST['txtEmail'];
                $quyen=$_POST['txtQuyen'];
                $id_sua = $_GET['id'];
                $sua_nha_xuat_ban = new M_database();
                $sua_nha_xuat_ban->Update('taikhoan', array('TenDangNhap'=>$tendn,'TenHienThi'=>$tenhienthi,'SDT'=>$sdt,'DiaChi'=>$diachi,'Email'=>$email,'Quyen'=>$quyen), 'id_tk', $id_sua);
                header('location:admin-taikhoan-Hien-'.$page);
                
            }
            if(isset($_POST['btnthem'])){
                $tendn=$_POST['txtTenDN'];
                $tenhienthi=$_POST['txtTenHienThi'];
                $sdt=$_POST['txtSDT'];
                $diachi=$_POST['txtDiaChi'];
                $email=$_POST['txtEmail'];
                $quyen=$_POST['txtQuyen'];
                $them_nha_xuat_ban = new M_database();
                $them_nha_xuat_ban->Insert('taikhoan', array('TenDangNhap'=>$tendn,'TenHienThi'=>$tenhienthi,'SDT'=>$sdt,'DiaChi'=>$diachi,'Email'=>$email,'Quyen'=>$quyen));
                header('location:admin-taikhoan-Hien-'.$page);
            }
        }
        function Hien_sua_thanh_vien(){
            if(isset($_POST['id'])){
                $id_sua = $_POST['id'];
                $where = 'id_tk='.$id_sua;
                include_once '../model/m_database.php';
                $sua_nha_xuat_ban = new M_database();
                $row_sua = $sua_nha_xuat_ban->GetRow('taikhoan',$where );
            }
            include_once '../view/v_sua_thanh_vien.php';
        }
        function Xoa_thanh_vien(){
            if(isset($_POST['id'])){
                $id_xoa = $_POST['id'];
                include_once '../model/m_database.php';
                 $xoa = new M_database();
                 $xoa->Delete('taikhoan', 'id_tk', $id_xoa);
            }
        }
    }
    $hien = new C_Thanh_vien();
    $method = isset($_GET['method'])?$_GET['method']:'Hien';
    $hien->$method();
