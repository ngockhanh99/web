<?php
    class M_database{
        private $__conn;
        function __construct() {
            if (!isset($this->__conn)){
            $this->__conn = mysqli_connect("localhost", "root", "", "bansach");
            mysqli_query($this->__conn, "set names utf8");
            }
        }
        function GetAll($table){
            $sql = "select * from ".$table;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function GetAllpt($table,$limit,$page){
            $sql = 'select * from '.$table.' limit '.$limit*($page-1).','.$limit;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
	function GetRow($table,$where){
            $sql = "select * from ".$table." where ".$where;
            $query =  mysqli_query($this->__conn, $sql);
            $row =  mysqli_fetch_assoc($query);
            return $row;
        }
	function Insert($table,$data){
            $list_key="";
            $list_values="";
            foreach($data as $keys => $values){
                $list_key .= $keys.","; 
                $list_values .= "'".$values."',";                 
            }	
            $sql="insert into ".$table." (".rtrim($list_key,',').") values(".  rtrim($list_values,',').")";
            echo $sql;
            mysqli_query($this->__conn, $sql);
            return TRUE;
	}	
        function Update($table,$data,$id_table,$id){
            $sql = "";
            foreach($data as $keys => $values){
                $sql .= $keys."='".$values."',";                 
            }	
            $sql="update ".$table." set ".rtrim($sql,',')." where ".$id_table."=".$id;
            //echo $sql;
            mysqli_query($this->__conn, $sql);
	}
        function GetAll_Sachpt($limit,$page){
            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg  order by id DESC limit '.$limit*($page-1).','.$limit;
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        
        function Get_Sach_Idsach($id){
            $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                    . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                    . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                    . ' sach.id_tg=tacgia.id_tg and id='.$id.' order by id DESC';
            $query =  mysqli_query($this->__conn, $sql);
            $result = array();
            while ($row =  mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
            return $result;
        }
        function Delete($table,$id_table,$id){
            $sql = "delete from ".$table." where ".$id_table."=".$id;
            //echo $sql;
            mysqli_query($this->__conn, $sql);
            
        }
        function PhanTrangLoai($table,$limit,$page){
            $sql1 = 'select * from '.$table;
            $query1 = mysqli_query($this->__conn, $sql1);
            $tongdong = mysqli_num_rows($query1);
            $sotrang = ceil($tongdong/$limit);
            $trangtruoc = $page - 1;
            $trangsau = $page + 1;
            $hientrang ="<div class='phantrang'><ul class='pagination'>";
            if($page>1){
            $hientrang.="<li><a href='admin-".$table."-Hien-".$trangtruoc."'  data-id='".$trangtruoc."' class='  pt".$table."'><</a></li>";
            }
            for($i=1; $i <= $sotrang;$i++)
            {
                if($i==$page) $phantrang2 = 'active';
                else $phantrang2 = '';
                $hientrang .= " <li class='".$phantrang2."'><a href='admin-".$table."-Hien-".$i."' data-id='".$i."' class=' pt".$table."'>".$i."</a></li> ";
            }
            if($page<$sotrang){
            $hientrang.="<li><a href='admin-".$table."-Hien-".$trangsau."' data-id='".$trangsau."' class=' pt".$table."'>></a></li>";
            }
            $hientrang .="</ul></div>";
            echo $hientrang;
        }
        function Login($tendangnhap,$matkhau){
            $matkhau=  md5($matkhau) ;
            $sqlkt1="select * from taikhoan where TenDangNhap='".$tendangnhap."' and Quyen=1";
            $querykt1=  mysqli_query($this->__conn, $sqlkt1);
            $sqlkt2="select * from taikhoan where TenDangNhap='".$tendangnhap."' and MatKhau='".$matkhau."'";
            $querykt2=  mysqli_query($this->__conn, $sqlkt2);
            $row=mysqli_fetch_array($querykt2);
            $quyen=$row['Quyen'];
            $dem1=mysqli_num_rows($querykt1);
            $dem2=mysqli_num_rows($querykt2);
            $err ='';
            if($dem1<1){
                $err = 'Tên đăng nhập chưa đúng';
            }
            elseif($dem2>0&&$quyen==1){
                $_SESSION['admin']['tenhienthi']=$row['TenHienThi']; 
                $_SESSION['admin']['matkhau']=$row['MatKhau']; 
                $_SESSION['admin']['tendangnhap']=$row['TenDangNhap']; 
                header('location:admin.html');
            }
            else {
                $err = 'mật khẩu không đúng';
            }
            return $err;

        }
        function DoiMK($matkhau,$tendangnhap){
            $sql="update taikhoan set MatKhau='".$matkhau."' where TenDangNhap ='".$tendangnhap."'";
            mysqli_query($this->__conn, $sql);
        }
        function xuatFile(){
                $ojEx=new PHPExcel();
                $ojEx-> setActiveSheetIndex(0);
                $sheet=$ojEx->getActiveSheet()->setTitle("Danh sach sach");
                $rowCount=1;
                $sheet->setCellValue('A'.$rowCount,'Mã sách');
                $sheet->setCellValue('B'.$rowCount,'Tên sách');
                $sheet->setCellValue('C'.$rowCount,'Nhà suất bản');
                $sheet->setCellValue('D'.$rowCount,'Tác giả');
                $sheet->setCellValue('E'.$rowCount,'Loại sách');
                $sheet->setCellValue('F'.$rowCount,'Giá bìa');
                $sheet->setCellValue('G'.$rowCount,'Giá bán');
                $sheet->setCellValue('H'.$rowCount,'Số lượng');
                $sheet->setCellValue('I'.$rowCount,'Số trang');
                $mysq= "SELECT * FROM ((( sach INNER JOIN nhaxuatban ON sach.id_nxb=nhaxuatban.id_nxb)
                INNER JOIN tacgia ON sach.id_tg=tacgia.id_tg)
                INNER JOIN loaisach ON sach.id_loai=loaisach.id_loai)" ;
                $rs= mysqli_query($this->__conn, $mysq);
                while($row = mysqli_fetch_array($rs)){
                    $rowCount++;
                    $sheet->setCellValue('A'.$rowCount,$row['id']);
                    $sheet->setCellValue('B'.$rowCount,$row['TenSach']);
                    $sheet->setCellValue('C'.$rowCount,$row['TenNXB']);
                    $sheet->setCellValue('D'.$rowCount,$row['TenTG']);
                    $sheet->setCellValue('E'.$rowCount,$row['TenLoai']);
                    $sheet->setCellValue('F'.$rowCount,$row['GiaCu']);
                    $sheet->setCellValue('G'.$rowCount,$row['GiaMoi']);
                    $sheet->setCellValue('H'.$rowCount,$row['SoLuong']);
                    $sheet->setCellValue('I'.$rowCount,$row['SoTrang']);
                }
                $objWriter = PHPExcel_IOFactory::createWriter($ojEx, 'Excel2007');
                $path = "../upload/";
                $filename= 'export.xlsx';
                $objWriter->save($path . $filename);
                return "upload/" . $filename;
            }
    }