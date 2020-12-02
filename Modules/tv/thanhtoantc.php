<?php
  $kq="fail";
  $diachi="";
  $ten="";
  $sdt="";
  $email="";

  $nh= new sanpham();
  $dh= new donhang();
  $cart= $nh->r->session_get('cart');
  if(!empty($cart))
  {
    if(isset($_POST['txtdiachi']))
      $diachi=$_POST['txtdiachi'];
    if(isset($_POST['txttenkhachhang']))
      $ten=$_POST['txttenkhachhang'];
    if(isset($_POST['txtsodienthoai']))
      $sdt=$_POST['txtsodienthoai'];
    if(isset($_POST['txtemail']))
      $email=$_POST['txtemail'];
    if(!empty($diachi) && !empty($ten) && !empty($sdt))
    {
      $data=
      [
        'tenkhachhang'=>$ten,
        'sdt'=>$sdt,
        'email'=>$email,
        'diachi'=>$diachi
      ];
      if($dh->db_insert_donhang($data ))
      {       
        $lastest =$dh->db_get_donhang_lastest();
        $id=$lastest['madonhang'];
        foreach($cart as $row)
        {
          $data=
          [
              'madonhang'=>$id,
              'masanpham'=>$row[0],
              'soluong'=>$row[1],
              'dongia'=>$row[2]
  
          ];
          $dh->db_insert_chitietdonhang($data);
        }
        $nh->r->session_delete('cart');
        $kq="success";
      }
    }
  }
?> 

<div id="content">
  <p id="kq" data-id="<?php echo $kq; ?>"></p>
</div>

<script>
  var kq = $('#kq').attr("data-id").toString();
  window.location.href = "#";
  if(kq=='success')
    alert("Đặt hàng thành công!")
</script>