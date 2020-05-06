<?php
	$sql="select * from chitietlk,loailk where loailk.id_loailk=chitietlk.id_loailk order by chitietlk.id_lk desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" height="auto" border="1">
  <tr>
    <td width="6%"><div align="center">Thứ tự</div></td>
    <td width="26%"><div align="center">Tên thức uống</div></td>
    <td width="20%"><div align="center">Hình ảnh</div></td>
    <td width="6%"><div align="center">Giá</div></td>
    <td width="22%"><div align="center">Loại thức uống</div></td>
    <td width="5%"><div align="center">ID</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
 <?php
 	$i=0;
 	while($dong=mysqli_fetch_array($run)){
 ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong['tenlk']; ?></div></td>
    <td><div align="center"><img src="modules/quanlychitietlk/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="60">
    </div>
      <p align="center"></p>
    </td>
    <td><div align="center"><?php echo $dong['gia']; ?></div></td>
    <td><div align="center"><?php echo $dong['tenloailk']; ?></div></td>
    <td><div align="center"><?php echo $dong['thutu']; ?></div></td>
    <td width="7%"><div align="center"><a href="index.php?quanly=quanlychitietlk&ac=sua&id=<?php echo $dong['id_lk'] ?>">Sửa</a></div></td>
    <td width="8%"><div align="center"><a href="modules/quanlychitietlk/xuly.php?id=<?php echo $dong['id_lk'] ?>">Xóa</a></div></td>
  </tr>
 <?php
 	$i++;
	}
 ?>
</table>
