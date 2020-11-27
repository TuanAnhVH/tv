<?php 
 include_once('Classes/DA/database.php');
 include_once('Classes/DA/session.php');
 include_once('Classes/DA/role.php');
 include_once('Classes/DA/helper.php');
 include_once('Classes/BL/nuochoa.php');
$id="";
$sl=0;
  if(isset($_POST['id']))
    $id=$_POST['id'];
    if(isset($_POST['sl']))
    $sl=$_POST['sl'];

    $nh= new nuochoa();
    $item= $nh->db_get_nuochoa_by_id($id);
    $ten=$item['tennuochoa'];
    $dongia=$item['giatien'];

    if($item['soluonghientai']==0)
      echo "Sản phẩm đã hết hàng!";
    if($item['soluonghientai']<$sl)
      echo "Số lượng sản phẩm không đủ!";
    else
    {
        $cart= $nh->r->session_get('cart');
        if(empty($cart))
        {
            $nh->r->session_set("cart",[$id=>array($id,$sl,$dongia)]);
            
        }
           
        else
          {
            
              $cart[$id]=array($id,$sl,$dongia);
              $nh->r->session_set("cart",$cart);
          }
        
        echo "Đã thêm ".$ten ." vào giỏ hàng!";
    }
     

?>