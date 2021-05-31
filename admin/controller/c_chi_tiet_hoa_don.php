<?php
    Class C_chi_tiet_hoa_don{
        function Hien(){
            if (!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            $hien_hoa_don = new M_database();
            $row1=$hien_hoa_don->GetAllpt('chitiethoadon', 5, $page);
            include_once 'view/v_chi_tiet_hoa_don.php';
            $hien_hoa_don->PhanTrangLoai('chitiethoadon', 5, $page);
        }
    }
    $hien = new C_chi_tiet_hoa_don();
    $method = isset($_GET['method'])?$_GET['method']:'Hien';
    $hien->$method();
