<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}if($tam=='them'){
		include('modules/quanlychitietlk/them.php');
	}if($tam=='sua'){
		include('modules/quanlychitietlk/sua.php');
	}
	?>
</div>
<div class="right">
	<?php
	include('modules/quanlychitietlk/lietke.php');
	?>
</div>