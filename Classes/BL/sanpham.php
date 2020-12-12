<?php  
class sanpham extends Database
{
   var $h = null;
   var $r = null;
   
   function __construct()
   {
     parent::__construct();
     $this->h = new Helper();
     $this->r = new Role();
   }

   function db_get_sanpham_by_id($masanpham)
   {
      $sql = "select * from sanpham where masanpham=:masanpham";
      $params = ['masanpham'=>$masanpham];
      return $this->db_get_row($sql, $params);
   } 

   function db_insert_sanpham($data)
   {
      $sql ="insert into sanpham(masanpham,tensanpham,manhanhieu,giatien,mota,avatar) 
            values(:masanpham,:tensanpham,:manhanhieu,:giatien,:mota,:avatar)";
      $params = [
         'masanpham'=>$data['masanpham'],
         'tensanpham'=>$data['tensanpham'],
         'manhanhieu'=>$data['manhanhieu'],
         'giatien'=>$data['giatien'],
         'mota'=>$data['mota'],
         'avatar'=>$data['avatar']
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
        return false;
   }

   function db_update_sanpham($data)
   {
      $sql ="update sanpham set tensanpham=:tensanpham,manhanhieu=:manhanhieu,giatien=:giatien,mota=:mota,avatar=:avatar
            where masanpham=:masanpham";
      $params = [
         'masanpham'=>$data['masanpham'],
         'tensanpham'=>$data['tensanpham'],
         'manhanhieu'=>$data['manhanhieu'],
         'giatien'=>$data['giatien'],
         'mota'=>$data['mota'],
         'avatar'=>$data['avatar']
      ];
      if($this->db_execute($sql,$params))
         return true;
      else
         return false;
   }

   function db_delete_sanpham($masanpham)
   {
      $sql ="delete from sanpham where masanpham=:masanpham";
      $params = ['masanpham'=>$masanpham];
      if($this->db_execute($sql,$params))
         return true;
      else
         return false;
   }

   function db_get_list_sanpham()
   {
     $sql = "select * from sanpham";
     return $this->db_get_list($sql);
   }

   function db_get_count_list_sanpham()
   {
     $sql = "select * from sanpham";
     return $this->db_num_rows($sql);
   }


   function db_get_list_sanpham_by_nhanhieu($id)
   {
     $sql = "select * from sanpham where manhanhieu=$id";
     return $this->db_get_list($sql);
   }

   function db_get_list_sanpham_by_like($id)
   {
     $sql = "select * from sanpham where tensanpham like '%$id%'";
     return $this->db_get_list($sql);
   }
   

   function db_get_list_allsanpham()
   {
     $sql = "select * from v_sanpham_nhanhieu";
     return $this->db_get_list($sql);
   }

   function db_get_list_sanphammoi()
   {
     $sql = "select * from v_sanpham_nhanhieu order by ngaytao desc limit 0,8";
     return $this->db_get_list($sql);
   }

   function db_get_list_allsanpham_by_search($id)
   {
     $sql = "select * from v_sanpham_nhanhieu where masanpham='$id' or tensanpham like '%$id%'
      or tennhanhieu like '%$id%'";
     return $this->db_get_list($sql);
   }

   function db_get_list_sanpham_paging(&$paging_html)
     {
         $link = $this->h->get_url("tv/admin/?tl=lnh&page={page}");
         $sql = "select * from v_sanpham_nhanhieu order by manhanhieu";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 12;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from v_sanpham_nhanhieu order by manhanhieu limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }



     function db_get_list_sanpham_paging_user(&$paging_html)
     {
         $link = $this->h->get_url("tv/?m=common&a=home&tl=tatca&page={page}");
         $sql = "select * from v_sanpham_nhanhieu order by masanpham";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 12;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from v_sanpham_nhanhieu order by masanpham limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }

     function db_get_list_sanpham_paging_user_by_nhanhieu(&$paging_html,$id)
     {
        $link = $this->h->get_url("tv/?m=common&a=home&tl=nhanhieu&id=$id&page={page}");
        $sql = "select * from v_sanpham_nhanhieu where manhanhieu=$id";
        $total_records = $this->db_num_rows($sql);
        $current_page = $this->h->input_get('page');
        $limit = 8;
        
        $paging = $this->h->paging($link,$total_records,$current_page,$limit);
        $sql = "select * from v_sanpham_nhanhieu where manhanhieu=$id limit {$paging['start']},{$paging['limit']}";
        $paging_html = $paging['html'];
        return $this->db_get_list($sql);
     }


     function db_get_list_sanpham_paging_user_by_search(&$paging_html,$id)
     {
         $link = $this->h->get_url("tv/?tl=tk&s=$id&page={page}");
         $sql = "select * from v_sanpham_nhanhieu where masanpham='$id' or tensanpham like '%$id%' 
          or tennhanhieu  like '%$id%' ";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 12;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from v_sanpham_nhanhieu where masanpham='$id' or tensanpham like '%$id%' or
          tennhanhieu like '%$id%' limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }

     function db_get_list_sanpham_paging_admin_by_search(&$paging_html,$id,$tl2)
     {
         $link = $this->h->get_url("tv/admin/?tl=tk&tl2=$tl2&tk=$id&page={page}");
         $sql = "select * from v_sanpham_nhanhieu where masanpham='$id' or tensanpham like '%$id%' or
          tennhanhieu  like '%$id%' ";
         $total_records = $this->db_num_rows($sql);
         $current_page = $this->h->input_get('page');
         $limit = 12;
         
         $paging = $this->h->paging($link,$total_records,$current_page,$limit);
         $sql = "select * from v_sanpham_nhanhieu where masanpham='$id' or tensanpham like '%$id%'
          or tennhanhieu like '%$id%' limit {$paging['start']},{$paging['limit']}";
         $paging_html = $paging['html'];
         return $this->db_get_list($sql);
     }
}
?>