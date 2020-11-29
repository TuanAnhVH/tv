<?php 
  $new = new sanpham();
  $paging_html = "";
  $lst=  $new->db_get_list_sanpham_paging_user_by_search($paging_html,$search);
  $lst_all=  $new->db_get_list_allsanpham_by_search($search);
?>


<div class="wrap">
  <h2 class="text-primary mt-3">Kết quả tìm kiếm:
    <i class="text-danger">'<?php echo $search ?>'</i>
  </h2>
 
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
            <a href="" class="btn btn-primary">Thêm vào giỏ</a>
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