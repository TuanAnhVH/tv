<?php 
    $dh = new donhang();
    $l= $dh->db_get_list_donhang_by_day((int)$day,(int)$month,(int)$year);
    $lctt= $dh->db_get_list_donhang_by_day_ctt((int)$day,(int)$month,(int)$year);
    $ldtt= $dh->db_get_list_donhang_by_day_dtt((int)$day,(int)$month,(int)$year);
    
?>
    
<div class="row mt-4 mb-4">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="card ">
      <div class="card-header bg-primary text-white text-center">
          <h3> <?php echo 'Thống kê đơn hàng ngày '.$day.'/'.$month.'/'.$year?> </h3>
      </div>
      <div class="card-body">
          
        <table class="table table-bordered mt-3">
          <thead class=" bg-primary">  
            <tr class="align-middle text-center">
              <th class="align-middle text-center"></th>
              <th class="align-middle text-center">Chưa thanh toán</th>
              <th class="align-middle text-center">Đã thanh toán</th>
              <th class="align-middle text-center">Tổng cộng</th>
            </tr>
          </thead>
          <tbody>
            <tr class="align-middle text-center">
              <td>Số lượng</td>
              <td><?php if(!empty($lctt)) echo count($lctt) ?></td>
              <td><?php if(!empty($ldtt)) echo count($ldtt)  ?></td>
              <td><?php if(!empty($l)) echo count($l) ?></td>
            </tr>
            <tr class="align-middle text-center">
              <td>Thành tiền</td>
              <td><?php if(!empty($lctt)) echo saves::change_price(compute_price($lctt))." vnd";?></td>
              <td><?php if(!empty($ldtt)) echo saves::change_price(compute_price($ldtt))." vnd";?></td>
              <td><?php if(!empty($l)) echo saves::change_price(compute_price($l))." vnd";?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="mt-5">
  <?php 
    if(!empty($lst_all))
      if(count($lst_all)>12) echo $paging_html; 
  ?>
</div>
