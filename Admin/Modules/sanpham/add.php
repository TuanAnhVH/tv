<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

<?php 
   $erros=[];
   $kq=false;
   $new = new sanpham();
   $cat = new nhanhieu();
   $lst_cat =$cat->db_get_list_nhanhieu();
   $imgfile = "";
   $new->h->upload_file('file_avatar',$imgfile);
   if($new->h->is_submit('add_new'))
   {
       $soluong= (int)$new->h->input_post('txt_soluong');
       $giatien= (float)$new->h->input_post('txt_giatien');
       $ktma = $new->db_get_sanpham_by_id($new->h->input_post('txt_masanpham'));
       if(!isset($ktma['masanpham']))
       {
            $data = [
                
                'masanpham'=>$new->h->input_post('txt_masanpham'),
                'tensanpham'=>$new->h->input_post('txt_tensanpham'),
                'manhanhieu'=>$new->h->input_post('st_nhanhieu'),
                'giatien'=>$giatien,
                'mota'=>$new->h->input_post('txt_mota'),
                'avatar'=>$imgfile,
            ];
            if($new->db_insert_sanpham($data))
            {
                $kq=true;
                
            }
        }
        else
        {
            $erros['masanpham']="Mã này đã tồn tại !";
            
        }

   }
?>


<div class="container">
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 offset-1">
            <form action="" method="post" id="add-form" enctype="multipart/form-data">
                <div class="card border-danger">
                    <div class="card-header bg-primary text-center  text-white">
                        <h3>Thêm sản phẩm</h3>
                    </div>
                    <div class="card-body pb-0 text-primary" style="font-size: 17px;">
                    <p class="mt-3 mb-3 text-success" style="display: <?php echo $kq==true?'block':'none'?>">
                        Thêm Thành công</p>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Mã sản phẩm</label>
	    		                <input  type="text" class="form-control" id="" name="txt_masanpham" >
                                <?php $new->h->show_error($erros,'masanpham'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Tên sản phẩm</label>
	    		                <input  type="text" class="form-control" id="" name="txt_tensanpham" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Nhãn hiệu</label>
                                <select id="st_tl" name="st_nhanhieu" class="form-control border-dark">
                                    <option value="" >-- Chọn Nhãn hiệu --</option>
                                    <?php 
                                      foreach($lst_cat as $row){
                                    ?>
                                        <option value="<?php echo $row['manhanhieu'];?>" >
                                            <?php echo $row['tennhanhieu'];?>
                                        </option>
                                      <?php }?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Giá tiền</label>
	    		                <input  type="text" class="form-control" id="" name="txt_giatien" >
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                                <label>Mô tả</label>
	    		                <textarea class="summernote form-control" name="txt_mota" ></textarea>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                            <h4 class="text-primary pt-0 pl-3">Ảnh avatar</h4>
    		  		        <div class="ml-3 p-2" style="border:1px solid #EEEEEE;">
    		  			       <input class="fs-17" type="file" name="file_avatar" >
    		  		        </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        
                        <input type="hidden" name="request_name" value="add_new">
                        <input class="btn btn-primary" type="submit" value="Thêm">
                        <a class="btn btn-primary" href="<?php echo $cat->h->get_url('tv/admin/?tl=lnh'); ?>">Danh sách</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
	$(document).ready(function() {
		//Thiết lập Editor Summernote
	    $('.summernote').summernote({
	        height: 240,                 // set editor height
	        minHeight: null,             // set minimum height of editor
	        maxHeight: null,             // set maximum height of editor
	        focus: false                 // set focus to editable area after 
	    });
         //validation
        $("#add-form").validate({
            rules: {
            txt_masanpham: {
                required: true
            },
            txt_tensanpham: {
                required: true
            },
            st_nhanhieu: {
                required: true,
            },
            txt_giatien: {
                required: true,
            },
            txt_soluong: {
                required: true
            },
            txt_dungtich: {
                required: true
            }
        },
        messages: {
            txt_masanpham: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập mã sản phẩm !</span>"
            },
            txt_tensanpham: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập tên sản phẩm !</span>"
            },
            st_nhanhieu: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa chọn Nhãn hiệu !</span>"
            },
            txt_giatien: {
                required: "&nbsp;<span class='text-danger'>Bạn chưa nhập giá tiền !</span>"
            },
        }
    });
  
});

    
</script>


