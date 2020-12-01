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
  if(isset($_POST['sl']))
    $sl=$_POST['sl'];

  $sp= new sanpham();
  $item= $sp->db_get_sanpham_by_id($id);
  $dongia=$item['giatien'];

  $cart= $sp->r->session_get('cart');
  $cart[$id]=array($id,$sl,$dongia);
  $sp->r->session_set("cart",$cart);
?>