<?php
   $cat = new sanpham();

   if($cat->h->is_submit('delete_sanpham'))
   {
      $masanpham= $cat->h->input_post('sanphamid');
	  $cat->db_delete_sanpham($masanpham);
?>
		
		<script language='javascript'>
		window.location = '<?php echo $cat->h->input_post('redirect'); ?>';
	    </script>
<?php
	  }       
   
?>
