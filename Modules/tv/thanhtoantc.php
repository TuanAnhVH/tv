<?php
$kq="Vui lòng đặt mua sản phẩm!";
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
        $kq="Xác nhận đơn hàng thành công!";
    }
    
    
}
   


?> 

<div id="content">
 <div>
    <h2><?php echo $kq;?></h2>
 </div>
</div>