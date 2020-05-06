<?php
	$sql="select * from loailk where id_loailk=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action="modules/quanlyloailk/xuly.php?id=<?php echo $dong['id_loailk'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center"><b>Sửa loại thức uống</b></div></td>
  </tr>
  <tr>
    <td width="12%">Tên loại thức uống</td>
    <td width="88%"><input type="text" name="tenloailk" value="<?php echo $dong['tenloailk'] ?>"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>
