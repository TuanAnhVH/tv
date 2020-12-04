<?php  
class donhang extends Database
{
   var $h = null;
   
   function __construct()
   {
     parent::__construct();
     $this->h = new Helper();
   }

   function db_get_donhang_by_id($madonhang)
   {
      $sql = "select * from v_donhang_trangthai where madonhang=:madonhang";
      $params = ['madonhang'=>$madonhang];
      return $this->db_get_row($sql, $params);
   }

   
   function db_get_donhang_lastest()
   {
      $sql = "select * from v_donhang_trangthai ORDER BY madonhang DESC limit 0,1";
      $params = [];
      return $this->db_get_row($sql, $params);
   }

   function db_insert_donhang($data)
   {
      $sql ="insert into donhang(tenkhachhang,sodienthoai,email,diachi) 
            values(:tenkhachhang,:sodienthoai,:email,:diachi)";
      $params = [
         'tenkhachhang'=>$data['tenkhachhang'],
         'sodienthoai'=>$data['sodienthoai'],
         'email'=>$data['email'],
         'diachi'=>$data['diachi']
         
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
        return false;
   }



   function db_get_list_donhang()
   {
     $sql = "select * from v_donhang_trangthai";
     return $this->db_get_list($sql);
   }

   function db_get_count_list_donhang()
   {
     $sql = "select * from v_donhang_trangthai";
     return $this->db_num_rows($sql);
   }

   function db_get_list_donhang_ctt()
   {
     $sql = "select * from v_donhang_trangthai where ngaythanhtoan is null";
     return $this->db_get_list($sql);
   }

   function db_get_count_list_donhang_ctt()
   {
     $sql = "select * from v_donhang_trangthai where ngaythanhtoan is null";
     return $this->db_num_rows($sql);
   }
// -----------------------------------------
   function db_get_list_donhang_by_day($day,$month,$year)
   {
     $sql = "select * from v_donhang_trangthai 
              WHERE Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_day_ctt($day,$month,$year)
   {
     $sql = "select * 
              from v_donhang_trangthai where Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year and ngaythanhtoan is null";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_day_dtt($day,$month,$year)
   {
     $sql = "select * from v_donhang_trangthai 
              where Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year and ngaythanhtoan is not null";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_day_paging(&$paging_html,$day,$month,$year,$da)
   {
    $link = $this->h->get_url("tv/admin/?tl=ldh&date=$da&page={page}");
    $sql = "select * from v_donhang_trangthai WHERE Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year";
    $total_records = $this->db_num_rows($sql);
    $current_page = $this->h->input_get('page');
    $limit = 10;
    
    $paging = $this->h->paging($link,$total_records,$current_page,$limit);
    $sql = "select * from v_donhang_trangthai WHERE Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year
         limit {$paging['start']},{$paging['limit']}";
    $paging_html = $paging['html'];
    return $this->db_get_list($sql);
   }

// -----------------------------------------
   function db_get_list_donhang_by_month($month,$year)
   {
     $sql = "select * from v_donhang_trangthai WHERE  MONTH(ngaytao)= $month and YEAR(ngaytao)=$year";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_month_ctt($month,$year)
   {
     $sql = "select * from v_donhang_trangthai where MONTH(ngaytao)= $month and YEAR(ngaytao)=$year and ngaythanhtoan is null";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_month_dtt($month,$year)
   {
     $sql = "select * from v_donhang_trangthai where MONTH(ngaytao)= $month and YEAR(ngaytao)=$year and ngaythanhtoan is not null";
     return $this->db_get_list($sql);
   }

// -----------------------------------------
   function db_get_list_donhang_by_year($year)
   {
     $sql = "select * from v_donhang_trangthai WHERE YEAR(ngaytao)=$year";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_year_ctt($year)
   {
     $sql = "select * from v_donhang_trangthai where YEAR(ngaytao)=$year and ngaythanhtoan is null";
     return $this->db_get_list($sql);
   }

   function db_get_list_donhang_by_year_dtt($year)
   {
     $sql = "select * from v_donhang_trangthai where YEAR(ngaytao)=$year and ngaythanhtoan is not null";
     return $this->db_get_list($sql);
   }
// -----------------------------------------
   function db_get_list_chitietdonhang($madonhang)
   {
     $sql = "select * from chitietdonhang where madonhang=:madonhang";
     $params = ['madonhang'=>$madonhang];
     return $this->db_get_list_condition($sql,$params);
   }
   
   
// -----------------------------------------
   
   function db_get_list_donhang_paging(&$paging_html)
     {
         $link = $this->h->get_url("tv/admin/?tl=ldh&page={page}");
         $sql = "select * from v_donhang_trangthai";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 10;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from v_donhang_trangthai limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }
// -----------------------------------------
     function db_get_list_donhang_ctt_paging(&$paging_html)
     {
         $link = $this->h->get_url("tv/admin/?tl=ctt&page={page}");
         $sql = "select * from v_donhang_trangthai where ngaythanhtoan is NULL";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 10;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from v_donhang_trangthai where ngaythanhtoan is NULL limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }
// -----------------------------------------
     function db_thanhtoan_donhang($data)
   {
   
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $date= getdate();
      $time = $date['year'].'-'.$date['mon'].'-'.$date['mday'].' '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
      $sql ="update donhang set ngaythanhtoan=:ngaythanhtoan where madonhang=:madonhang";
      $params = [
        'ngaythanhtoan'=>$time,
         'madonhang'=>$data['madonhang']
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
        return false;
   }

   function db_insert_chitietdonhang($data)
   {

      $sql ="insert into chitietdonhang(madonhang,masanpham,soluong,dongia) 
            values(:madonhang,:masanpham,:soluong,:dongia)";
      $params = [
        'madonhang'=>$data['madonhang'],
        'masanpham'=>$data['masanpham'],
        'soluong'=>$data['soluong'],
        'dongia'=>$data['dongia']
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
        return false;
   }


}
?>