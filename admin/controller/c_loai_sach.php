<?php
    class C_loai_sach{
        function Hien(){
            if(!isset($_GET['page'])){
                $page = 1;
            }
             else {
                 $page = $_GET['page'];
            }
            $hien_loai_sach = new M_database();
            $row1=$hien_loai_sach->GetAllpt('loaisach', 5, $page);
            include_once 'view/v_loai_sach.php';
            $hien_loai_sach->PhanTrangLoai('loaisach', 5, $page);
        }
        function Them_sua_loai(){
            $page = $_GET['page'];
            if(isset($_POST['btnsua'])){
                $id_sua1 = $_GET['id'];
                $ten = $_POST['txtTenLoai'];
                $sua = new M_database();
                $sua->Update('loaisach', array('TenLoai'=>$ten), 'id_loai', $id_sua1);
                header('Location:admin-loaisach-Hien-'.$page);
            }
            if(isset($_POST['btnthem'])){
                $ten_loai = $_POST['txtTenLoai'];
                $them_loai_sach = new M_database();
                $them_loai_sach->Insert('loaisach', array('TenLoai'=>$ten_loai));
                header('Location:admin-loaisach-Hien-'.$page);
            }
        }
        function Xoa_loai(){
            if(isset($_POST['id'])){
                $id_xoa_loai = $_POST['id'];
                include_once '../model/m_database.php';
                $xoa_loai_sach = new M_database();
                $xoa_loai_sach->Delete('loaisach', 'id_loai', $id_xoa_loai);
            }
        }
        function Hien_sua_loai(){
            $page= $_POST['page'];
            $id_sua = isset($_POST['id'])? $_POST['id']: 0;
            if($id_sua>0){
                include_once '../model/m_database.php';
                $hien_sua = new M_database();
                $where = 'id_loai='.$id_sua;
                $row = $hien_sua->GetRow('loaisach', $where);
                $tenloai = $row['TenLoai'];
            }
            include_once '../view/v_sua_loai_sach.php';
        }
    }
    $loai_sach = new C_loai_sach();
    $method = isset($_GET['method'])?$_GET['method']:'Hien';
    $loai_sach->$method();

