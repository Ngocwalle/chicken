<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}if($tam=='them'){
		include('modules/quanlyloailk/them.php');
	}if($tam=='sua'){
		include('modules/quanlyloailk/sua.php');
	}
	?>
</div>
<div class="right">
	<?php
	include('modules/quanlyloailk/lietke.php');
	?>
</div>