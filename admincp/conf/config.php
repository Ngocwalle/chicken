<?php
		include('modules/config.php');
		if(isset($_POST['login'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="select * from admin where username='".$username."' and password='".$password."' limit 1 ";
			$row=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($row);
			if($count > 0 )
			{
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
		echo "<script language='javascript'>";
		echo "location.href='index.php?quanly=trangchu';</script>";
		}
		else
		{
		echo "<script language='javascript'>alert('Đăng nhập thất bạn, Yêu cầu bạn nhập đúng thông tin tài khoản và mật khẩu');";
		echo "location.href='login.php';</script>";
		}
		}
		?>