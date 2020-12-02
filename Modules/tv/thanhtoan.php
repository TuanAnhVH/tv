<?php
 $sp= new sanpham();
 $dh= new donhang();
 $cart= $sp->r->session_get('cart');
?>

<div id="wrap">
 <div>
  <h1>Thông tin khách hàng</h1>
  <form action="<?php echo $sp->h->get_url('tv/?m=common&a=home&tl=thanhtoantc')?>" id="frmthanhtoan"  method="post">       
      <h3>Tên khách hàng: </h3> 
      <input name="txttenkhachhang" class="form-control" type="text">
      <h3>Số điện thoại: </h3> 
      <input name="txtsodienthoai"  class="form-control" type="text">

      <h3>Địa chỉ: </h3> 
      <textarea name="txtdiachi" style="width:80%;height:30%;margin-top:20px;margin-bottom:20px"  class="form-control"></textarea>  

      <h3>Email: </h3> 
      <input name="txtemail"  class="form-control" type="email">
      <br>
      <input style="display:inline;margin-right:10px;color: white;" class="btnthanhtoan" type="submit" value="Xác nhận">
      <button class="btnthanhtoan"><a href="<?php echo $sp->h->get_url('tv/?m=common&a=home&tl=giohang&i=gh');?>">Giỏ hàng</a></button>
          
  </form> 
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
                required: "Bạn chưa nhập tên khách hàng"
            },
            txtsodienthoai: {
                required: "Bạn chưa nhập số điện thoại"
            },
            txtdiachi: {
                required: "Bạn chưa nhập địa chỉ"
            },
            txtemail: {
                email: "Email không đúng định dạng!"
            },
            
        }
});
</script>

