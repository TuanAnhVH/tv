<?php 
  $date= getdate();
  $day= $date['mday'];
  $month= $date['mon'];
  $year=$date['year'];

  if(isset($_GET['date']))
  {
    $d= explode('-',$_GET['date']);
    $day=$d[2];
    $month=$d[1];
    $year=$d[0];

  }

  if(strlen($day)==1)
    $day='0'.$day;
  if(strlen($month)==1)
  $month='0'.$month;
  
  $da=$year.'-'.$month.'-'.$day;


?>

<?php 

  $cat = new phanhoi();
  $page=1;
  if(!isset($_GET['id']))
  {
    die();
  }
  else
  {
    $id=$_GET['id'];
    $phanhoi = $cat->db_get_phanhoi_by_id($id);
  }
  if(isset($_GET['page']))
  {
    $page=$_GET['page'];
  }

                    
?>
<div  id="dialog1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-primary ml-2">Chi tiết phản hồi</h3>
          
      </div>
      <div class="modal-body">
        <table class=" ml-lg-2">
          <tr>
            <td><label class=" text-bold text-primary">Khách hàng: </label> </td>
            <td><label class=" ml-3"> <?php echo $phanhoi['tenkhachhang'] ?> </label></td>
          </tr>	
          <tr>
            <td><label class=" text-bold text-primary">Số điện thoại: </label> </td>
            <td><label class=" ml-3"> <?php echo $phanhoi['sodienthoai'] ?> </label></td>
          </tr>
          <tr>
            <td><label class=" text-bold text-primary">Email: </label> </td>
            <td><label class=" ml-3"> <?php echo $phanhoi['email'] ?> </label></td>
          </tr>
          <tr>
            <td><label class=" text-bold text-primary">Ngày phản hồi: </label> </td>
            <td><label class=" ml-3"> <?php echo $phanhoi['ngaytao'] ?> </label></td>
          </tr>
        </table>
        <div class="ml-2 mt-3 text-dark">
          <h4 class=" text-bold text-primary">Nội dung: </h4>
          <textarea rows="8"  class="form-control">&ensp;<?php echo $phanhoi['noidung'] ?></textarea>
        </div>
      </div>
      <div class="modal-footer ">
        <div style="display:flex; justify-content:center;" class="mt-3"> 
          <div>
            <a href=" <?php echo $cat->h->get_url('tv/admin/?tl=lph&date='.$da.'&page='.$page);?>">
              <button type="button"   class="btn btn-primary ml-3">Trở về
              </button>
            </a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

