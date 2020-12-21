<?php
  $new = new sanpham();
  $price=0;
  $ma="";
  if(isset($_GET['ma']))
  {
    $ma=$_GET['ma'];
    $sp= $new->db_get_sanpham_by_id($ma);
    $price= $sp['giatien'];
  }
  
  $lst = $new->db_get_list_sanpham_tuongduong($price);
?>

<div class="content-grids">
  <h4 class="text-primary mt-3 ml-3">Sản phẩm tương đương</h4>
  <hr>
  <div class="row">
    <?php if(!empty($lst))
      $stt=0;
      foreach($lst as $row)
      {
        if($row['masanpham']==$ma)
          continue;
        if($stt>=4)
          break;
    ?>
      <div class="grid_1_of_4 images_1_of_4 products-info">
        <img src="<?php echo "uploads/".$row['avatar']?>" alt="photo" width="200" height="130">
        <h3>
          <a href="<?php echo $new->h->get_url('/tv/?m=common&a=home&tl=chitiet&ma='.$row['masanpham']).'&n='.$row['manhanhieu'];?>">
            <?php echo $row['tensanpham'] ?>
          </a>
        </h3>
        <p class="text-danger"><?php echo " ". saves::change_price($row['giatien'])." vnd"?></p>
      </div>
    <?php $stt++; }?>
  </div>
  <hr>
</div>