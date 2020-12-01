<?php 
  $sanpham= new sanpham();
  if(isset($_GET['s']))
    $search=$_GET['s'];
    
?>
<div class="wrap">
  <div class="header">
    <div class="search-bar">
      <form action="<?php echo $sanpham->h->get_url('tv/'); ?> " method="get" >
        <input type="text" id="search" name="s" maxlength="400" >		
        <input type="submit" value="Tìm kiếm" id="searchbtn" />		
      </form>
    </div>
    <div class="clear"> </div>
    <div class="header-top-nav">
      <ul>
        <li><a href="<?php echo $sanpham->h->get_url('tv/?m=common&a=home&tl=giohang')?>" class="text-danger">
          Giỏ hàng: </a>&nbsp;<span id="soluonggio"></span> sản phẩm</li>
      </ul>
    </div>
    <div class="clear"> </div>
  </div>
</div>
<div class="clear"></div>
<div class="top-header">
  <div class="wrap">
    <div class="logo">
      <a href="#"><img src="public/images/user/bg/shop.png" alt="logo"></a>
    </div>
    <div class="top-nav">
      <ul>
        <li><a href="#">Trang chủ</a></li>
        <li><a href="<?php echo $sanpham->h->get_url('tv/?m=common&a=home&tl=tatca') ?>">Sản phẩm</a></li>
        <li><a href="<?php echo $sanpham->h->get_url('tv/?m=common&a=home&tl=gioithieu'); ?>">Giới thiệu</a></li>
        <li><a href="<?php echo $sanpham->h->get_url('tv/?m=common&a=home&tl=phanhoi'); ?>">Phản hồi</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
