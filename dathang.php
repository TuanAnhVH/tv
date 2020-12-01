<?php 
  include_once('Classes/DA/database.php');
  include_once('Classes/DA/session.php');
  include_once('Classes/DA/role.php');
  include_once('Classes/DA/helper.php');
  include_once('Classes/BL/sanpham.php');
  $id="";
  $sl=1;
  if(isset($_POST['id']))
    $id=$_POST['id'];

  $sp= new sanpham();
  $item= $sp->db_get_sanpham_by_id($id);
  $ten=$item['tensanpham'];
  $dongia=$item['giatien'];

  $cart= $sp->r->session_get('cart');
  if(empty($cart))
  {
    $sp->r->session_set("cart",[$id=>array($id,$sl,$dongia)]);
    $cart= $sp->r->session_get('cart');
  }  
    else
    {
      if(isset($cart[$id]))
        $sl= $cart[$id][1]+1;

      $cart[$id]=array($id,$sl,$dongia);
      $sp->r->session_set("cart",$cart);
    }
  echo count($cart)."";
?>