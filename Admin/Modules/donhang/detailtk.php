<?php 

  $cat = new donhang();
  $page=1;
  if(!isset($_GET['madonhang']))
  {
    die();
  }
  else
  {
    $madonhang=$_GET['madonhang'];
    $donhang = $cat->db_get_donhang_by_id($madonhang);
  }


                    
?>
<div  id="dialog1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        
            <div class="modal-header">
                <h3 class="modal-title text-center text-primary ml-2">Chi tiết đơn hàng</h3>
               
            </div>
            
            <div class="modal-body">
        <table class=" ml-lg-2">
          <tr>
            <td><label class=" text-bold text-primary">Khách hàng: </label> </td>
            <td><label class=" ml-3"> <?php echo $donhang['tenkhachhang'] ?> </label></td>
          </tr>	
          <tr>
            <td><label class=" text-bold text-primary">Số điện thoại: </label> </td>
            <td><label class=" ml-3"> <?php echo $donhang['sodienthoai'] ?> </label></td>
          </tr>
          <tr>
            <td><label class=" text-bold text-primary">Email: </label> </td>
            <td><label class=" ml-3"> <?php echo $donhang['email'] ?> </label></td>
          </tr>
          <tr>
            <td><label class=" text-bold text-primary">Địa chỉ: </label> </td>
            <td><label class=" ml-3"> <?php echo $donhang['diachi'] ?> </label></td>
          </tr>
          <tr>
            <td><label class=" text-bold text-primary">Trạng thái: </label> </td>
            <td><label class=" ml-3"> <?php echo $donhang['tentrangthai'] ?> </label></td>
          </tr> 
          <tr>
            <td><label class=" text-bold text-primary">Ngày đặt hàng: </label> </td>
            <td><label class=" ml-3"> <?php echo $donhang['ngaytao'] ?> </label></td>
          </tr>
          <tr>
            <td><label class=" text-bold text-primary">Ngày thanh toán: </label> </td>
            <td><label class=" ml-3"> <?php echo empty($donhang['ngaythanhtoan'])?'Chưa thanh toán':$donhang['ngaythanhtoan']
             ?> </label></td>
             
            
          </tr>
        </table>
          <table class="table table-bordered mt-3">
              <thead class=" bg-primary text-white ">  
                <tr class="align-middle text-center">
                  <th class="text-center">STT</th>
                  <th class="text-center">Mã sản phẩm</th>
                  <th class="text-center">Đơn giá</th>
                  <th class="text-center">Số lượng</th>
                  <th class="text-center">thành tiền</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                  $stt=1;
                  $tong=0;
                  $lstchitiet = $cat->db_get_list_chitietdonhang($madonhang);
                    if(!empty($lstchitiet))
                      {
                        foreach($lstchitiet as $c)
                        {
                          
                          $thanhtien=(int)$c['soluong']*(float)$c['dongia'];
                          $tong+= $thanhtien;
                      ?>
                <tr class="align-middle text-center">
                  <td><?php echo $stt?></td>
                  <td><?php echo $c['masanpham']; ?></td>
                  <td><?php echo saves::change_price($c['dongia']); ?></td>
                  <td><?php echo $c['soluong']; ?></td>
                  <td><?php  echo saves::change_price($thanhtien).' vnd'; ?></td>
                  
                </tr>
                
                  <?php $stt++;}}?>
                <tr class="align-middle text-center text-bold text-primary">
                  <td >Tổng thanh toán</td>
                  <td colspan="4"><?php echo saves::change_price($tong).' vnd';?></td>
                </tr>
              </tbody>
          </table>
        
            </div>
            <a href=""></a>
            <div class="modal-footer ">
        <div style="display:flex; justify-content:center;" class="mt-3"> 
          <form class="frm_thanhtoan" action="<?php echo $cat->h->get_url('tv/admin/?m=donhang&a=thanhtoan') ?>" method="post">
            <div>
              <input type="hidden" name="madonhang" value="<?php echo $madonhang; ?>">
              <input type="hidden" name="request_name" value="thanhtoan_donhang">
              <?php if(empty($donhang['ngaythanhtoan'])) echo  '<a class="btn_thanhtoan" href="#" id=""><button class=" btn btn-warning">
              Thanh toán</button></a>'; ?>
              <a href=" <?php echo $cat->h->get_url('tv/admin/?tl=tk&tl2=ldh&tk='.$madonhang);?>">
              <button type="button"   class="btn btn-primary ml-3">Trở về
              </button>
              </a> 
            </div>
          </form>
        </div>
            </div>
            
        </div>
    </div>
</div>
<script>

  $('.btn_thanhtoan').click(function(){
      $(this).parent().parent().submit();
       return false;
    });

    $('.frm_thanhtoan').submit(function(){
      if(!confirm('Bạn có chắc muốn thanh toán đơn hàng này không ?'))
      {
        return false;
      }
      $(this).append('<input type="hidden" name="redirect" value="'+ window.location.href +'">');
      return true;
    });
</script>
