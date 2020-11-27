<?php
$tk='';
if(isset($_GET['tk']))
    $tk=$_GET['tk'];

$tl2='';
if(isset($_GET['tl2']))
     $tl2=$_GET['tl2'];
$erro=[];
$cat = new sanpham();
$edit=false;
$imgfile = "";
$nhanhieu = new nhanhieu();
$lst_nhanhieu =$nhanhieu->db_get_list_nhanhieu();
$cat->h->upload_file('file_avatar',$imgfile);
if(isset($_GET['page']))
    $page=$_GET['page'];
else
    $page=1;

if(!empty($_GET['masanpham']))
{
    $catid = $_GET['masanpham'];
    $row = $cat->db_get_sanpham_by_id($catid);
    $soluong= (int)$cat->h->input_post('txt_soluong');
    $giatien= (float)$cat->h->input_post('txt_giatien');      
    if(empty($imgfile))
        $imgfile=$row['avatar'];
    $data = [
    
    'masanpham'=>$cat->h->input_post('txt_masanpham'),
    'tensanpham'=>$cat->h->input_post('txt_tensanpham'),
    'manhanhieu'=>$cat->h->input_post('st_nhanhieu'),
    'giatien'=>$giatien,
    'mota'=>$cat->h->input_post('txt_mota'),
    'avatar'=>$imgfile,
    ];
    try{
        if($cat->h->is_submit('edit_sanpham'))
        {  
            
           if( $cat->db_update_sanpham($data))
           {
            $row = $cat->db_get_sanpham_by_id($catid);
            $edit=true;
           }

            // $cat->h->redirect($cat->h->get_url("tv/admin/?tl=lnh&page=".$page));
        }
    }
    catch(Exception $e)
    {}

    
}
?>


<div class="container">
<div class="row">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 offset-1" style="justify-items: center;">
        <form action="" method="post" id="main-form" enctype="multipart/form-data">
            <div class="card border-primary">
                <div class="card-header bg-primary text-center  text-white">
                    <h3>Sửa sản phẩm</h3>
                </div>
                <div class="card-body pb-0 text-black" style="font-size: 19px;">
                <p class=" text-success mt-3" style="
                    display: <?php echo ($edit==true)?'block':'none' ?>;">
                    Sửa thành công!</p>
                    <div class="row">
                        <div class="col-xs-9 col-sm-9col-md-9col-lg-9 form-group">
                            <label class="text-primary">Mã sản phẩm</label>
                            <input  type="text" class="form-control" id="" name="txt_masanpham" value="<?php echo $row['masanpham'];?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9 col-sm-9col-md-9col-lg-9 form-group">
                            <label class="text-primary">Tên sản phẩm</label>
                            <input  type="text" class="form-control" id="" name="txt_tensanpham" value="<?php echo $row['tensanpham'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9 col-sm-9col-md-9col-lg-9 form-group">
                            <label class="text-primary">Nhãn hiệu</label>
                            <select  name="st_nhanhieu" class="form-control border-dark">
                                <option value="">-- Chọn Nhãn hiệu --</option>
                                <?php 
                                  foreach($lst_nhanhieu as $u){
                                ?>
                                    <option value="<?php echo $u['manhanhieu'];?>" <?php echo $row['manhanhieu']==$u['manhanhieu']?'selected':'';  ?>>
                                        <?php echo $u['tennhanhieu'];?>
                                    </option>
                                  <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                            <label class="text-primary">Giá tiền</label>
                            <input  type="text" class="form-control" id="" name="txt_giatien" value="<?php echo $row['giatien'];?>">
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-group">
                            <label class="text-primary">Số lượng</label>
                            <input  type="text" class="form-control" id="" name="txt_soluong" value="<?php echo $row['soluonghientai'];?>">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9 col-sm-9col-md-9col-lg-9 form-group">
                            <label class="text-primary">Mô tả</label>
                            <textarea class="summernote form-control" name="txt_mota"><?php echo $row['mota'];?></textarea>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-xs-9 col-sm-9col-md-9col-lg-9 form-group">
                        <h3 class="text-primary primary pt-0">Ảnh avatar</h3>
                          <div class=" p-2" style="border:1px solid #EEEEEE;">
                             <input class="fs-17" type="file" name="file_avatar" >
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3 ">
                    <input type="hidden" name="request_name" value="edit_sanpham">
                    <input class="btn btn-primary" type="submit" value="Lưu">
                    <a class="btn btn-primary" href="<?php echo $cat->h->get_url('tv/admin/?tl=tk&tl2='.$tl2.'&tk='.$tk.'&page='.$page); ?>">Trở Về</a>
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
    $("#main-form").validate({
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
        }
    }
});
});
</script>

