

<!-- start: content -->
  <div class="container-fluid mimin-wrapper">
      <?php include_once('layout/left.php')?>   
  <div id="content">    
  <?php include_once('layout/panel.php') ?>
  <?php 
  $tl = "";
	if (isset($_REQUEST["tl"]))
	{
    $page=$_REQUEST["tl"];			
    
		switch($page)
		{
  
			case "tatca":
				
				include_once("Modules/tatca/tatca.php");
				break;
			case "lnh":
				 //-----------------------------------------
				include_once("Modules/sanpham/list.php");
        break;
      case "anh":
				
        include_once("Modules/sanpham/add.php");
        break;
      case "enh":
				
        include_once("Modules/sanpham/edit.php");
        break;
      case "enhtk":
				
          include_once("Modules/sanpham/edittk.php");
          break;
         //-----------------------------------------
      case "ltl":
				
          include_once("Modules/nhanhieu/list.php");
          break;
      case "atl":
          
          include_once("Modules/nhanhieu/add.php");
          break;
      case "etl":
          
          include_once("Modules/nhanhieu/edit.php");
          break;
        //-----------------------------------------
      case "ltk":
				
          include_once("Modules/taikhoan/list.php");
          break;
      case "etk":
				
          include_once("Modules/taikhoan/edit.php");
          break;

      case "atk":
          
        include_once("Modules/taikhoan/add.php");
        break;
       //-----------------------------------------
      case "ldh":
				
        include_once("Modules/donhang/list.php");
        break;
      case "ctt":
				
          include_once("Modules/donhang/ctt.php");
            break;
      case "ddh":
				
        include_once("Modules/donhang/detail.php");
          break;
      case "ddh2":
				
        include_once("Modules/donhang/detail2.php");
              break;
      case "ddhtk":
				
         include_once("Modules/donhang/detailtk.php");
              break;

        
      //-----------------------------------------
      case "tk":
				
        include_once("Modules/timkiem/timkiem.php");
              break;
      //-----------------------------------------
      case "tkchung":
				
        include_once("Modules/thongke/chung.php");
              break;

      case "tkbh":
				
          include_once("Modules/thongke/banhang.php");
              break;
       //-----------------------------------------
      case "lph":
				
        include_once("Modules/Phanhoi/list.php");
            break;
     //-----------------------------------------
			default:
				include_once("Modules/tatca/tatca.php");
				break;
			
		}
	}
	else
	{
		include_once("Modules/tatca/tatca.php");
	}
		 
	?> 
    
  </div>
  </div>
          <!-- end: content -->