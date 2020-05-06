<?php
	$sql="select * from loaisp order by id_loaisp desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên loại thức ăn</div></td>
    <td><div align="center">Thứ tự</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  $i=0;
  while($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong['tenloaisp'] ?></div></td>
    <td><div align="center"><?php echo $dong['thutu'] ?></div></td>
    <td><div align="center"><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>">Xóa</a></div></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
