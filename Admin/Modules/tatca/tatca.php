

<?php 
  $role= new Role();
  $user= $role->session_user_logged();
?>

                 
<div class="col-md-12" style="padding:20px;">
    <div class="col-md-12 padding-0">
        <div class="col-md-8 padding-0">
            <div class="col-md-12 padding-0">
                <div class="col-md-6">
                    <div class="panel box-v1">
                      <div class="panel-heading bg-white border-none">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                          <h4 class="text-left">Lượt xem </h4>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                            <span class="icon-user icons icon text-right"></span>
                            </h4>
                        </div>
                      </div>
                      <div class="panel-body text-center">
                        <h1>15118</h1>
                        
                        <hr/>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel box-v1">
                      <div class="panel-heading bg-white border-none">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                          <h4 class="text-left">Lượt tương tác</h4>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                            <span class="icon-basket-loaded icons icon text-right"></span>
                            </h4>
                        </div>
                      </div>
                      <div class="panel-body text-center">
                        <h1>1253</h1>
                        <hr/>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel box-v4">
                    <div class="panel-heading bg-white border-none">
                      <h4><span class="icon-notebook icons"></span> Nhật ký bán hàng</h4>
                    </div>
                    <div class="panel-body padding-0">
                      <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                        
                          <p>Bài đăng mới nhất</p>
                          <b><span class="icon-clock icons"></span> Hôm qua 10:30</b>
                      </div>
                      
                        <div class="col-md-12 col-xs-12 col-md-12 pb-3">
                          <img src="asset/img/4.png" alt="" style="height:96%;width:100%;">
                        </div>  
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-12 padding-0">
              <div class="panel box-v2">
                  <div class="panel-heading padding-0">
                    <img src="asset/img/bg2.jpg" class="box-v2-cover img-responsive"/>
                    <div class="box-v2-detail">
                      <img src="asset/img/avatar.jpg"
                        class="img-responsive"/>
                      <h4><?php  echo $user['username']; ?></h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-12 padding-0 text-center">
                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                          <h3>67</h3>
                          <p>Bài Đăng</p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                          <h3>1092</h3>
                          <p>Lượt chia sẻ</p>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12 padding-0">
                          <h3>320</h3>
                          <p>Ảnh</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="col-md-12 padding-0">
              <div class="panel box-v3">
                <div class="panel-heading bg-white border-none">
                  <h4>Báo cáo</h4>
                </div>
                <div class="panel-body">
                    
                  <div class="media">
                    <div class="media-left">
                        <span class="icon-folder icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Tài liệu</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                            <span class="sr-only">60% Hoàn thành</span>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                        <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Nhà phát triển</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                            <span class="sr-only">60% hoàn thành</span>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                        <span class="icon-energy icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Tối ưu hóa</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                            <span class="sr-only">60% hoàn thành</span>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                        <span class="icon-user icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Trạng thái người dùng</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                            <span class="sr-only">60% hoàn thành</span>
                          </div>
                        </div>
                    </div>
                  </div>

                    <div class="media">
                    <div class="media-left">
                        <span class="icon-fire icons" style="font-size:2em;"></span>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Trạng thái bảo vệ</h5>
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% hoàn thành</span>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>

            <div class="col-md-12 padding-0">
              <div class="panel bg-light-blue">
                <div class="panel-body text-white">
                    <p class="animated fadeInUp quote">Cảm ơn bạn đã tin tưởng và lựa chọn sản phẩm của chúng tôi"</p>
                    <div class="col-md-12 padding-0">
                      <div class="text-left col-md-7 col-xs-12 col-sm-7 padding-0">
                        <span class="fa fa-twitter fa-2x"></span>
                        <span> VietHan sofware</span>
                      </div>
                      <div style="padding-top:8px;" class="text-right col-md-5 col-xs-12 col-sm-5 padding-0">
                        <span class="fa fa-retweet"></span> 2000
                        <span class="fa fa-star"></span> 3000
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
 
    
