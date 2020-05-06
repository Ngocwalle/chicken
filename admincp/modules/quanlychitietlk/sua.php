<?php
	$sql="select * from chitietlk where id_lk='$_GET[id]'";
	$run=mysqli_query($conn,$sql) or die();
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlychitietlk/xuly.php?id=<?php echo $dong['id_lk'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center"><b>Sửa chi tiết thức uống</b></div></td>
  </tr>
  <tr>
    <td>Tên thức uống</td>
    <td><input type="text" name="tenlk" value="<?php echo $dong['tenlk'] ?>"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietlk/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60" /></td>
  </tr>
  <?php
  $sql_loailk="select * from loailk";
  $run_loailk=mysqli_query($conn,$sql_loailk);
  ?>
  <tr>
    <td>Loại thức uống</td>
    <td><select name="loailk">
    <?php
	while($dong_loailk=mysqli_fetch_array($run_loailk)){
		if($dong['id_loailk']==$dong_loailk['id_loailk']){
	?>
    	<option selected="selected" value="<?php echo $dong_loailk['id_loailk'] ?>"><?php echo $dong_loailk['tenloailk'] ?></option>
        <?php
		}else{
		?>
        <option value="<?php echo $dong_loailk['id_loailk'] ?>"><?php echo $dong_loailk['tenloailk'] ?></option>	
		<?php
	}
	}
		?>
    	</select></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="sua">Sửa</button>
    </div></td>
  </tr>
</table>
</form>
