<?php
    $cat = new donhang();

	if($cat->h->is_submit('thanhtoan_donhang'))
	{
	   $madonhang = $cat->h->input_post('madonhang');
	   $data =$cat->db_get_donhang_by_id($madonhang);
	  $cat->db_thanhtoan_donhang($data);
?>
		
		<script language='javascript'>
		window.location = '<?php echo $cat->h->input_post('redirect'); ?>';
	    </script>
<?php
	  }       
   
?>
