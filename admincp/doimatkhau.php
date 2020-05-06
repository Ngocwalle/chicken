<?php
	if(isset($_POST['dmk'])){
		$tentaikhoan=$_POST['tentaikhoan'];
		$mkcu=$_POST['mkcu'];
		$mkmoi=$_POST['mkmoi'];
		$sql_dmk=mysqli_query($conn,"select * from admin where username='$tentaikhoan' and password='$mkcu' limit 1");
		$get_rows=mysqli_num_rows($sql_dmk);
		if($get_rows==0){
			echo 'Mật khẩu hay tài khoản bạn đã nhập sai mời bạn nhập lại!';
		}else{
			$sql_update=mysql_query("update admin set password='$mkmoi'");
			echo 'Thay đổi mật khẩu thành công!';
		}
	}
?>
<div align="center">
<form action="" method="post">
<table width="341" border="1">
  <tr>
    <td colspan="2"><div align="center"><b>Đổi mật khẩu quản trị viên</b></div></td>
  </tr>
  <tr>
    <td>Tên tài khoản</td>
    <td><input type="text" name="tentaikhoan"></td>
  </tr>
  <tr>
    <td>Mật khẩu cũ</td>
    <td><input type="password" name="mkcu"></td>
  </tr>
  <tr>
    <td>Mật khẩu mới</td>
    <td><input type="password" name="mkmoi"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="dmk" value="Đổi mật khẩu">
    </div></td>
  </tr>
</table>
</form>
</div>