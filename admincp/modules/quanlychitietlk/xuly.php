<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenlk=$_POST['tenlk'];
	$mota=$_POST['motalk'];
	$gia=$_POST['gia'];
	$loailk=$_POST['loailk'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		$sql="insert into chitietlk (tenlk,thutu,mota,gia,id_loailk,hinhanh) values ('$tenlk','$thutu','$mota','$gia','$loailk','$hinhanh')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietlk&ac=them');
	}elseif(isset($_POST['sua'])){
		if($hinhanh!=''){
		$sql="update chitietlk set tenlk='$tenlk',thutu='$thutu',mota='$mota',gia='$gia',id_loailk='$loailk',hinhanh='$hinhanh' where id_lk='$id'";
		}else{
		$sql="update chitietlk set tenlk='$tenlk',thutu='$thutu',mota='$mota',gia='$gia',id_loailk='$loailk' where id_lk='$id'";
		}
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietlk&ac=sua&id='.$id);
	}else{
		$sql="delete from chitietlk where id_lk='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietlk&ac=them');
	}
?>