<?php 
    $new = new sanpham();
    $nhanhieu= new nhanhieu();
    $ma="";
    if(isset($_GET['ma']))
        $ma=$_GET['ma'];
    $sp= $new->db_get_sanpham_by_id($ma);
    if(!empty($sp))
      $nh= $nhanhieu->db_get_list_nhanhieu_by_id($sp['manhanhieu']);
?>

<div class="wrap">
  <div class="content-grids mt-3">
    <h3 class="text-danger mb-3">Thông tin sản phẩm</h3>
    <div class="detalis-image">
      <div class="flexslider">
        <ul class="slides">
          <li data-thumb="images/m11.jpg">
            <div class="thumb-image"> 
              <img src="<?php echo "uploads/".$sp['avatar']?>" data-imagezoom="true"
                class="img-responsive" alt="" />
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="detalis-image-details">
      <div class="brand-value mt-0">
        <h3 class="text-primary"><?php echo $sp['tensanpham'] ?></h3>
        <div class="left-value-details">
          <p><b>Giá:</b><span class="text-danger"><?php echo " ". saves::change_price($sp['giatien'])." vnd"?></span></p>
          <p><b>Nhãn hiệu:</b> <?php echo $nh['tennhanhieu'] ?></p>
            <button class="btn btn-primary btnmua" data-id="<?php echo $sp['masanpham']?>">Thêm vào giỏ</button>
        </div>
      </div>   
    </div>
    <div class="clear"></div>
    <div class="col-10 mt-2" >
      <h4 class="text-primary">Mô tả :</h4>
      <p><?php echo $sp['mota'] ?></p>
      <div class="share">
        <ul>
          <li><a href="#"><img src="public/images/user/bg/twitter.png" alt="twitter"></a></li>
          <li><a href="#"><img src="public/images/user/bg/facebook.png" alt="facebook"></li>
          <li><a href="#"><img src="public/images/user/bg/rss.png" alt="Rssk"></li>
        </ul>
      </div>
    </div>
  </div>
  <?php include_once("Layouts/right_menu.php"); ?>
  <div class="clear"></div>
</div>
