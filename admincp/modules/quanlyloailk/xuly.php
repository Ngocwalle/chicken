<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenloailk=$_POST['tenloailk'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		$sql="insert into loailk (tenloailk,thutu) values ('$tenloailk','$thutu')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloailk&ac=them');
	}elseif(isset($_POST['sua'])){
		$sql="update loailk set tenloailk='$tenloailk',thutu='$thutu' where id_loailk='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloailk&ac=sua&id='.$id);
	}else{
		$sql="delete from loailk where id_loailk='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloailk&ac=them');
	}
?>