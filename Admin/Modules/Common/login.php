<html>
<head> 
<script src="../Public/Js/jquery-3.4.1.min.js"></script>
<script src="../Public/Js/popper.min.js"></script>

<link rel="stylesheet" href="../Public/Css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link rel="stylesheet" href="../Public/Css/util.css">
<!-- all.css gọi thư viện font-awesome -->
<link rel="stylesheet" href="../Public/Fontawesome/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="../Public/Css/jquery-ui.min.css">
<link rel="stylesheet" href="../Public/Css/icons.css">
<link rel="stylesheet" href="../Public/Css/menu.css">
<link rel="stylesheet" href="../Public/Css/animate.css">
<link rel="stylesheet" href="../Public/Css/main.css">

<script src="../Public/Js/bootstrap-4.3.1.js"></script>
<script src="../Public/Js/jquery.validate.js"></script>
<script src="../Public/Js/jquery-ui.min.js"></script>
<!-- Summernote -->
<link rel="stylesheet" href="../Public/summernote/summernote-bs4.min.css">
<script src="../Public/summernote/summernote-bs4.min.js"></script>
<!-- End -->
<!-- Ckeditor -->
<script src="../Public/Ckeditor/ckeditor.js"></script> 
</head>
</html>

<?php
  $errors = [];
  $user = new taikhoan();

  if($user->r->is_admin())
  {
     $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=admin'));
  }

  if($user->h->is_submit('login'))
  {
     $username = $user->h->input_post('txtusername');
     $password = $user->h->input_post('txtpasword');
     if(!empty($username) && !empty($password))
     {
         $user_info = $user->db_get_taikhoan_by_id($username);
       
            
           if(!empty($user_info)&&$user_info['matkhau'] == md5($password))
           {
            
            $user->r->set_logged($user_info['tendangnhap']);
            $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=admin'));
           }  
           
          
     }
  }
?>

<body class="contanner_background">
<div class="container" >
   
   <div class="row">
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row d-flex justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-5 mb-5">
              <div class="card border " style="background-color:blue">
                <div class="card-body text-center">
                  <span class="login100-form-logo"> 
                  </span>
                  <h2 class=" login100-form-title p-b-34 p-t-27">Đăng nhập hệ thống</h2>
                  <div class="container mt-3">
                     <form id="form-login" action="" method="post">
                        <div class="form-group row">     
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <input type="text" class="form-control" name="txtusername" placeholder="Tên đăng nhập" value="<?php  ?>">
                              <?php ?>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                              <input type="password" class="form-control" name="txtpasword" placeholder="Mật khẩu">
                              <?php ?>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2 text-right mt-4 mb-3">
                               <a href="#" class="text-white " style="text-decoration: none;">Quên mật khẩu?</a</p>
                           </div>
                        </div>
                        <div class="form-group row mt-3">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center " >
                              <input type="hidden" name="request_name" value="login">
                              <button type="submit" name="btnLogin" class="btn btn-outline-info text-white">
                              Đăng nhập</button>
                           </div>
                        </div>
                     </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
   </div> 
</div>
</body>

<script>
    $(document).ready(function(){
        $("#form-login").validate({
            rules:{
               txtusername:{required:true},
               txtpasword:{required:true}
            },
            messages:{
               txtusername:{required:"&nbsp;<span class='text-warning'>Bạn chưa nhập tên đăng nhập !</span>"},
               txtpasword:{required:"&nbsp;<span class='text-warning'>Bạn chưa nhập mật khẩu !</span>"}
            }
        });
    });
</script>