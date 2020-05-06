<?php
	$sql="select * from loailk order by id_loailk desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên loại thức uống</div></td>
    <td><div align="center">Thứ tự</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  $i=0;
  while($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong['tenloailk'] ?></div></td>
    <td><div align="center"><?php echo $dong['thutu'] ?></div></td>
    <td><div align="center"><a href="index.php?quanly=quanlyloailk&ac=sua&id=<?php echo $dong['id_loailk'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlyloailk/xuly.php?id=<?php echo $dong['id_loailk'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
