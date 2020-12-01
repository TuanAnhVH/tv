<?php
  $nh= new sanpham();
  $ten="";
  $gia=0;
  $soluong=0;
  $thanhtien=0;
  $tongcong=0;
  $id="";

  if(!isset($_GET['id']))
    $nh->r->session_delete('cart');
  else
  {
    $cart= $nh->r->session_get('cart');
    $id=$_GET['id'];
    unset($cart[$id]);
    $nh->r->session_delete('cart');
    $nh->r->session_set("cart",$cart);
  }

  $cart= $nh->r->session_get('cart');
?>

<div class="wrap">
  <div>
    <h1 class="text-primary mt-3">Giỏ hàng của bạn</h1>
    <table class="table text-center mt-5">
      <thead class="text-white bg-primary">
        <tr>
          <th class="text-left">Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
          <th>Thành tiền</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody>
        <?php 

          if(!empty($cart))
            foreach($cart as $row)
            {   
              $item= $nh->db_get_sanpham_by_id($row[0]);
              $ten=$item['tensanpham'];
              $avatar=$item['avatar'];
              $soluong=$row[1];
              $gia=$item['giatien'];
              $thanhtien=$soluong*$gia;
              $tongcong+=$thanhtien;
        ?>
        <tr class="">
          <td class="text-left text-bold text-primary"><?php echo $ten; ?></td>
          <td> <img src="<?php echo "uploads/".$avatar?>" alt="Image" width="160" height="120" /></a></td>
          <td>
            <input type="number" value="<?php echo $soluong ?>"  min="1" data-id="<?php echo $row[0]; ?>"
              style="width:25%; margin: 0px auto;" class="form-control text-primary sl">
          </td>
          <td id="dongia-<?php echo $row[0]; ?>"><?php echo saves::change_price($gia)."" ?></td>
          <td class="thanhtien" id="thanhtien-<?php echo $row[0]; ?>"><?php echo saves::change_price($thanhtien); ?></td>
          <td> <a href="<?php echo $nh->h->get_url('tv/?m=common&a=home&tl=deletegio&i=gh&id='.$row[0])?>">
            <i class="fas fa-trash-alt text-danger"></i></a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
      <?php
        if(!empty($cart))
        {
          echo ' <h3 class="mb-3">Tổng: <span id="tongtien">'.saves::change_price($tongcong).'</span> vnd</h3> 
          <a href="'.$nh->h->get_url('tv/?m=common&a=home&tl=thanhtoan').'"><button class="btn btn-success">Đặt hàng</button></a>
          <a href="'.$nh->h->get_url('tv/?m=common&a=home&tl=deletegio').'"><button class="btn btn-warning">Làm mới</button></a>';
        }
        else
          echo '<h3 class="text-danger">Giỏ hàng trống!</h3>'
      ?>
  </div>
</div>


