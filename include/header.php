
<link href="css/main.css" rel='stylesheet' type='text/css' />
          <?php
          if (!isset($_SESSION["khachhang_login"])){ ?>
          <td ><a href='index.php?mod=dangnhap' >ĐĂNG NHẬP</a></td>
          <td style="background-color: #F99E1D"><a href='index.php?mod=dangky'>ĐĂNG KÝ</a></td>
          
        <?php }
        else {
          echo "<td style='text-align: right;'><a href='thongtinkhachhang.php'>[".$_SESSION["khachhang_data"]['HoTen']."]</a><a href='dangnhap.php?log=logout' style='font-size: 20px'>[Thoát]</a></td>";
        }
          ?>
