<?php
    Class C_don_hang{
        function Hien(){
            if (!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            $hien_nha_xuat_ban = new M_database();
            $row1=$hien_nha_xuat_ban->GetAllpt('donhang', 5, $page);
            include_once 'view/v_don_hang.php';
            $hien_nha_xuat_ban->PhanTrangLoai('donhang', 5, $page);
        }
        function Them_don_hang(){
            $page = $_GET['page'];
            if(isset($_POST['btnthem'])){
                $tenkh=$_POST['txtTenKH'];
                $sdt=$_POST['txtSDT'];
                $diachi=$_POST['txtDiaChi'];
                $email=$_POST['txtEmail'];
                $trangthai=$_POST['txtTrangThai'];
                $ghichu = isset($_POST['txtGhiChu'])?$_POST['txtGhiChu']:'';
                $ngay = date("Y-m-d h:i:sa");
                $arr =array('TenKH'=>$tenkh,'Email'=>$email,'SDT'=>$sdt,'DiaChi'=>$diachi,'GhiChu'=>$ghichu,'ThanhTien'=>0,'NgayDat'=>$ngay,'TrangThai'=>$trangthai);
                $them_nha_xuat_ban = new M_database();
                $them_nha_xuat_ban->Insert('donhang', $arr);
                header('location:admin-donhang-Hien-'.$page);
            }
        }
        function Hien_sua_don_hang(){
            include_once '../view/v_sua_don_hang.php';
        }
        function Xoa_don_hang(){
            if(isset($_POST['id'])){
                $id_xoa = $_POST['id'];
                include_once '../model/m_database.php';
                 $xoa = new M_database();
                 $xoa->Delete('donhang', 'id_hd', $id_xoa);
            }
        }
    }
    $hien = new C_don_hang();
    $method = isset($_GET['method'])?$_GET['method']:'Hien';
    $hien->$method();
