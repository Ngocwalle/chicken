<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='ngoc123';
	$csdl='nhom19';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được');
	mysqli_select_db($conn,$csdl);
	mysqli_query ($conn,"SET NAMES 'UTF8'");
?>