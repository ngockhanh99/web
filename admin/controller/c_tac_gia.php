<?php
    class C_tac_gia{
        function Hien(){
            if(!isset($_GET['page']))
            {
                $page = 1;
            }
            else {
                $page = $_GET['page'];
            }
            $hien_tac_gia = new M_database();
            $row1 = $hien_tac_gia->GetAllpt('tacgia', 5, $page);
            include_once 'view/v_tac_gia.php';
            $hien_tac_gia->PhanTrangLoai('tacgia', 5, $page);
        }
        function Them_sua_tac_gia(){
            $page = $_GET['page'];
            echo $_POST['btnsua'];
            if(isset($_POST['btnsua'])){
                $id=$_GET['id'];
                $ten = $_POST['txtTenTG'];
                $sdt = $_POST['txtSDT'];
                $diachi = $_POST['txtDiaChi'];
                $Them_tac_gia = new M_database();
                $Them_tac_gia->Update('tacgia', array('TenTG'=>$ten,'SDTTG'=>$sdt,'DiaChiTG'=>$diachi),'id_tg',$id);
                header('location:admin-tacgia-Hien-'.$page);
            }
            if(isset($_POST['btnthem'])){
                $ten = $_POST['txtTenTG'];
                $sdt = $_POST['txtSDT'];
                $diachi = $_POST['txtDiaChi'];
                $Them_tac_gia = new M_database();
                $Them_tac_gia->Insert('tacgia', array('TenTG'=>$ten,'SDTTG'=>$sdt,'DiaChiTG'=>$diachi));
                header('location:admin-tacgia-Hien-'.$page);
            }
        }

        function Hien_sua_tac_gia()
        {
            $id = isset($_POST['id'])? $_POST['id']: 0;
            $ten = '';
            $dienthoai = '';
            $diachi = '';
            if((int) $id > 0)
            {
                $where = 'id_tg='.$id;
                include_once '../model/m_database.php';
                $sua_tac_gia = new M_database();
                $row_sua = $sua_tac_gia->GetRow('tacgia',$where );
                $ten = $row_sua['TenTG'];
                $dienthoai = $row_sua['SDTTG'];
                $diachi = $row_sua['DiaChiTG'];
                
            }
            include_once '../view/v_sua_tac_gia.php';
        }
        function Xoa_tac_gia(){
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                include_once '../model/m_database.php';
                $xoa_tac_gia = new M_database();
                $xoa_tac_gia->Delete('tacgia', 'id_tg', $id);
            }            
        }
    }
    $tac_gia = new C_tac_gia();
    $method = isset($_GET['method'])?$_GET['method']:'Hien';
    $tac_gia->$method();