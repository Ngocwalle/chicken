<?php
include('../config.php');
	$sdt=$_GET['id'];
	$sql="delete from thongtinkh where phone=$sdt";
	mysqli_query($conn,$sql);
	echo 'Dữ liệu đã được xóa!';
?>