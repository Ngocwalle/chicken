<div class="content">

	<?php
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];
	}else{
		$tam='';
	}if($tam=='quanlyloaisp'){
		include('modules/quanlyloaisp/main.php');
	}if($tam=='trangchu'){
		include('modules/trangchu.php');
	}if($tam=='quanlychitietsp'){
		include('modules/quanlychitietsp/main.php');
	}if($tam=='quanlyloailk'){
		include('modules/quanlyloailk/main.php');
	}if($tam=='quanlychitietlk'){
		include('modules/quanlychitietlk/main.php');
	}if($tam=='dmk'){
		include('doimatkhau.php');
	}if($tam=='dathang'){
		include('modules/dathang/dathang.php');
	}
	?>
</div>
<div class="clear"></div>