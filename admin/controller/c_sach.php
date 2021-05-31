<?php
    //include_once 'model/m_database.php';
    class C_sach{
        function Hien(){
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            $hien_sach = new M_database();
            $row1=$hien_sach->GetAll_Sachpt(5, $page);
            include_once 'view/v_sach.php';
            $hien_sach->PhanTrangLoai('sach', 5, $page);
        }
        function Hien_sua_sach(){
            include_once '../model/m_database.php';
            $id_sua = isset($_POST['id'])? $_POST['id'] : 0;
            if($id_sua > 0){
                $where = 'id='.$id_sua;
                
                $hien_sach = new M_database();
                $row = $hien_sach->GetRow('sach', $where);
                $where1 = 'id_nxb='.$row['id_nxb'];
                $where2 = 'id_loai='.$row['id_loai'];
                $where3 = 'id_tg='.$row['id_tg'];
                $row1 = $hien_sach->GetRow('nhaxuatban', $where1);
                $row2 = $hien_sach->GetRow('loaisach', $where2);
                $row3 = $hien_sach->GetRow('tacgia', $where3);
            }
            $hien_sach1 = new M_database();
            $row_loai = $hien_sach1->GetAll('loaisach');
            $row_nxb = $hien_sach1->GetAll('nhaxuatban');
            $row_tg = $hien_sach1->GetAll('tacgia');
            include_once '../view/v_sua_sach.php';
        }
        function Xoa_sach(){
            if(isset($_POST['id']))
            {
                $id_xoa = $_POST['id'];
                include_once '../model/m_database.php';
                $xoa_sach1 = new M_database();
                $xoa_sach1->Delete('sach', 'id', $id_xoa);
            }
        }
        function Them_sach(){
            $page = $_GET['page'];
            if(isset($_POST['btn_them_sach'])){
                $TenSach=$_POST['txtTenSach'];
                $NXB=$_POST['txtNXB'];
                $TacGia=$_POST['txtTG'];
                $giacu = $_POST['txtGiaCu'];

                if($_FILES['file']['name'] != NULL){ // Đã chọn file
                    // Tiến hành code upload file
                    if($_FILES['file']['type'] == "image/jpeg"
                    || $_FILES['file']['type'] == "image/png"
                    || $_FILES['file']['type'] == "image/gif"){
                    $path = "../upload/"; // file sẽ lưu vào thư mục data
                    $tmp_name = $_FILES['file']['tmp_name'];
                    $name = $_FILES['file']['name'];
                    $type = $_FILES['file']['type']; 
                    $size = $_FILES['file']['size']; 
                    // Upload file
                    move_uploaded_file($tmp_name,$path.$name);  
                    }else{
                       // không phải file ảnh
                       echo "Kiểu file không hợp lệ";
                    }
               }else{
                    echo "Vui lòng chọn file";
               }
                $Gia=$_POST['txtGia'];
                $LoaiSach=$_POST['txtLoaiSach'];
                $SoLuong=$_POST['txtSoLuong'];
                $SoTrang=$_POST['txtSoTrang'];
                $arraysach=array('TenSach'=>$TenSach,'id_nxb'=>$NXB,'id_tg'=>$TacGia,'HinhAnh'=>$name,'GiaCu'=>$giacu,'GiaMoi'=>$Gia,'id_loai'=>$LoaiSach,'SoLuong'=>$SoLuong,'SoTrang'=>$SoTrang);
                $them_sach = new M_database();
                $them_sach->Insert('sach', $arraysach);
                header('location:admin-sach-Hien-'.$page);
            }
            if(isset($_POST['btn_sua_sach'])){
                $id_sua_sach = $_GET['id'];
                $TenSach=$_POST['txtTenSach'];
                $NXB=$_POST['txtNXB'];
                $TacGia=$_POST['txtTG'];
                $giacu = $_POST['txtGiaCu'];

                if($_FILES['file1']['name'] != NULL){ // Đã chọn file
                    // Tiến hành code upload file
                    if($_FILES['file1']['type'] == "image/jpeg"
                    || $_FILES['file1']['type'] == "image/png"
                    || $_FILES['file1']['type'] == "image/gif"){
                            // file hợp lệ, tiến hành upload
                    $path = "../upload/"; // file sẽ lưu vào thư mục data
                    $tmp_name = $_FILES['file1']['tmp_name'];
                    $name = $_FILES['file1']['name'];
                    $type = $_FILES['file1']['type']; 
                    $size = $_FILES['file1']['size']; 
                    // Upload file
                    move_uploaded_file($tmp_name,$path.$name);
                    }else{
                       // không phải file ảnh
                       echo "Kiểu file không hợp lệ";
                    }
               }
                $Gia=$_POST['txtGia'];
                $LoaiSach=$_POST['txtLoaiSach'];
                $SoLuong=$_POST['txtSoLuong'];
                $SoTrang=$_POST['txtSoTrang'];
                $sua_sach = new M_database();
                $rowhiengia=$sua_sach->GetRow('sach', 'id='.$id_sua_sach);
                //$giacu1=$rowhiengia['GiaMoi'];
                if(!isset($name))
                    { $name=$rowhiengia['HinhAnh'];}
                $arraysach=array('TenSach'=>$TenSach,'id_nxb'=>$NXB,'id_tg'=>$TacGia,'HinhAnh'=>$name,'GiaCu'=>$giacu,'GiaMoi'=>$Gia,'id_loai'=>$LoaiSach,'SoLuong'=>$SoLuong,'SoTrang'=>$SoTrang);
                $sua_sach->Update('sach', $arraysach, 'id', $id_sua_sach);
                header('location:admin-sach-Hien-'.$page);
            }
        }
        function XlxuatFile(){
            if(isset($_POST['export'])){
                $xuatFile01= new M_database();
                $path =  $xuatFile01->xuatFile();
                $full_path = FULL_SITE_ROOT  .  $path;
                header('location:'.$full_path);
            }
        }
    }
    $sach = new C_sach();
    $method = isset($_GET['method'])? $_GET['method']: 'hien';
    $sach->$method();