<?php
 $user = new taikhoan();
  
 if(!$user->r->is_admin()){
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=logout'));
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hệ Thống</title>
  <?php include_once("Layout/style.php"); ?>
    <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <?php include_once("Layout/pagination.php"); ?>

    <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>

  <link href="asset/css/style3.css" rel="stylesheet">
  <link rel="stylesheet" href="../Public/Css/b3.css">
  <script src="../Public/Ckeditor/ckeditor.js"></script> 
      
  <!-- style 2     -->

  <script src="../Public/Js/jquery-3.4.1.min.js"></script>
  <script src="../Public/Js/popper.min.js"></script>
  <link rel="stylesheet" href="../Public/summernote/summernote-bs4.min.css">
  <script src="../Public/summernote/summernote-bs4.min.js"></script>

  <link rel="stylesheet" href="../Public/Css/util.css">
  <!-- all.css gọi thư viện font-awesome -->
  <link rel="stylesheet" href="../Public/Fontawesome/css/all.css">
  <link rel="stylesheet" href="../Public/Css/jquery-ui.min.css">
  <link rel="stylesheet" href="../Public/Css/icons.css">
  <link rel="stylesheet" href="../Public/Css/animate.css">
  <!-- <link rel="stylesheet" href="../Public/Css/main.css"> -->

  <script src="../Public/Js/bootstrap-4.3.1.js"></script>
  <script src="../Public/Js/jquery.validate.js"></script>
  <script src="../Public/Js/jquery-ui.min.js"></script>
  
  <link rel="shortcut icon" href="asset/img/logomi.png">

 </head>
 <body id="mimin" class="dashboard">
  <?php  
    include_once('layout/header.php');
    include_once('layout/main.php');
    include_once('layout/script.php')
  ?>
  </body>

</html>


