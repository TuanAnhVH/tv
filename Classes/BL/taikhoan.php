<?php 
class taikhoan extends Database
{
   var $h = null;
   var $r = null;
   
   function __construct()
   {
     parent::__construct();
     $this->h = new Helper();
     $this->r = new Role();
   }

   function db_get_taikhoan_by_id($tendangnhap)
   {
      $sql = "select * from taikhoan where tendangnhap=:tendangnhap";
      $params = ['tendangnhap'=>$tendangnhap];
      return $this->db_get_row($sql, $params);
   } 

   function db_get_taikhoan_by_email($email)
   {
      $sql = "select * from taikhoan where email=:email";
      $params = ['email'=>$email];
      return $this->db_get_row($sql, $params);
   } 
   function db_get_list_taikhoan_paging(&$paging_html)
   {
       $link = $this->h->get_url("tv/admin/?tl=ltk&page={page}");
       $sql = "select * from taikhoan";
       $total_records = $this->db_num_rows($sql);
       $current_page = $this->h->input_get('page');
       $limit = 12;
       
       $paging = $this->h->paging($link,$total_records,$current_page,$limit);
       $sql = "select * from taikhoan limit {$paging['start']},{$paging['limit']}";
       $paging_html = $paging['html'];
       return $this->db_get_list($sql);
   }

 

   function db_insert_taikhoan($data)
   {
      $sql ="insert into taikhoan(tendangnhap,matkhau,email) values(:tendangnhap,:matkhau,:email)";
      $params = [
         'tendangnhap'=>$data['tendangnhap'],
         'matkhau'=>md5($data['matkhau']),
         'email'=>$data['email']
      ];
      if($this->db_execute($sql,$params))
      	return true;
      else
        return false;
   }

   function db_update_taikhoan($data)
   {
      $sql ="update taikhoan set matkhau=:matkhau where tendangnhap=:tendangnhap";
      $params = [
         'tendangnhap'=>$data['tendangnhap'],
         'matkhau'=>md5($data['matkhau'])
     
      ];
      if($this->db_execute($sql,$params))
      	return true;
      else
        return false;
   }

   function db_delete_taikhoan($tendangnhap)
   {
      $sql ="delete from taikhoan where tendangnhap=:tendangnhap";
      $params = [
          'tendangnhap'=>$tendangnhap
      ];
      if($this->db_execute($sql,$params))
      	return true;
      else
        return false;
   }

   function db_get_list_taikhoan()
   {
   	  $sql = "select * from taikhoan";
   	  return $this->db_get_list($sql);
   }

   function db_get_count_list_taikhoan()
   {
   	  $sql = "select * from taikhoan";
   	  return $this->db_num_rows($sql);
   }
}
?>