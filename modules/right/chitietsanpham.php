<?php
	$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
	$query_chitietsp=mysqli_query($conn,$sql_chitietsp);
	$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>
<div>
<table width="600" height="400" tyle="border-collapse:collapse" style="float:left; text-transform:uppercase">
  <tr>
    <td bgcolor="#0066CC" style="color:#FFF"><div align="center"><?php echo $dong_chitietsp['tensp'] ?></div></td>
  </tr>
  <tr>
    <td bgcolor="white"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="100%" height="100%" /></td>
  </tr>
</table>
<table width="350" height="auto" style="float:left; margin-left:20px; margin-top:5px; text-transform:uppercase; line-height:40px">
<tr>
<td>Tên thức ăn:<p style="color:white"><?php echo $dong_chitietsp['tensp'] ?></p>
    			<p style="color:#0F0">Giá thức ăn:<?php echo $dong_chitietsp['gia']?> <?php echo "VNĐ" ?></p>
  				<a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'] ?>"><img src="img/mua.PNG" height="40" width="150" style="float:left; border-radius:15px"/></a>	</td>
</tr>
</table>
</div>
