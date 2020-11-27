<?php 
  $tl2='';
  if(isset($_GET['tl2']))
        $tl2=$_GET['tl2'];
  $new = new sanpham();
  $search="";
  $paging_html = "";
  
  if( $new ->h->is_submit('form-search'))
      {
          $search=  $new->h->input_post('txtsearch');
      }
  else if(isset($_GET['tk']))
      $search=$_GET['tk'];
  $lst=  $new ->db_get_list_sanpham_paging_admin_by_search($paging_html,$search,$tl2);
  $lst_all=  $new ->db_get_list_allsanpham_by_search($search);

  $page=1;
  if(isset($_GET['page'])&&!empty($_GET['page']))
        $page=$_GET['page'];
?>

<div class="container">
  <div class="row mt-4 mb-4">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card ">
        <div class="card-header bg-primary text-white text-center">
            <h3>Tìm kiếm sản phẩm: <?php echo $search;?> </h3>
        </div>
        <div class="card-body">
              
          <table class="table table-bordered mt-3">
            <thead class=" bg-primary">  
              <tr class="align-middle text-center">
                <th class="align-middle text-center">STT</th>
                <th class="align-middle text-center">Mã sản phẩm</th>
                <th class="align-middle text-center">Tên sản phẩm</th>
                <th class="align-middle text-center">nhãn hiệu</th>
                <th class="align-middle text-center">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $stt=1;
                  if(!empty($lst))
                    foreach($lst as $row){
              ?>
              <tr class="align-middle text-center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $row['masanpham']; ?></td>
                <td><?php   echo $row['tensanpham']; ?></td>
                <td><?php  echo $row['tennhanhieu']; ?></td>
                <td>
                  <form class="frm_delete" action="<?php echo $new->h->get_url('tv/admin/?m=sanpham&a=delete') ?>" method="post">
                    <div class="m-t-10">
                      <a href="<?php echo $new->h->get_url('tv/admin/?tl=enhtk&tl2='.$tl2.'&tk='.$search.'&masanpham='.$row['masanpham'].'&page='.$page) ?>"><span class="fas fs-25 fa-edit"></span></a>
                          <input type="hidden" name="sanphamid" value="<?php echo $row['masanpham']; ?>">
                      <input type="hidden" name="request_name" value="delete_sanpham">
                      <a class="btn_delete m-l-2" href="#" id=""><span class="far fs-25 fa-trash-alt text-danger"></span>
                      </a>
                    </div>
                  </form>
                </td>
              </tr>
              <?php
                  $stt++;
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5 ml-4">
    <?php 
    if(!empty($lst_all))
      if(count($lst_all)>12) echo $paging_html; 
    ?>
  </div>
</div>

<script>
	$(document).ready(function(){
		$('table').addClass('table-hover');
       
      $('td').addClass('align-middle text-center');
      $('td:nth-child(1),th:nth-child(1)').addClass('text-center');
      
        // Xử lý submit cho điều khiển chk_active và btn_delte
		$('.btn_delete').click(function(){
			$(this).parent().parent().submit();
			 return false;
		});

		$('.frm_delete').submit(function(){
			if(!confirm('Bạn có chắc muốn xóa sản phẩm này không ?'))
			{
				return false;
			}
			$(this).append('<input type="hidden" name="redirect" value="'+ window.location.href +'">');
			return true;
		});

		//Xu ly tooltip voi Bootsrap 4
		// $('.info_fullname').popover();
	});
</script>
