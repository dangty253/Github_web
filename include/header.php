
 <table class="tab-item" width="100%"  border="0" bgcolor="#FFC107"  >
        <tr>
          <td ><a href="index.html" >ĐẶT VÉ</a></td>
          <?php
          if (!isset($_SESSION["khachhang_login"])){
          echo "<td ><a href='dang-nhap.html'>ĐĂNG NHẬP</a></td>";
          echo "<td ><a href='dang-ky.html'>ĐĂNG KÝ</a></td>";
      	}
      	else {
      		echo "<td style='text-align: right;'><a href='tai-khoan-khach-hang.html'>[".$_SESSION["khachhang_data"]['HoTen']."]</a><a href='dangnhap.php?log=logout' style='font-size: 20px'>[Thoát]</a></td>";
      	}
          ?>
        </tr>
      </table>