<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>
<?php
   $new = new nhanhieu();
   $erros= array();
   $kq=false;
   if(!empty($_GET['manhanhieu']))
   {
     $newid = $_GET['manhanhieu'];
     $data = [
      'manhanhieu'=>$newid,
      'tennhanhieu'=>$new->h->input_post('txttennhanhieu')
    ];
  
    $row = $new->db_get_list_nhanhieu_by_id($newid);
    if($new->h->is_submit('edit-cat') )
    {
      $row2 = $new->db_get_nhanhieu_by_name($data);
      if(!empty($row2))
      {
          $erros['tennhanhieu'] = "Nhãn hiệu này đã tồn tại !";
      }
      else if ($new->db_update_nhanhieu($data))
      {
        $kq=true;
        $row = $new->db_get_list_nhanhieu_by_id($newid);
      }
      
    }
   }
?>


<div class="container">
    <div class="row">
        <div class="col-xs-8 col-sm-8c ol-md-8 col-lg-8 offset-2">
            <form action="" method="post" id="add-form">
                <div class="card border-danger">
                    <div class="card-header bg-primary text-center  text-white">
                        <h3>Sửa Nhãn hiệu</h3>
                    </div>
                    <div class="card-body pb-0 text-primary" style="font-size: 17px;">
                        <p class="mt-3 mb-3 text-success" style="display: <?php echo $kq==true?'block':'none'?>">
                        Sửa thành công</p>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9col-md-9 col-lg-9 form-group">
                                <label>Tên Nnhãn hiệu</label>
	    		                <input  type="text" class="form-control" value="<?php echo $row['tennhanhieu'];?>" id="" name="txttennhanhieu" >
                                <?php $new->h->show_error($erros,'tennhanhieu');?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <input type="hidden" name="request_name" value="edit-cat">
                        <input class="btn btn-primary mt-3" type="submit" value="Sửa">
                        <a class="btn btn-primary mt-3" href="<?php echo $new->h->get_url('tv/admin/?tl=ltl'); ?>">Danh sách</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
		
   
    $("#add-form").validate({
        rules: {
            txttennhanhieu: {
                required: true
            },
            
        },
        messages: {
            txttennhanhieu: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập tên Nhãn hiệu !</span>"
            },
           
           
        }
    });
});

</script>