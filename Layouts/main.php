<!-- Main -->
<?php 
  $tl = "";

  if (isset($_REQUEST["tl"]))
  {
    $page=$_REQUEST["tl"];			
    switch($page)
    {
      case "home":
        include_once("Modules/tv/home.php");
        break;
        
      case "tatca":	
        include_once("Modules/tv/tatca.php");
        break;
        
      case "nhanhieu":
        include_once("Modules/tv/nhanhieu.php");
        break;
        
      case "chitiet":
        include_once("Modules/tv/chitiet.php");
        break;
        
      case "gioithieu":		
        include_once("Modules/tv/gioithieu.php");
        break;
        
      case "phanhoi":	
        include_once("Modules/tv/phanhoi.php");
        break;
            
      case "giohang":
        include_once("Modules/tv/giohang.php");
        break;
              
      case "deletegio":
        include_once("Modules/tv/deletegio.php");
        break;
            
      case "thanhtoan":	
        include_once("Modules/tv/thanhtoan.php");
        break;
                
      case "thanhtoantc":		
        include_once("Modules/tv/thanhtoantc.php");
        break;

      case "tk":		
        include_once("Modules/tv/timkiem.php");
        break;
                
      default:
        include_once("Modules/tv/home.php");
        break;
        
      
    }
  }
  else
  {
    include_once("Modules/tv/home.php");
  }
     
  ?> 

<!-- Kết thúc main -->