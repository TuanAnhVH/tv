

<?php 
  $tl2='';
  if(isset($_GET['tl2']))
      $tl2=$_GET['tl2'];
  else if(isset($_GET['tl']))
    $tl2=$_GET['tl'];
  $new = new taikhoan();
  $role= new Role();
  $user= $role->session_user_logged();
?>
<nav class="navbar navbar-default header navbar-fixed-top ">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
              <ul style="float:left;padding:0px;">
              <a href="#" class="navbar-brand"> 
                 <b>TV Shop </b>  
                </a>
              </ul>
               
              <ul style="float:left;">
                <li >
                  <form action="<?php echo $new->h->get_url('tv/admin/?tl=tk&tl2='.$tl2);?> " method="post">
                    <div class="search">
                    <input type="text" id="search" name="txtsearch" style="height:27px;">
                    <input type="hidden" name="request_name" value="form-search">
                    <input type="submit" value="Tìm kiếm" style="height:29px;font-weight:bold; " id="searchbtn"> 
                    </div>
                    </form>
                  </li>
               
              </ul>
             
              <ul class="nav navbar-nav navbar-right user-nav" style="float: right;">
                <li class="user-name"><span><?php  echo $user['username']; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg"
                    class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> Thông tin</a></li>
                     <li><a href=" <?php echo $new->h->get_url('tv/admin/?tl=etk&id='.$user['username']);?> "><span class="fa fa-key"></span> Đổi mật khẩu</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href="#"><span class="fa fa-cogs"></span></a></li>
                        <li><a href="#"><span class="fa fa-lock"></span></a></li>
                        <li><a href=" <?php echo $new->h->get_url('tv/admin/?m=common&a=logout')?> "><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>