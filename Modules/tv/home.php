<?php
  $new = new sanpham();
  $lst_new = $new->db_get_list_sanphammoi();
?>

<?php include_once("Layouts/slidebar.php"); ?>
<div class="clear"></div>
<div class="wrap">
  <div class="content">
    <?php include_once("Layouts/top.php"); ?>
    <div class="content-grids">
      <h4 class="text-danger mt-2">Hàng mới về</h4>
      <div class="row">
        <?php if(!empty($lst_new))
          foreach($lst_new as $row)
          {
        ?>
          <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo "uploads/".$row['avatar']?>" alt="photo" width="200" height="130">
            <h3><a href="#"><?php echo $row['tensanpham'] ?></a></h3>
            <p class="text-danger"><?php echo " ". saves::change_price($row['giatien'])." vnd"?></p>
            <div class="pl-3 pr-3">
              <p>
                <a href="" class="btn btn-primary">Thêm vào giỏ</a>
              </p>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
    <?php include_once("Layouts/right_menu.php"); ?>
  </div>
  <div class="clear"> </div>
</div>
