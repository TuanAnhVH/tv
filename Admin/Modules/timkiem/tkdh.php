<?php
  $new = new donhang();
  $search='';
  if( $new ->h->is_submit('form-search'))
  {
      $search=  $new->h->input_post('txtsearch');
  }
  else if(isset($_GET['tk']))
      $search=$_GET['tk'];
      

  $lst =$new->db_get_donhang_by_id($search);
?>
<div class="container">
  <div class="row mt-4 mb-4">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card ">
<div class="card-header bg-primary text-white text-center">
    <h3>Tìm kiếm đơn hàng: <?php echo $search; ?></h3>
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
            {
              $tong=0;
              $lstchitiet =$new->db_get_list_chitietdonhang($lst['madonhang']);
              if(!empty($lstchitiet))
              {
                foreach($lstchitiet as $c)
                  $tong+= (int)$c['soluong']*(float)$c['dongia'];
              }
            ?>
              <tr class="align-middle text-center">
                <td><?php echo $lst['madonhang']; ?></td>
                <td><?php echo $lst['tenkhachhang']; ?></td>
                <td><?php   echo $lst['sdt']; ?></td>
                <td><?php  echo $lst['ngaylap']; ?></td>
                <td><?php  echo $lst['ngaythanhtoan']; ?></td>
                <td><?php  echo saves::change_price($tong).' vnd'; ?></td>                   
                <td>
                    <a  href=" <?php echo$new->h->get_url('tv/admin/?tl=ddhtk'.'&madonhang='.$lst['madonhang']); ?>">
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
  </div>
</div>








