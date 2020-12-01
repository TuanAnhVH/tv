
<!DOCTYPE html>

<html>
  <head>
      <meta charset="UTF-8" />
      <title>TV Shop</title>
      <?php include_once("Layouts/style.php"); ?>
      <?php include_once("Layouts/script.php"); ?>
      
  </head>
  <body>
    <?php include_once("Layouts/header.php"); ?>
    <?php include_once("Layouts/main.php"); ?>
    <?php include_once("Layouts/footer.php"); ?>
  </body>

  <?php 
      $soluonggio = 0;
      $cart = $sanpham->r->session_get('cart');
      if(!empty($cart))
        $soluonggio = count($cart);
  ?>
  <p id="get_soluonggio" data-id="<?php echo $soluonggio; ?>"></p>
</html>
