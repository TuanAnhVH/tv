<base href="http://localhost/tv/">
   <!-- <link rel="stylesheet" href="Public/Css/bootstrap-4.3.1.css"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="Public/Css/util.css">
<link rel="stylesheet" href="Public/Fontawesome/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="Public/Css/jquery-ui.min.css">
<link rel="stylesheet" href="Public/Css/animate.css">
<link rel="stylesheet" href="Public/Css/icons.css"> 
<link rel="stylesheet" href="Public/Css/bootstrap-4.3.1.min.css"> 

<script src="Public/Js/jquery-3.4.1.min.js"></script>
<script src="Public/Js/bootstrap-4.3.1.js"></script>
<script src="Public/Js/popper.min.js"></script>
<script src="Public/Js/jquery.validate.js"></script>
<script src="Public/Js/jquery-ui.min.js"></script>

<?php
$module = isset($_GET['m']) ? $_GET['m'] : '';
$action = isset($_GET['a']) ? $_GET['a'] : '';

if (empty($module) || empty($action)) {
   $module = 'Common';
   $action = 'home';
}

$path = 'Modules/' . $module . '/' . $action . '.php';

if (file_exists($path)) {
   include_once('Classes/DA/database.php');
   include_once('Classes/DA/session.php');
   include_once('Classes/DA/role.php');
   include_once('Classes/DA/helper.php');
   include_once('Classes/BL/sanpham.php');
   include_once('Classes/BL/nhanhieu.php');
   include_once('Classes/BL/taikhoan.php');
   include_once('Classes/BL/donhang.php');
   include_once('Classes/DA/Save.php');
   include_once($path);
} else {
   header('Location:404.php');
}
?>