<?php
	if(isset($_GET['ac']) && $_GET['ac']=='username'){
		unset($_SESSION['login']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="index.php?quanly=trangchu">Trang chủ</a></li>
            <li><a href="index.php?quanly=quanlyloaisp&ac=them">QL loại thức ăn</a></li>
            <li><a href="index.php?quanly=quanlychitietsp&ac=them">QL chi tiết thức ăn</a></li>
            <li><a href="index.php?quanly=quanlyloailk&ac=them">QL loại nước uống</a></li>
            <li><a href="index.php?quanly=quanlychitietlk&ac=them">QL chi tiết nước uống</a></li>
            <li><a href="index.php?quanly=dmk">Đổi mật khẩu</a></li>
            <li><a href="index.php?quanly=dathang">Danh sách đặt món</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
        </ul>
</div>