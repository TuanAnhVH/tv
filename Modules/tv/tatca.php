<?php
  $new = new sanpham();
  $paging_html = "";
  $lst = $new->db_get_list_sanpham_paging($paging_html);
  $lst_all= $new->db_get_list_allsanpham();
?>

<div class="wrap">
  <h2 class="text-primary mt-3">Tất cả sản phẩm</h2>
  <div class="row">
    <?php if(!empty($lst))
      foreach($lst as $row)
      {
    ?>
      <div class="grid_1_of_4 images_1_of_4 products-info">
        <img src="<?php echo "uploads/".$row['avatar']?>" alt="photo" width="250" height="170">
        <h3>
          <a href="<?php echo $new->h->get_url('/tv/?m=common&a=home&tl=chitiet&ma='.$row['masanpham']).'&n='.$row['manhanhieu'];?>">
            <?php echo $row['tensanpham'] ?>
          </a>
        </h3>
        <p class="text-danger"><?php echo " ". saves::change_price($row['giatien'])." vnd"?></p>
        <div class="pl-3 pr-3">
          <p>
            <button class="btn btn-primary btnmua" data-id="<?php echo $row['masanpham']?>">Thêm vào giỏ</button>
          </p>
        </div>
      </div>
    <?php }?>
  </div>
  <div class="mt-2 ml-4">
    <?php 
      if(!empty($lst_all))
        if(count($lst_all)>12) echo $paging_html; 
    ?>
  </div>
</div>
