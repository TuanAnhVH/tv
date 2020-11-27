


<!-- Main -->
	  <?php 
	$tl = "";
	if(isset($search))
		include_once("Modules/nuochoa/timkiem.php");
	 
	else if (isset($_REQUEST["tl"]))
	{
		$page=$_REQUEST["tl"];			
		switch($page)
		{
			case "home":
				
			    include_once("Modules/nuochoa/home.php");
				break;
			case "tatca":
				
				include_once("Modules/nuochoa/tatca.php");
				break;
			case "theloai":
				
				include_once("Modules/nuochoa/theloai.php");
				break;
			case "timkiem":
				
				include_once("Modules/nuochoa/timkiem.php");
				break;
			case "chitiet":
				
				include_once("Modules/nuochoa/chitiet.php");
				break;
			case "gioithieu":
				
				include_once("Modules/nuochoa/gioithieu.php");
				break;
			case "khuyenmai":
				
				include_once("Modules/nuochoa/khuyenmai.php");
				break;
			case "tuvan":
				
				include_once("Modules/nuochoa/tuvan.php");
				break;
			case "phanhoi":
				
					include_once("Modules/nuochoa/phanhoi.php");
					break;
			case "giohang":
				
					include_once("Modules/nuochoa/giohang.php");
						break;
			case "deletegio":
				
				include_once("Modules/nuochoa/deletegio.php");
					break;
			case "thanhtoan":
				
						include_once("Modules/nuochoa/thanhtoan.php");
							break;
			case "thanhtoantc":
				
						include_once("Modules/nuochoa/thanhtoantc.php");
							break;
			default:
				include_once("Modules/nuochoa/home.php");
				break;
				
			
		}
	}
	else
	{
		include_once("Modules/nuochoa/home.php");
	}
		 
	?> 

<!-- Kết thúc main -->