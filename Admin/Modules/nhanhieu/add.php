<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

<?php
   $erros= array();
   $new = new nhanhieu();

   $kq=false;
   
   if($new->h->is_submit("add_new"))
   {
    $data = [
        'tennhanhieu'=>$new->h->input_post('txttennhanhieu')
     ];

    $row = $new->db_get_nhanhieu_by_name($data);
    if(!empty($row))
    {
        $erros['tennhanhieu'] = "Nhãn hiệu này đã tồn tại !";
    }
    else
    {
         if($new->db_insert_nhanhieu($data))
         {
            $kq=true;
            
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
                        <h3>Thêm Nhãn hiệu</h3>
                    </div>
                    <div class="card-body pb-0 text-primary" style="font-size: 17px;">
                        <p class="mt-3 mb-3 text-success" style="display: <?php echo $kq==true?'block':'none'?>">
                        Thêm thành công</p>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9col-md-9 col-lg-9 form-group">
                                <label>Tên Nhãn hiệu</label>
	    		                <input  type="text" class="form-control" id="" name="txttennhanhieu" >
                                <?php $new->h->show_error($erros,'tennhanhieu'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <input type="hidden" name="request_name" value="add_new">
                        <input class="btn btn-primary mt-3" type="submit" value="Thêm">
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