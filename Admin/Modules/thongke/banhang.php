<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>
<?php 
    function compute_price($l)
    {
        $dh = new donhang();
        $tong=0;
        foreach($l as $row)
        {
            $lct= $dh->db_get_list_chitietdonhang($row['madonhang']);
            if(!empty($lct))
              foreach($lct as $u)
                $tong+= (float)$u['dongia']*(int)$u['soluong'];
        }
        return $tong;
    }
?>


<?php 
  $date= getdate();
  $day= $date['mday'];
  $month= $date['mon'];
  $year=$date['year'];

  $donhang= new donhang();

  if(isset($_POST['date']))
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


?>


<div class="container">
<?php include_once('modules/thongke/chung.php');?>

<div class="card">
  <div class="card-header bg-primary pl-4">
      <h1 class="card-title mb-3">Thống kê bán hàng</h1>

      <form action="" method="post" style="width: 400px;">
          <input type="date" name="date" max="3000-12-31" 
            min="1000-01-01" class="form-control"  style="width:200px;float:left;"
          value="<?php echo $year.'-'.$month.'-'.$day?>">
          <input type="hidden" name="request_name" value="thongke">
          <input type="submit" style="height:34px;" class="btn btn-warning ml-2" value="Xem">
        </form>
  </div>


    <div class="card-body">
    
      <div >
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#ngay">Ngày</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#thang">Tháng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#nam">Năm</a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="ngay" class="tab-pane active"><br>
              <?php include_once('modules/thongke/ngay.php')?>
          </div>
          <div id="thang" class=" tab-pane "><br>
            <?php include_once('modules/thongke/thang.php')?>  
          </div>
          <div id="nam" class=" tab-pane "><br>
            <?php include_once('modules/thongke/nam.php')?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>




