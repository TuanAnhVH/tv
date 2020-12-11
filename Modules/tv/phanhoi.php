<?php
  $new = new phanhoi();
  $kq=false;
  $erros = array();

  if($new->h->is_submit('add_new'))
  {
    $data = [
    'tenkhachhang'=>$new->h->input_post('txttenkhachhang'),
    'sodienthoai'=>$new->h->input_post('txtsodienthoai'),
    'email'=>$new->h->input_post('txtemail'),
    'noidung'=>$new->h->input_post('txtnoidung')
    
    ];
  
    if($new->db_insert_phanhoi($data))
    {
      $kq=true;
      
    }
  }
   
?>
<div class="clear"> </div>
<div class="wrap">
  <div class="content">
    <div class="section group">
      <div>
        <div class="col-md-6 offset-3 mt-3">
          <div class="contact-form">
            <span class="mt-3 mb-3 text-success" style="display: <?php echo $kq==true?'block':'none'?>">Góp ý kiến Thành công</span>
            <h2 class="text-primary">Ý kiến phản hồi</h2>
            <form action="" id="frmphanhoi" method="post">
              <div>
                <span><label class="text-primary">Tên khách hàng:</label></span>
                <input name="txttenkhachhang" class="form-control" type="text">
              </div>
              <div>
                <span><label class="text-primary">Số điện thoại</label></span>
                <span><input name="txtsodienthoai"  class="form-control" type="text"></span>
              </div>
              <div>
                <span><label class="text-primary">Email</label></span>
                <span><input name="txtemail" class="form-control" type="email"></span>
              </div>
              <div>
                <span><label class="text-primary">Nội dung</label></span>
                <span><textarea name="txtnoidung" class="form-control"></textarea></span>
              </div>
              <div>
                <input type="hidden" name="request_name" value="add_new">
                <span><input class="btn btn-primary" type="submit" value="Xác nhận"></span>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
  </div>
</div>

<script>
  $("#frmphanhoi").validate({
    rules: {
      txttenkhachhang: {
        required: true,
      },
      txtnoidung: {
        required: true,
      },
      txtemail: {
        required: true,
        email:true,
      }
    },
    messages: {
        txttenkhachhang: {
          required: "<span class='text-danger'>Bạn chưa nhập tên khách hàng</span>"
        },
        txtnoidung: {
          required: "<span class='text-danger'>Bạn chưa nhập nội dung</span>"
        },
        txtemail: {
          required: "<span class='text-danger'>Bạn chưa nhập email</span>",
          email: "<span class='text-danger'>Email không đúng định dạng!</span>"
        },
    }
  });
</script>
