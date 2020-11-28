<?php 
  $nhanhieu= new nhanhieu();
  $lst= $nhanhieu->db_get_list_nhanhieu();

?>

<div class="content-sidebar mt-3">
  <h4 class="text-danger">Nhãn hiệu</h4>
    <ul>
      <?php 
        if(!empty($lst))
          foreach($lst as $row)
          { 
      ?>
            <li><a href="<?php echo $nhanhieu->h->get_url('tv/?m=common&a=home&tl=nhanhieu&id='.$row['manhanhieu']) ?>">
            <?php echo $row['tennhanhieu'] ?></a></li>
      <?php }?>
    </ul>
</div>
