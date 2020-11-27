<?php
   $new = new nuochoa();
   $paging_html = "";
   $lst = $new->db_get_list_nuochoa_paging_user($paging_html);
   $lst_all= $new->db_get_list_allnuochoa();

   $page=1;
   if(isset($_GET['page'])&&!empty($_GET['page']))
        $page=$_GET['page'];
?>
