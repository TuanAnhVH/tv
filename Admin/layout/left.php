
 
 <?php
  $new= new sanpham();
  $role= new Role();
 ?>
 
 <!-- start:Left Menu -->
 <div id="left-menu">
  <div class="sub-left-menu scroll">
    <ul class="nav nav-list">
        <li><div class="left-bg"></div></li>
        <li class="time">
          <h1 class="animated fadeInLeft">21:00</h1>
          
        </li>
        <li class=" ripple">
          <a class="tree-toggle nav-header"><span class=" fab fa-product-hunt"></span>Sản phẩm
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
              <li><a href=" <?php echo $new->h->get_url('tv/admin/?tl=lnh') ?> ">Danh sách sản phẩm</a></li>
              <li><a href="<?php echo $new->h->get_url('tv/admin/?tl=anh') ?>">Thêm sản phẩm</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-diamond fa"></span>Nhãn hiệu
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="<?php echo $new->h->get_url('tv/admin/?tl=ltl') ?>">Danh sách nhãn hiệu</a></li>
            <li><a href="<?php echo $new->h->get_url('tv/admin/?tl=atl') ?>">Thêm nhãn hiệu</a></li>
          </ul>
        </li> 
        <li class="ripple" style="display: <?php echo ($role->is_supper_admin())?'block':'none'; ?>">
          <a class="tree-toggle nav-header">
            <span class="icon-user"></span> Tài khoản
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="<?php  echo $new->h->get_url('tv/admin/?tl=ltk');
            ?>">Danh sách tài khoản</a></li>
            <li><a href="<?php echo $new->h->get_url('tv/admin/?tl=atk');
            ?>">Thêm tài khoản</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="icon-basket-loaded"></span> Đơn hàng
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="<?php echo $new->h->get_url('tv/admin/?tl=ldh') ?>">Danh sách đơn hàng</a></li>
            <li><a href="<?php echo $new->h->get_url('tv/admin/?tl=ctt') ?>">Chưa thanh toán</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a href="<?php echo $new->h->get_url('tv/admin/?tl=tkbh') ?>">
            <span class="fa fa-table"></span> Thống kê
          </a>
        </li>
        <li class="ripple">
          <a href="<?php echo $new->h->get_url('tv/admin/?tl=lph') ?>">
            <span class="fa fa-anchor"></span> Phản hồi
          </a>
        </li>
      </ul>
    </div>
</div>
          <!-- end: Left Menu -->