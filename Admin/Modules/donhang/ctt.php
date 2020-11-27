<?php
   $cat = new donhang();
   $paging_html = "";
   $lst_all= $cat->db_get_list_donhang_ctt();
	$lst = $cat->db_get_list_donhang_ctt_paging($paging_html);
  
   if(isset($_GET['page']))
	$page=$_GET['page'];
	else
		$page=1;

?>
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card ">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Danh Sách Đơn hàng chưa thanh toán</h3>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered mt-3">
                        <thead class=" bg-primary">  
                            <tr class="align-middle text-center">
                                <th class=" text-center">Mã đơn hàng</th>
                                <th class=" text-center">Tên khách hàng</th>
                                <th class=" text-center">Số điện thoại</th>
								<th class=" text-center">Ngày đặt hàng</th>
								<th class=" text-center">Ngày thanh toán</th>
								<th class=" text-center">Tổng tiền</th>
								<th class=" text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
								
								if(!empty($lst))
                                	foreach($lst as $u){
										$tong=0;
										$lstchitiet = $cat->db_get_list_chitietdonhang($u['madonhang']);
										if(!empty($lstchitiet))
										{
											foreach($lstchitiet as $c)
												$tong+= (int)$c['soluong']*(float)$c['dongia'];
										}

                            ?>
                            <tr class="align-middle text-center">
                                <td><?php echo $u['madonhang']; ?></td>
                                <td><?php echo $u['tenkhachhang']; ?></td>
                                <td><?php   echo $u['sdt']; ?></td>
								<td><?php  echo $u['ngaylap']; ?></td>
								<td><?php  echo $u['ngaythanhtoan']; ?></td>
								<td><?php  echo saves::change_price($tong).' vnd'; ?></td>
                                
							<td>
								<a  href=" <?php echo $cat->h->get_url('tv/admin/?tl=ddh2&page='.$page.'&madonhang='.$u['madonhang']); ?>">
								<span class="fas fs-25 fa-info-circle text-primary"></span>
							</td>
						</tr>
						<?php  }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="mt-5">
	 <?php 
	 	if(!empty($lst_all))
		 if(count($lst_all)>10) echo $paging_html; 
	 ?>
    </div>
</div>


