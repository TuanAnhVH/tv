<script>
  $(document).ready(function() {
    dathang();
    doisoluong();
    load_soluonggio();
  });
  
  function dathang()
  {
    $('.btnmua').click(function(){
      var id= $(this).attr("data-id");
      $.ajax({
        method: "POST",
      url: "dathang.php",
      data:{
            "id":id,
          } ,
      success : function(response){
            alert("Đã thêm một sản phẩm vào giỏ");
            $('#soluonggio').html(response);
          },
      })
    });
  }

  function doisoluong()
  {
    $('.sl').change(function(){
      var id= $(this).attr("data-id");
      var sl= $(this).val();
      $.ajax({
        method: "POST",
      url: "doisoluong.php",
      data:{
            "id":id,
            "sl":sl
          } ,
      success : function(response){
          doithanhcong(id,sl);
        },       
      })
    });
  }

  function doithanhcong(id,sl)
  {
    var dongia = "dongia-"+id;
    var thanhtien = "thanhtien-"+id;
    var gia = $('#'+dongia).html().toString().replaceAll(".","");
    var tien = parseFloat(gia)  * parseInt(sl);
    $('#'+thanhtien).html(change_price(tien));

    var tong = 0;
    $('.thanhtien').each(function (){
        var thanhtien = $(this).html().toString();
        thanhtien = thanhtien.replaceAll(".","");
        tong += parseFloat(thanhtien);
    });
    $('#tongtien').html(change_price(tong));

  }

  function load_soluonggio(){
    var sl = $('#get_soluonggio').attr("data-id");
    $('#soluonggio').html(sl);
  }

  function change_price(price)
  {
    var p = price.toString();
    var d = p.length;
    if(d>3)
    {
      var cl = d % 3;
    
      if(d<6)
      {
        var str1= p.substr(0,cl);
        var str2= p.substr(cl,3);
        return str1 + "." + str2;
      }
      else if(d==6)
      {
        var str1 = p.substr(0,3);
        var str2 = p.substr(3,3);
        return str1 + "." + str2;
      }
      else if(d<9)
      {
        var str1= p.substr(0,cl);
        var str2= p.substr(cl,3);
        var str3= p.substr(cl+3,3);
        return str1 + "."+ str2 + "." + str3;
      }
      else if(d==9)
      {
        var str1= p.substr(0,3);
        var str2= p.substr(3,3);
        var str3= p.substr(6,3);
        return str1 + "."+ str2 + "." + str3;
      }
      else if(d<12)
      {
        var str1= p.substr(0,cl);
        var str2= p.substr(cl,3);
        var str3= p.substr(cl+3,3);
        var str4= p.substr(cl+6,3);
        return str1 + "."+ str2 + "." + str3 + "." + str4;
      }
      else
        return p;
    }
    else
      return p;
    
  }

</script>