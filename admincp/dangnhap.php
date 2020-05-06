<?php
	include('modules/config.php');
	session_start();
	if(isset($_POST['dangnhap'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and password='$password' limit 1";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php');
		}else{
			echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Làm ơn đăng nhập lại.");</script>';
			header('location:dangnhap.php');
		}
	}
?>
<form action="" method="post">
<center><table width="200" border="1" background="../img/bgad.jpg">
  <tr>
    <td colspan="2"><div align="center">Đăng nhập</div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" size="25"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="25"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="dangnhap" id="button" value="Đăng nhập">
      </div>
    </td>
  </tr>
</table></center></form>
