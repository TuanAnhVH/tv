<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

<?php
   $new = new taikhoan();
   $lst_cat = $new->db_get_list_taikhoan();
   $kq=false;
    $erros=[];
   if(!empty($_GET['id']))
   {
       $userid = $_GET['id'];
      
       $data = [
		'tendangnhap'=>$new->h->input_post('txt_tendangnhap'),
		'matkhau'=>$new->h->input_post('txt_matkhaumoi')
        

       ];
	   $row = $new->db_get_taikhoan_by_id($userid);
       
       if($new->h->is_submit('edit_user'))
       {
           $matkhau=$new->h->input_post('txt_matkhau');
        if($row['matkhau']!=md5($matkhau))
            $erros['matkhau']="Sai mật khẩu !";
        else if($new->db_update_taikhoan($data))
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
                        <h3>Đổi mật khẩu</h3>
                    </div>
                    <div class="card-body pb-0 text-primary" style="font-size: 17px;">
                        <p class="mt-3 mb-3 text-success" style="display: <?php echo $kq==true?'block':'none'?>">
                        Đổi thành công</p>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9col-md-9 col-lg-9 form-group">
                                <label>Tên đăng nhập</label>
	    		                <input  type="text" class="form-control" id="" name="txt_tendangnhap" value="<?php echo $row['tendangnhap'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9col-md-9 col-lg-9 form-group">
                                <label>Mật khẩu cũ</label>
	    		                <input  type="password" class="form-control" id="" name="txt_matkhau" >
                                <?php $new->h->show_error($erros,'matkhau'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9col-md-9 col-lg-9 form-group">
                                <label>Mật khẩu mới</label>
	    		                <input  type="password" class="form-control" id="" name="txt_matkhaumoi" >
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <input type="hidden" name="request_name" value="edit_user">
                        <input class="btn btn-primary mt-3" type="submit" value="Lưu">
                        <a class="btn btn-primary mt-3" href="<?php echo $new->h->get_url('tv/admin'); ?>">Trở về</a>
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
                txt_matkhau: {
                    required: true
                },
                txt_matkhaumoi:{
                required: true
            },
                
            },
            messages: {
                txt_matkhau: {
                    required: "&nbsp;<span class='text-danger'>Bạn chưa nhập mật khẩu cũ !</span>"
                },
                txt_matkhaumoi: {
                    required: "&nbsp;<span class='text-danger'>Bạn chưa nhập mật khẩu mới !</span>"
                },
               
               
            }
        });
    });
    
</script>