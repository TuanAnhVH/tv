<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

<?php
   $cat = new nhanhieu();

   $paging_html = "";
   $lst = $cat->db_get_list_nhanhieu_paging($paging_html);
   $lst_all = $cat->db_get_list_nhanhieu();

?>
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card ">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Danh sách Nhãn hiệu</h3>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered mt-3">
                        <thead class=" bg-primary">  
                            <tr class="align-middle text-center">
                                <th>STT</th>
                                <th>Tên Nhãn hiệu</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt=1;
                                if(!empty($lst))
                                foreach($lst  as $u){
                            ?>
                            <tr class="align-middle text-center">
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $u['tennhanhieu']; ?></td>
                                
							</td>
					<td>
	    				<form class="frm_delete" action="<?php echo $cat->h->get_url('tv/admin/?m=nhanhieu&a=delete') ?>" method="post">
								<div class="m-t-10">
									<a href="<?php echo $cat->h->get_url('tv/admin/?tl=etl&manhanhieu='.$u['manhanhieu']) ?>"><span class="fas fs-20 fa-edit"></span></a>
									<input type="hidden" name="nhanhieuid" value="<?php echo $u['manhanhieu']; ?>">
									<input type="hidden" name="request_name" value="delete_nhanhieu">
									<a class="btn_delete m-l-2" href="#" id=""><span class="fas fs-20 fa-trash-alt text-danger"></span>
									</a>
								</div>
						</form>
					</td>
				</tr>
                   <?php $stt++; }?>
      </tbody>
      
    </table>
    
	</div>
        </div>
	</div>
	<div class="mt-5 ml-4">
     <?php 
        if(!empty($lst_all))
            if(count($lst_all)>12) echo $paging_html;
     ?>
    </div>
</div>

<!-- JQuery định nghĩa bảng -->
<script>
	$(document).ready(function(){
		$('table').addClass('table-hover');
        // $('table').css({border:"2px solid red"});
        // $('thead').addClass('bg-primary');
        $('th').addClass('text-center ');
        $('td').addClass('align-middle text-center');
        $('td:nth-child(1),th:nth-child(1)').addClass('text-center');
        
        // Xử lý submit cho điều khiển chk_active và btn_delte
		$('.btn_delete').click(function(){
			$(this).parent().parent().submit();
			 return false;
		});

		$('.frm_delete').submit(function(){
			if(!confirm('Bạn có chắc muốn xóa Nhãn hiệu này không ?'))
			{
				return false;
			}
			$(this).append('<input type="hidden" name="redirect" value="'+ window.location.href +'">');
			return true;
		});

		//Xu ly tooltip voi Bootsrap 4
		// $('.info_fullname').popover();
	});
</script>

