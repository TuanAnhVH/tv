

<?php 
    
    $new = new sanpham();
    $paging_html = "";
    
    
    if(isset($_GET['tk']))
             $search=$_GET['tk'];
 
    $lst=  $new ->db_get_list_sanpham_paging_user_by_search($paging_html,$search);
    $lst_all=  $new ->db_get_list_allsanpham_by_search($search);

    $page=1;
    if(isset($_GET['page'])&&!empty($_GET['page']))
         $page=$_GET['page'];
?>



<div id="content">
		<div>
            <h1 style="margin-top: 30px;"> <?php echo "Tìm kiếm: ".$search?> </h1>
			<ul>       
                <?php if(!empty($lst))
                 foreach($lst as $row)
                {
                ?>
                <li>
					<div>
                       <a href="<?php echo $new->h->get_url('/tv/?m=common&a=home&tl=chitiet&ma='.$row['masanpham']).'&n='.$row['nhanhieu'];?>"> 
                       <img src="<?php echo "uploads/".$row['avatar']?>" alt="Image" width="280" height="220" /></a>
					</div>
					<div>
                        <h2><a href="<?php echo $new->h->get_url('/tv/?m=common&a=home&tl=chitiet&ma='.$row['masanpham']).'&n='.$row['nhanhieu'];?> " 
                         style="color: black;"> <strong> <?php echo $row['tensanpham']?> </strong></a></h2>
						<h3 style="color: black;"><?php echo "Thương hiệu: ".$row['nhanhieu']?></h3>
						<h3 style="color: red;">Giá: <?php echo " ". saves::change_price($row['giatien'])." vnd"?> &emsp;&emsp;&emsp;&emsp;&emsp;
                         <span  class="dathang" data-id="<?php echo $row['masanpham']?>" style="font-size: 25px; color:red;"><i class="fas fa-cart-plus" ></i></span> </h3 >
					</div>
                    <div style="display:none; margin-top:20px;"  class="<?php echo $row['masanpham']?>">
                        <input type="number" value="1" name="<?php echo $row['masanpham']?>" min="1" style="color:red;">
                       
                    </div>
                    <button class="btnmua <?php echo $row['masanpham']?>" data-id="<?php echo $row['masanpham']?>">Mua</button>
                   
				</li>
                <?php }?>
            
            </ul>
            <ul style="margin: 0px auto;display:flex;justify-content: center;font-size: 70px;">
            <?php 
                    if(!empty($lst_all)&& count($lst_all)>12)
                    {
                        if(count($lst_all)%12==0)
                            $trang = count($lst_all)/12;
                        else
                            $trang = count($lst_all)/12+1;
                        for($i=1;$i<=$trang;$i++)
                        {
                            if($i==$page)
                            {
                                $color="#FB0107";
                                $o="100%";
                            }
                            else
                            {
                                $color="black";
                                $o="35%";
                            }
                            echo '<a style=" opacity:'.$o.'; text-decoration: none; color:'.$color.';" 
                                 href="'. $new->h->get_url('tv/?m=common&a=home&tl=timkiem&tk='.$search.'&page='.$i).'">.
                                </a>';  
                        }
                    }
                ?>
                            
            </ul>
            
        </div>
        
</div>
<script>

$('.dathang').click(function(){
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