<?php 
 class saves{

  static  function change_price($price)
    {
      $p= $price."";
      $d=strlen($p);
      if($d>3)
      {
        if($d<6)
        {
          $cl= $d%3;
          $str1= substr($p,0,$cl);
          $str2= substr($p,$cl,3);
          return $str1.".".$str2;
        }
        else if($d==6)
        {
          $str1= substr($p,0,3);
          $str2= substr($p,3,3);
          return $str1.".".$str2;
        }
        else if($d<9)
        {
          $cl= $d%3;
          $duoi=$d-3;
          $str1= substr($p,0,$cl);
          $str2= substr($p,$cl,3);
          $str3= substr($p,$duoi,3);
          return $str1.".".$str2.".".$str3;
        }
        else if($d==9)
        {
          $str1= substr($p,0,3);
          $str2= substr($p,3,3);
          $str3= substr($p,6,3);
          return $str1.".".$str2.".".$str3;
        }
        else
          return $p;
      }
      else
        return $p;     
    }
  }
?>