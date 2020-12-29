<?php
    $cat = new nhanhieu();

	if($cat->h->is_submit('delete_nhanhieu'))
	{
	   $nhanhieu = $cat->h->input_post('nhanhieuid');
	   $data =$cat->db_get_list_nhanhieu_by_id($nhanhieu);
	  $cat->db_delete_nhanhieu($data);
?>
		
		<script language='javascript'>
		window.location = '<?php echo $cat->h->input_post('redirect'); ?>';
	    </script>
<?php
	  }       
   
?>
