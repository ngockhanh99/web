<?php

class C_home
{

    public $database;

    public function __construct()
    {
        $this->database = new M_database();
    }

    public function Danh_sach_loai()
    {
        $row = $this->database->GetLimit('loaisach', 5);
        return $row;
    }

    public function Danh_sach_tac_gia()
    {
        $row = $this->database->GetLimit('tacgia', 5);
        return $row;
    }

    public function Danh_sach_sach_xem_nhieu()
    {
        $row = $this->database->Get_Sach_xem_nhieu();
        return $row;
    }

    public function Home()
    {

        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-home-0';
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $VIEW_DATA['row'] = $this->database->GetAll_Sachpt(9, $page);
        $VIEW_DATA['phan_trang'] = $this->database->PhanTrangsachmoi($url, 9, $page);
        $this->render('v_home', $VIEW_DATA);
    }
    public function GioiThieu()
    {
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu']= $this->Danh_sach_sach_xem_nhieu();
        $this->render('v_gioi_thieu', $VIEW_DATA);
    }

    public function LienHe()
    {
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $this->render('v_lien_he', $VIEW_DATA);
    }

    public function ChiTiet()
    {
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $id = $_GET['id'];
        $VIEW_DATA['row'] = $this->database->Get_Sach_Idsach($id);
        $VIEW_DATA['row2'] = $this->database->GetAll_Sachpt(8, 1);
        $this->database->LuotXem($id);
        
        $this->render('v_chi_tiet', $VIEW_DATA);
    }

    public function Sach_theo_loai()
    {
        $id_loai = $_GET['id'];
        $where = ' id_loai=' . $id_loai;
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Sach_theo_loai-' . $id_loai;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $VIEW_DATA['row'] = $this->database->GetAll_Sach_IdLoai($id_loai, 9, $page);
        $VIEW_DATA['row1'] = $this->database->GetRow('loaisach', $where);
        $VIEW_DATA['phan_trang'] = $this->database->PhanTrangLoai($url, 9, $page, $where);
        
        $this->render('v_home', $VIEW_DATA);
    }
    public function Sach_theo_tac_gia()
    {
        $id = $_GET['id'];
        $where = ' id_tg=' . $id;
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Sach_theo_tac_gia-' . $id;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $VIEW_DATA['row'] = $this->database->GetAll_Sach_IdTacGia($id, 9, $page);
        $VIEW_DATA['row1'] = $this->database->GetRow('tacgia', $where);
        $VIEW_DATA['phan_trang'] = $this->database->PhanTrangLoai($url, 9, $page, $where);
        
        $this->render('v_home', $VIEW_DATA);
    }

    public function Sach_theo_gia()
    {
        $id = $_GET['id'];
        if ($id == 1)
        {
            $where = 'GiaMoi <= 500000 ';
        }
        elseif ($id == 2)
        {
            $where = 'GiaMoi > 500000 and  GiaMoi <= 1000000 ';
        }
        else
        {
            $where = 'GiaMoi >1000000 ';
        }
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Sach_theo_gia-' . $id;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $VIEW_DATA['row'] = $this->database->GetAll_Sach_gia($where, 9, $page);
        $VIEW_DATA['row1'] = $where;
        $VIEW_DATA['phan_trang'] = $this->database->PhanTrangLoai($url, 9, $page, $where);
        
        $this->render('v_home', $VIEW_DATA);
    }

    public function Search()
    {
        $search = $_POST['txtsearch'];
        $VIEW_DATA['ds_loai'] = $this->Danh_sach_loai();
        $VIEW_DATA['ds_tac_gia'] = $this->Danh_sach_tac_gia();
        $VIEW_DATA['ds_xem_nhieu'] = $this->Danh_sach_sach_xem_nhieu();
        $url = 'book-store-Search';
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $VIEW_DATA['row'] = $this->database->GetAll_Seach($search, 9, $page);
        $VIEW_DATA['phan_trang'] = $this->database->PhanTrangSeach($search, $url, 9, $page);
        $row1['TenLoai'] = "Tìm theo tên sách: ' $search '";
     
        $this->render('v_home', $VIEW_DATA);
    }

    public function render($name, $VIEW_DATA = array())
    {
        //Tự động sinh các biến cho VIEW_DATA
        if (is_array($VIEW_DATA))
        {
            foreach ($VIEW_DATA as $key => $val)
            {
                $$key = $val;
            }
        }
        include_once 'site/view/pages/v_header.php';
        include_once "site/view/$name.php";
        include_once 'site/view/pages/v_footer.php';
    }

}

$method = isset($_GET['method']) ? $_GET['method'] : 'Home';
$home = new C_home();
$home->$method();
