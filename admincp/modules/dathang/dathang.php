<?php
	include_once(dirname(__FILE__).'/../config.php');
	$sql="select * from thongtinkh";
	$kq=mysqli_query($conn,$sql);
?>
<table width="100%" height="auto" border="1">
  <tr bgcolor="red">
  	<td>Thứ tự</td>
    <td>Tên khách hàng</td>
    <td>SĐT</td>
    <td>Địa chỉ</td>
    <td>Email</td>
    <td colspan="2">Quản lý</td>
  </tr>
 <?php
 	$i=0;
	
 	while($dong=mysqli_fetch_array($kq)){
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['username']; ?></td>
    <td><?php echo $dong['phone']; ?></td>
    <td><?php echo $dong['diachi']; ?></td>
    <td><?php echo $dong['email']; ?></td>
	<td><a href="modules/dathang/xuly.php?id=<?php echo $dong['phone']; ?>">Xóa</a></td>
    <td style="text-align:center"><input name="chon" type="checkbox" value="chon" />Đã duyệt</td>
  </tr>
 <?php
 	$i++;
	}
 ?>
</table>
