<base href="http://localhost/tv/admin/">

<?php
$module = isset($_GET['m']) ? $_GET['m'] : '';
$action = isset($_GET['a']) ? $_GET['a'] : '';

if (empty($module) || empty($action)) {
  $module = 'Common';
  $action = 'admin';
}

$path = 'Modules/' . $module . '/' . $action . '.php';

if (file_exists($path)) {
  include_once('../Classes/DA/database.php');
  include_once('../Classes/DA/session.php');
  include_once('../Classes/DA/role.php');
  include_once('../Classes/DA/helper.php');
  include_once('../Classes/BL/nhanhieu.php');
  include_once('../Classes/BL/sanpham.php');
  include_once('../Classes/BL/taikhoan.php');
  include_once('../Classes/BL/donhang.php');
  include_once('../Classes/BL/phanhoi.php');
  include_once('../Classes/DA/save.php');
  include_once($path);
} else {
  header('Location:404.php');
}
?>