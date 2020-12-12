<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
  $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

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
  else if(isset($_POST['date']))
  {
    $d= explode('-',$_POST['date']);
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

   $paging_html = "";
   $lst= $cat->db_get_list_phanhoi_by_day_paging($paging_html,(int)$day,(int)$month,(int)$year,$da);
   $lst_all= $cat->db_get_list_phanhoi_by_day((int)$day,(int)$month,(int)$year);
   if(isset($_GET['page']))
    $page=$_GET['page'];
  else
    $page=1;

?>
<div class="container">
  <div class="row mt-4 mb-4">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card ">
        <div class="card-header bg-primary text-white">
          <h2 class="">Danh sách phản hồi</h2>
          <form action=" <?php echo $cat->h->get_url('tv/admin'); ?> " method="get" style="width: 400px;">
            <input type="date" name="date" max="3000-12-31" 
            min="1000-01-01" class="form-control"  style="width:200px;float:left;"
            value="<?php echo $year.'-'.$month.'-'.$day?>">
            <input type="hidden" name="tl" value="lph">
            <input type="submit" style="height:34px;" class="btn btn-warning ml-2" value="Xem">
          </form>
        </div>
        <div class="card-body">      
          <table class="table table-bordered mt-3">
            <thead class=" bg-primary">  
              <tr class="align-middle text-center">
                <th class=" text-center">Tên khách hàng</th>
                <th class=" text-center">Số điện thoại</th>
                <th class=" text-center">Email</th>
                <th class=" text-center">Nội dung</th>
                <th class=" text-center">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if(!empty($lst))
                  foreach($lst as $u){
                ?>
                <tr class="align-middle text-center">
                  <td><?php echo $u['tenkhachhang']; ?></td>
                  <td><?php echo $u['sodienthoai']; ?></td>
                  <td><?php echo $u['email']; ?></td>
                  <td><?php echo $u['noidung']; ?></td>  
                  <td>
                    <a  href=" <?php echo $cat->h->get_url('tv/admin/?tl=dph&page='.$page.'&id='.$u['id']).'&date='.$da; ?>">
                    <span class="fas fs-25 fa-info-circle text-primary"></span>
                  </td>
                </tr>
                <?php  }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5 ml-4">
   <?php 
     if(!empty($lst_all))
       if(count($lst_all)>10) echo $paging_html; 
   ?>
  </div>
</div>
