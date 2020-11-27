<?php 
    $new = new nuochoa();
    $theloai= new theloai();
    $ma="";
    if(isset($_GET['ma']))
        $ma=$_GET['ma'];
    $row= $new->db_get_nuochoa_by_id($ma);
    if(!empty($row))
        $tl= $theloai->db_get_list_theloai_by_id($row['matheloai']);

?>

<div id="content2">
		<div>
			<h1 style="margin-top: 10px; margin-bottom:10px;"><?php if(!empty($row)) echo $row['tennuochoa'];?></h1>
			<ul >
                
                <li class="first-li">
					<div>
                       <img src="<?php if(!empty($row)) echo "uploads/".$row['avatar']?>" alt="Image" width="460" height="390" />
					</div>
					<div >
                       <p style="font-size:17px;"><strong>Mô tả:</strong></p> 
                       <span><?php if(!empty($row)) echo $row['mota'];?></span>
                       
					</div>
                </li>
                <li  class="second-li">
					<div>
                        <p class="txtchitiet"><span> <strong> Tên sản phẩm:</strong></span> 
                        <span style="color: black;"> <b> <?php echo $row['tennuochoa']?> </b></span>
                        </p> 
                        <p class="txtchitiet2"><span> <strong> Nhãn hiệu:</strong></span> 
                        <span style="color: black;"> <b> <?php echo $row['nhanhieu']?> </b></span>
                        </p> 
                        <p class="txtchitiet2"><span> <strong> Thể loại:</strong></span> 
                        <span style="color: black;"> <b> <?php if(isset($tl)) echo $tl['tentheloai'];?> </b></span>
                        </p> 
                        <p class="txtchitiet2"><span> <strong> Giá tiền:</strong></span> 
                        <span style="color: red;"> <b> <?php echo saves::change_price($row['giatien']).' Vnd'?> </b></span>
                        </p> 
                        <p class="txtchitiet2"><span> <strong> Trạng thái:</strong></span> 
                        <span style="color: black;"> <b> <?php  echo ((int)$row['soluonghientai']>0)?"Còn hàng":"Hết hàng" ?> </b></span>
                        </p> 
                        <p class="txtchitiet2"><span> <strong> Dung tích:</strong></span> 
                        <span style="color: black;"> <b> <?php echo $row['dungtich']?> </b></span>
                        </p>
                        <div>
                            <div style="width:180px;height:auto; margin:12px auto; margin-bottom:2px;">
                                    <span data-id="<?php echo $row['manuochoa']?>"  class="dathang" style="font-size: 30px; color:red;"><i class="fas fa-cart-plus" ></i></span>
                                    <a href="#"  class="dathang" data-id="<?php echo $row['manuochoa']?>"  style="font-size: 16px; color:blue;"><strong><u>Đặt hàng ngay</u> </strong></a> 
                            </div>
                        </div>

                         <div style="display:none; margin-top:20px;"  class="<?php echo $row['manuochoa']?>">
                        <input type="number" value="1" name="<?php echo $row['manuochoa']?>" min="1" style="color:red;">
                       
                       </div>
                       <button class="btnmua <?php echo $row['manuochoa']?>" data-id="<?php echo $row['manuochoa']?>">Mua</button>
                        
					</div>
				</li>
            
            </ul>
            <div class="quantam">
                <?php 
                   include_once("Modules/nuochoa/quantam.php");
                ?>
            </div>
            
        </div>
        
</div>

<script>

$('.dathang').click(function(e){
    e.preventDefault();
    var id= $(this).attr("data-id");
    $('.'+id).toggle();
});

$('.btnmua').click(function(){
    var id= $(this).attr("data-id");
    var sl= $("input[name="+id+"]").val();
    $.ajax({
        method: "POST",
		url: "dathang.php",
		data:{
            "id":id,
            "sl":sl,
        } ,
		success : function(response){
            alert(response);
        },
        
    })

});

   
</script>