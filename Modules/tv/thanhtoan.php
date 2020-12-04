<?php
 $sp= new sanpham();
 $dh= new donhang();
 $cart= $sp->r->session_get('cart');
?>

<div class="clear"> </div>
<div class="wrap">
  <div class="content">
    <div class="section group">
      <div>
        <div class="col-md-6 offset-3 mt-3">
          <div class="contact-form">
            <h2 class="text-primary">Thông tin khách hàng</h2>
            <form action="<?php echo $sp->h->get_url('tv/?m=common&a=home&tl=thanhtoantc')?>" id="frmthanhtoan" method="post">
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
                <span><input name="txtemail"  class="form-control" type="email"></span>
              </div>
              <div>
                <span><label class="text-primary">Đại chỉ</label></span>
                <span><textarea name="txtdiachi" class="form-control"></textarea></span>
              </div>
              <div>
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
  $("#frmthanhtoan").validate({
    rules: {
      txttenkhachhang: {
        required: true,
      },
      txtsodienthoai: {
        required: true,
      },
      txtdiachi: {
        required: true,
      },
        txtemail: {
        email:true,
      }
    },
    messages: {
        txttenkhachhang: {
            required: "<span class='text-danger'>Bạn chưa nhập tên khách hàng</span>"
        },
        txtsodienthoai: {
            required: "<span class='text-danger'>Bạn chưa nhập số điện thoại</span>"
        },
        txtdiachi: {
            required: "<span class='text-danger'>Bạn chưa nhập địa chỉ</span>"
        },
        txtemail: {
            email: "<span class='text-danger'>Email không đúng định dạng!</span>"
        },
    }
  });
</script>

