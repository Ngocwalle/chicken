<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center"><b>Thêm chi tiết thức ăn</b></div></td>
  </tr>
  <tr>
    <td width="9%">Tên thức ăn</td>
    <td width="91%"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <?php
  $sql="select * from loaisp";
  $run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td>Loại thức ăn</td>
    <td><select name="loaisp">
    <?php
	while($dong=mysqli_fetch_array($run)){
	?>
    	<option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp'] ?></option>
        <?php
	}
		?>
    	</select></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm">Thêm</button>
    </div></td>
  </tr>
</table>
</form>
