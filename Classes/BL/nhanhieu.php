<?php
  class nhanhieu extends Database
  {
     public $h = null;

     function __construct()
     {
         parent::__construct();
         $this->h = new Helper();
     }

     function db_get_list_nhanhieu()
     {
         $sql = "select * from nhanhieu";
         return $this->db_get_list($sql);
     }

     function db_get_count_list_nhanhieu()
     {
         $sql = "select * from nhanhieu";
         return $this->db_num_rows($sql);
     }


     function db_get_list_nhanhieu_paging(&$paging_html)
     {
         $link = $this->h->get_url("tv/admin/?tl=ltl&page={page}");
         $sql = "select * from nhanhieu";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 12;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from nhanhieu limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }

     function db_get_list_nhanhieu_by_id($manhanhieu)
     {
         $sql = "select * from nhanhieu where manhanhieu=:manhanhieu";
         $params = [
             'manhanhieu'=>$manhanhieu
         ];
         return $this->db_get_row($sql,$params);
     }

     function db_get_nhanhieu_by_name($tennhanhieu)
     {
         $sql = "select * from nhanhieu where tennhanhieu=:tennhanhieu";
         $params = [
             'tennhanhieu'=>$tennhanhieu['tennhanhieu']
         ];
         return $this->db_execute($sql,$params);
     }

     function db_insert_nhanhieu($data)
     {
         $sql = "insert into nhanhieu(tennhanhieu)
              values(:tennhanhieu)";
         $params = [
             'tennhanhieu'=>$data['tennhanhieu']
             
         ];
         if($this->db_execute($sql,$params))
            return true;
         else
            return false;   
     }

     function db_update_nhanhieu($data)
     {
         $sql = "update nhanhieu set tennhanhieu=:tennhanhieu
             where manhanhieu=:manhanhieu";
         $params = [
             'manhanhieu'=>$data['manhanhieu'],
             'tennhanhieu'=>$data['tennhanhieu']
             
         ];
         if($this->db_execute($sql,$params))
            return true;
         else
            return false;   
     }

     function db_delete_nhanhieu($data)
     {
         $sql = "delete from nhanhieu where manhanhieu=:manhanhieu";
         $params = [
             'manhanhieu'=>$data['manhanhieu']
         ];
         if($this->db_execute($sql,$params))
            return true;
         else
            return false;   
     }
  }
?>