<?php

 $nh= new nuochoa();
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

<div id="content">
<div>
<h1>Giỏ hàng của bạn</h1>

<table id="tablegiohang">
   <thead>
    <tr>

      <th>Tên sản phẩm</th>
      <th>Hình ảnh</th>
      <th>Số lượng</th>
      <th>Đơn giá</th>
      <th>thành tiền</th>
      <th>#</th>
    </tr>
   </thead>
   <tbody>
   <?php 

     if(!empty($cart))
          foreach($cart as $row)
          {   
            $item= $nh->db_get_nuochoa_by_id($row[0]);
            $ten=$item['tennuochoa'];
            $avatar=$item['avatar'];
            $soluong=$row[1];
            $gia=$item['giatien'];
            $thanhtien=$soluong*$gia;
            $tongcong+=$thanhtien;

   ?>
   <tr>
     <td><?php echo $ten; ?></td>
     <td> <img src="<?php echo "uploads/".$avatar?>" alt="Image" width="100" height="80" /></a></td>
     <td><?php echo $soluong ?></td>
     <td><?php echo saves::change_price($gia)."" ?></td>
     <td><?php echo saves::change_price($thanhtien)." vnd"; ?></td>
     <td> <a href="<?php echo $nh->h->get_url('tv/?m=common&a=home&tl=deletegio&i=gh&id='.$row[0])?>"><i class="fas fa-trash-alt"></i></a></td>
   </tr>
    <?php }?>
   </tbody>
   
 </table>
<?php
   if(!empty($cart))
   {
    echo ' <h2>Tổng: '.saves::change_price($tongcong).' vnd</h2> <a href="?m=common&a=home&tl=thanhtoan"><button class="btngio">Thanh toán</button></a>
    <a href="'.$nh->h->get_url('tv/?m=common&a=home&tl=deletegio&i=gh').'"><button class="btngio">Làm mới</button></a>';
   }
 ?>

 </div>

</div>




