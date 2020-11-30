<?php
  $id=0;
  if(isset($_GET['id']))
    $id=$_GET['id'];
  $nhanhieu = new nhanhieu;
  $nhanhieu= $nhanhieu->db_get_list_nhanhieu_by_id($id);
  $new = new sanpham();

  $paging_html = "";
  $lst = $new->db_get_list_sanpham_paging_user_by_nhanhieu($paging_html,$id);
  $lst_all= $new->db_get_list_sanpham_by_nhanhieu($id)
?>

<div class="wrap">
  <div class="content">
    <div class="content-grids">
      <h4 class="text-danger mt-2"><?php echo $nhanhieu['tennhanhieu'] ?></h4>
      <div class="row">
        <?php if(!empty($lst))
          foreach($lst as $row)
          {
        ?>
          <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo "uploads/".$row['avatar']?>" alt="photo" width="200" height="130">
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
        <?php }
        else
          {
        ?>
          <h4 class ="text-primary">Nhãn hiệu này chưa có sản phẩm nào!!</h4>
        <?php
          }
        ?>
      </div>
      <div class="mt-2 ml-4">
        <?php 
          if(!empty($lst_all))
            if(count($lst_all)>8) echo $paging_html; 
        ?>
      </div>
    </div>
    <?php include_once("Layouts/right_menu.php"); ?>
  </div>
  <div class="clear"> </div>
</div>

<script>
  $('.btnmua').click(function(){
    var id= $(this).attr("data-id");
    $.ajax({
      method: "POST",
    url: "dathang.php",
    data:{
          "id":id,
        } ,
    success : function(response){
          alert(response);
        },       
    })
  });
</script>