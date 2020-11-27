<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

<?php
   $new = new taikhoan();
   $kq=false;
   $erros = array();

   if($new->h->is_submit('add_new'))
   {
       $data = [
        'tendangnhap'=>$new->h->input_post('txt_tendangnhap'),
        'matkhau'=>$new->h->input_post('txt_matkhau'),
        're-password'=>$new->h->input_post('txt_repassword'),
        'email'=>$new->h->input_post('txt_email')
        
       ];
      
          $row = $new->db_get_taikhoan_by_id($data['tendangnhap']);
          if(!empty($row))
          {
             $erros['tendangnhap'] = "Tên đăng nhập này đã tồn tại !";
          }
    
          $row = $new->db_get_taikhoan_by_email($data['email']);
          if(!empty($row))
          {
            $erros['email'] = "Email này đã tồn tại !"; 
          }
      
       if(empty($erros))
       {
            unset($data['re-password']); 
          if($new->db_insert_taikhoan($data))
          {
            $kq=true;
           
          }
       }
   }
   
?>

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 offset-2">
            <form action="" method="post" id="add-form">
                <div class="card border-danger">
                    <div class="card-header bg-primary text-center  text-white">
                        <h3>Thêm Tài khoản</h3>
                    </div>
                    <div class="card-body pb-0 text-primary" style="font-size: 17px;">
                    <p class="mt-3 mb-3 text-success" style="display: <?php echo $kq==true?'block':'none'?>">
                        Thêm Thành công</p>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Tên đăng nhập</label>
	    		                <input  type="text" class="form-control" id="" name="txt_tendangnhap" >
                                <?php $new->h->show_error($erros,'tendangnhap'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Mật khẩu</label>
	    		                <input  type="password" class="form-control" id="txt_matkhau" name="txt_matkhau" >
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input  type="password" class="form-control" id="" name="txt_repassword">
                            </div>
                        </div>
                     
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Email</label>
                                <input  type="text" class="form-control" id="" name="txt_email" >
                                <?php $new->h->show_error($erros,'email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        
                        <input type="hidden" name="request_name" value="add_new">
                        <input class="btn btn-primary mt-3" type="submit" value="Thêm">
                        <a class="btn btn-primary mt-3" href="<?php echo $new->h->get_url('tv/admin/?tl=ltk'); ?>">Danh sách</a>
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
            txt_tendangnhap: {
                required: true
            },
            txt_matkhau: {
                required: true
            },
            txt_repassword: {
                equalTo: "#txt_matkhau"
            },
            txt_email: {
                required: true,
                email: true
            }
        
        },
        messages: {
            txt_tendangnhap: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập tên đăng nhập !</span>"
            },
            txt_matkhau: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập mật khẩu !</span>"
            },
            txt_repassword: {
                equalTo: "&nbsp;<span class='text-danger'>Bạn nhập lại mật khẩu không đúng !</span>"
            },
            txt_email: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập địa chỉ email !</span>",
                email: "&nbsp;<span class='text-danger'>Bạn nhập chưa đúng định dạng email !</span>"
            },
            
           
        }
    });
    $.validator.methods.email = function(value, element) {
        return this.optional(element) || /^[\w\.]+\@\w+\.[a-zA-Z]{2,3}(\.[a-zA-Z]{2,3})?$/.test(value);
    }
});

</script>