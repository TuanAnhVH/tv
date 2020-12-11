<?php 
class phanhoi extends Database
{
   var $h = null;
   var $r = null;
   
   function __construct()
   {
     parent::__construct();
     $this->h = new Helper();
     $this->r = new Role();
   }

   function db_get_phanhoi_by_id($id)
   {
      $sql = "select * from phanhoi where id=:id";
      $params = ['id'=>$id];
      return $this->db_get_row($sql, $params);
   } 

   function db_get_list_phanhoi_by_email($email)
   {
      $sql = "select * from phanhoi where email=:email";
      $params = ['email'=>$email];
      return $this->db_get_list($sql,$params);
   }

   function db_get_list_phanhoi_paging(&$paging_html)
   {
       $link = $this->h->get_url("tv/admin/?tl=lph&page={page}");
       $sql = "select * from phanhoi";
       $total_records = $this->db_num_rows($sql);
       $current_page = $this->h->input_get('page');
       $limit = 12;
       
       $paging = $this->h->paging($link,$total_records,$current_page,$limit);
       $sql = "select * from phanhoi limit {$paging['start']},{$paging['limit']}";
       $paging_html = $paging['html'];
       return $this->db_get_list($sql);
   }

 

   function db_insert_phanhoi($data)
   {
      $sql ="insert into phanhoi(tenkhachhang,sodienthoai,email,noidung) values(:tenkhachhang,:sodienthoai,:email,:noidung)";
      $params = [
         'tenkhachhang'=>$data['tenkhachhang'],
         'sodienthoai'=>$data['sodienthoai'],
         'email'=>$data['email'],
         'noidung'=>$data['noidung']
      ];
      if($this->db_execute($sql,$params))
        return true;
      else
        return false;
   }

   function db_delete_phanhoi($id)
   {
      $sql ="delete from phanhoi where id=:id";
      $params = [
          'id'=>$id
      ];
      if($this->db_execute($sql,$params))
        return true;
      else
        return false;
   }

   function db_get_list_phanhoi()
   {
       $sql = "select * from phanhoi";
       return $this->db_get_list($sql);
   }

   function db_get_count_list_phanhoi()
   {
       $sql = "select * from phanhoi";
       return $this->db_num_rows($sql);
   }

   function db_get_list_phanhoi_by_day($day,$month,$year)
   {
     $sql = "select * from phanhoi
              WHERE Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year";
     return $this->db_get_list($sql);
   }

   function db_get_list_phanhoi_by_day_paging(&$paging_html,$day,$month,$year,$da)
   {
    $link = $this->h->get_url("tv/admin/?tl=lph&date=$da&page={page}");
    $sql = "select * from phanhoi WHERE Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year";
    $total_records = $this->db_num_rows($sql);
    $current_page = $this->h->input_get('page');
    $limit = 10;
    
    $paging = $this->h->paging($link,$total_records,$current_page,$limit);
    $sql = "select * from phanhoi WHERE Day(ngaytao)=$day and MONTH(ngaytao)= $month and YEAR(ngaytao)=$year
         limit {$paging['start']},{$paging['limit']}";
    $paging_html = $paging['html'];
    return $this->db_get_list($sql);
   }
}
?>