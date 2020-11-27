<?php
    $cat = new theloai();

	if($cat->h->is_submit('delete_theloai'))
	{
	   $theloai = $cat->h->input_post('theloaiid');
	   $data =$cat->db_get_list_theloai_by_id($theloai);
	  $cat->db_delete_theloai($data);
?>
		
		<script language='javascript'>
		window.location = '<?php echo $cat->h->input_post('redirect'); ?>';
	    </script>
<?php
	  }       
   
?>
