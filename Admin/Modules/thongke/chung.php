<?php
    $nh = new sanpham();
    $snh= $nh->db_get_count_list_sanpham();
    
    $tl= new nhanhieu();
    $stl= $tl->db_get_count_list_nhanhieu();

    $tk= new taikhoan();
    $stk= $tk->db_get_count_list_taikhoan();

    $dh= new donhang();
    $sdh= $dh->db_get_count_list_donhang();
    $sdhctt= $dh->db_get_count_list_donhang_ctt();
    $sdhdtt= (int)$sdh- (int)$sdhctt;
?>

<div class="col-md-12 padding-0 ml-0">
  <div class="col-md-12 padding-0">
    <div class="col-md-12 padding-0">
        <div class="col-md-4 pl-0" style="width:33%">
          <div class="panel box-v1">
            <div class="panel-heading bg-white border-none">
              <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                <h4 class="text-left">Số lượng sản phẩm</h4>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                  <h4>
                  <span class="fab fa-product-hunt icons icon text-right"></span>
                  </h4>
              </div>
              
            </div>
            <div class="panel-body text-center">
              <h1> <?php echo $snh;?> </h1>
              <hr/>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="width:34%">
          <div class="panel box-v1">
            <div class="panel-heading bg-white border-none">
              <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                <h4 class="text-left">Số lượng nhãn hiệu</h4>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                  <h4>
                  <span class="fa-diamond fa icons icon text-right"></span>
                  </h4>
              </div>
            </div>
            <div class="panel-body text-center">
              <h1><?php echo $stl;?></h1>
              <hr/>
            </div>
          </div>
        </div>
        <div class="col-md-4 pr-0" style="width:33%">
          <div class="panel box-v1">
            <div class="panel-heading bg-white border-none">
              <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                <h4 class="text-left">Số lượng tài khoản</h4>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                  <h4>
                  <span class="icon-user icons icon text-right"></span>
                  </h4>
              </div>
            </div>
            <div class="panel-body text-center">
              <h1><?php echo $stk;?></h1>
              <hr/>
            </div>
          </div>
        </div>   
    </div>
  </div>
</div>