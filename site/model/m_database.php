<?php

class M_database
{

    private $__conn;

    function __construct()
    {
        if (!isset($this->__conn))
        {
            $this->__conn = mysqli_connect(CONST_DB_SERVER_ADDRESS, CONST_DB_USER_NAME, CONST_DB_USER_PASSWORD, CONST_DB_DATABASE_NAME) or die("Cơ sở dữ liệu không tồn tại");
            mysqli_query($this->__conn, "set names utf8");
        }
    }

    function GetAll($table)
    {
        $sql = "select * from " . $table;
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function GetRow($table, $where)
    {
        $sql = "select * from " . $table . " where " . $where;
        $query = mysqli_query($this->__conn, $sql);
        $row = mysqli_fetch_assoc($query);
        return $row;
    }

    function GetAll_Sachpt($limit, $page)
    {
        $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg  order by id DESC limit ' . $limit * ($page - 1) . ',' . $limit;
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function Get_Sach_Idsach($id)
    {
        $sql = 'select id,HinhAnh,sach.id_tg,sach.id_nxb,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(100-GiaMoi/GiaCu*100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and id=' . $id . ' order by id DESC';
        $query = mysqli_query($this->__conn, $sql);

        $row = mysqli_fetch_assoc($query);
        return $row;
    }

    function GetAll_Seach($search, $limit, $page)
    {
        $sql = 'select id,HinhAnh,sach.id_tg,sach.id_nxb,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and TenSach like "%' . $search . '%" order by id DESC limit ' . $limit * ($page - 1) . ',' . $limit;

        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function GetAll_Sach_IdLoai($id_loai, $limit, $page)
    {
        $sql = 'select id,HinhAnh,sach.id_tg,sach.id_nxb,TenSach,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and loaisach.id_loai=' . $id_loai . ' order by id DESC limit ' . $limit * ($page - 1) . ',' . $limit;
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function GetAll_Sach_IdTacGia($id_tg, $limit, $page)
    {
        $sql = 'select id,HinhAnh,TenSach,sach.id_tg,sach.id_nxb,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and tacgia.id_tg=' . $id_tg . ' order by id DESC limit ' . $limit * ($page - 1) . ',' . $limit;

        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function GetAll_Sach_gia($where, $limit, $page)
    {
        $sql = 'select id,HinhAnh,TenSach,sach.id_tg,sach.id_nxb,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and ' . $where . ' order by id DESC limit ' . $limit * ($page - 1) . ',' . $limit;

        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function GetAll_Sach_IdNhaXuatBan($id_nxb, $limit, $page)
    {
        $sql = 'select id,HinhAnh,TenSach,tacgia.TenTG,sach.id_tg,sach.id_nxb,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and nhaxuatban.id_nxb=' . $id_nxb . ' order by id DESC limit ' . $limit * ($page - 1) . ',' . $limit;

        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function Get_4sach_moi()
    {
        $sql = 'select id,HinhAnh,TenSach,sach.id_tg,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg  order by id DESC limit 0,4';
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function GetAll_4Sach_IdLoai($id_loai)
    {
        $sql = 'select id,HinhAnh,TenSach,sach.id_tg,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg and loaisach.id_loai=' . $id_loai . ' order by id DESC limit 0,4';
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function PhanTrangLoai($url, $limit, $page, $where)
    {
        $sql1 = 'select * from sach where ' . $where;
        $query1 = mysqli_query($this->__conn, $sql1);
        $tongdong = mysqli_num_rows($query1);
        $sotrang = ceil($tongdong / $limit);
        $trangtruoc = $page - 1;
        $trangsau = $page + 1;
        $hientrang = "<div class='pagination span12' style='clear: both;'><ul class='pagination'>";
        if ($page > 1)
        {
            $hientrang.="<li><a href='" . $url . "-" . $trangtruoc . "'  data-id='" . $trangtruoc . "' ><</a></li>";
        }
        for ($i = 1; $i <= $sotrang; $i++)
        {
            if ($i == $page)
                $phantrang2 = 'active';
            else
                $phantrang2 = '';
            $hientrang .= " <li class='" . $phantrang2 . "'><a href='" . $url . "-" . $i . "' data-id='" . $i . "'>" . $i . "</a></li> ";
        }
        if ($page < $sotrang)
        {
            $hientrang.="<li><a href='" . $url . "-" . $trangsau . "' data-id='" . $trangsau . "' >></a></li>";
        }
        $hientrang .="</ul></div>";
        return $hientrang;
    }

    function PhanTrangsachmoi($url, $limit, $page)
    {
        $sql1 = 'select * from sach ';
        $query1 = mysqli_query($this->__conn, $sql1);
        $tongdong = mysqli_num_rows($query1);
        $sotrang = ceil($tongdong / $limit);
        $trangtruoc = $page - 1;
        $trangsau = $page + 1;
        $hientrang = "<div class='pagination span12' style='clear: both;'><ul class='pagination'>";
        if ($page > 1)
        {
            $hientrang.="<li><a href='" . $url . "-" . $trangtruoc . "'  data-id='" . $trangtruoc . "' >Prev</a></li>";
        }
        for ($i = 1; $i <= $sotrang; $i++)
        {
            if ($i == $page)
                $phantrang2 = 'active';
            else
                $phantrang2 = '';
            $hientrang .= " <li class='" . $phantrang2 . "'><a href='" . $url . "-" . $i . "' data-id='" . $i . "'>" . $i . "</a></li> ";
        }
        if ($page < $sotrang)
        {
            $hientrang.="<li><a href='" . $url . "-" . $trangsau . "' data-id='" . $trangsau . "' >Next</a></li>";
        }
        $hientrang .="</ul></div>";
        return $hientrang;
    }
    function PhanTrangSeach($search, $url, $limit, $page)
    {
        $search = preg_replace('#[^0-9a-z]#i', '', $search);
        $sql1 = "select * from sach where TenSach like '%$search%'";
        $query1 = mysqli_query($this->__conn, $sql1);
        $tongdong = mysqli_num_rows($query1);
        $sotrang = ceil($tongdong / $limit);
        $trangtruoc = $page - 1;
        $trangsau = $page + 1;
        $hientrang = "<div class='pagination span12' style='clear: both;'><ul class='pagination'>";
        if ($page > 1)
        {
            $hientrang.="<li><a href='" . $url . "-" . $trangtruoc . "'  data-id='" . $trangtruoc . "' >Prev</a></li>";
        }
        for ($i = 1; $i <= $sotrang; $i++)
        {
            if ($i == $page)
                $phantrang2 = 'active';
            else
                $phantrang2 = '';
            $hientrang .= " <li class='" . $phantrang2 . "'><a href='" . $url . "-" . $i . "' data-id='" . $i . "'>" . $i . "</a></li> ";
        }
        if ($page < $sotrang)
        {
            $hientrang.="<li><a href='" . $url . "-" . $trangsau . "' data-id='" . $trangsau . "' >Next</a></li>";
        }
        $hientrang .="</ul></div>";
        return $hientrang;
    }

    function GetLimit($table, $limit)
    {
        $sql = "select * from " . $table . ' limit 0,' . $limit;
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function Login($tendangnhap, $matkhau)
    {
        $matkhau = md5($matkhau);
        $sqlkt1 = "select * from taikhoan where TenDangNhap='" . $tendangnhap . "' and Quyen=2";
        $querykt1 = mysqli_query($this->__conn, $sqlkt1);
        $sqlkt2 = "select * from taikhoan where TenDangNhap='" . $tendangnhap . "' and MatKhau='" . $matkhau . "'";
        $querykt2 = mysqli_query($this->__conn, $sqlkt2);
        $row = mysqli_fetch_array($querykt2);
        $quyen = $row['Quyen'];
        $dem1 = mysqli_num_rows($querykt1);
        $dem2 = mysqli_num_rows($querykt2);
        $err = '';
        if ($dem1 < 1)
        {
            $err = 'Tên đăng nhập chưa đúng';
        }
        elseif ($dem2 > 0 && $quyen == 2)
        {
            $_SESSION['user']['name'] = $row['TenHienThi'];
            $_SESSION['user']['sdt'] = $row['SDT'];
            $_SESSION['user']['email'] = $row['Email'];
            $_SESSION['user']['diachi'] = $row['DiaChi'];
            $_SESSION['user']['tendangnhap'] = $row['TenDangNhap'];
            $_SESSION['user']['matkhau'] = $row['MatKhau'];
            ob_start();
            ?>
            <script>
                alert('đăng nhập thành công');
                window.location = 'book-store';
            </script>

            <?php

            $html = ob_get_clean();
            echo $html;
            die();
        }
        else
        {
            $err = 'mật khẩu không đúng';
        }
        return $err;
    }

    function Insert($table, $data)
    {
        $list_key = "";
        $list_values = "";
        foreach ($data as $keys => $values)
        {
            $list_key .= $keys . ",";
            $list_values .= "'" . $values . "',";
        }
        $sql = "insert into " . $table . " (" . rtrim($list_key, ',') . ") values(" . rtrim($list_values, ',') . ")";
        //echo $sql;
        mysqli_query($this->__conn, $sql);
//            return TRUE;
    }

    function LuotXem($id)
    {
        $sql = 'select * from sach where id =' . $id;
        $query = mysqli_query($this->__conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $luotxem = $row['SoLuotXem'];
        $luotxem ++;
        $sql1 = 'update sach set SoLuotXem =' . $luotxem . ' where id = ' . $id;
        mysqli_query($this->__conn, $sql1);
    }

    function Get_Sach_xem_nhieu()
    {
        $sql = 'select id,SoLuotXem,HinhAnh,TenSach,sach.id_tg,tacgia.TenTG,nhaxuatban.TenNXB,GiaCu,loaisach.TenLoai,SoTrang,SoLuong,'
                . 'GiaMoi,round(GiaMoi/GiaCu*100-100,0) as gia from sach,loaisach,nhaxuatban,tacgia '
                . ' where sach.id_loai=loaisach.id_loai and sach.id_nxb=nhaxuatban.id_nxb and'
                . ' sach.id_tg=tacgia.id_tg  order by SoLuotXem DESC limit 0,4';
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function Dat_Hang($arr, $session)
    {
        $tongtien = 0;
        foreach ($session as $val)
        {
            $tongtien += $val['soluong'] * $val['dongia'];
        }
        $arr['ThanhTien'] = $tongtien;
        $this->Insert('donhang', $arr);
        $sql = 'select * from donhang order by id_hd DESC limit 0,1';
        $query = mysqli_query($this->__conn, $sql);
        $row = mysqli_fetch_assoc($query);
        //$row['id_hd']++;
        foreach ($session as $val)
        {
            $arr1 = array('id_hd' => $row['id_hd'], 'id' => $val['id'], 'TenSach' => $val['tensach'], 'DonGia' => $val['dongia'], 'SoLuong' => $val['soluong']);
            $this->Insert('chitiethoadon', $arr1);
        }
    }
    function Search($search)
    {
        $search = preg_replace('#[^0-9a-z]#i', '', $search);
        $sql = "select * from sach where TenSach like '%$search%'";
        $query = mysqli_query($this->__conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_assoc($query))
        {
            $result[] = $row;
        }
        return $result;
    }

    function DoiMK($matkhau, $tendangnhap)
    {
        $sql = "update taikhoan set MatKhau='" . $matkhau . "' where TenDangNhap ='" . $tendangnhap . "'";
        mysqli_query($this->__conn, $sql);
    }

}

