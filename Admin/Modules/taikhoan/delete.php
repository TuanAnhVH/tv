<?php
   $user = new taikhoan();

   if($user->h->is_submit('delete_user'))
   {
	  $userid = $user->h->input_post('userid');
	  $info_user = $user->db_get_taikhoan_by_id($userid);
	  if ($info_user['tendangnhap'] == 'admin'){
?>
	  <script language="javascript">
		 alert('Bạn không thể xóa tài khoản Admin được!');
		 window.location = '<?php echo $user->h->input_post('redirect'); ?>';
	  </script>
<?php	    
	  }
	  else
	  {
		$user->db_delete_taikhoan($userid);
?>		
		<script language='javascript'>
		window.location = '<?php echo $user->h->input_post('redirect'); ?>';
	    </script>
<?php
	  }       
   }  
?>
