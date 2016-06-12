<html>
<head>
<center><title>Daftar Nama Tamu</title></center>
</head>
<body>
<br/>
<center><table border = "1" width="50%" cellspacing = "5" cellpadding = "5" bgcolor = "white">
			<tr>
				<th bgcolor = green> <font color = white style=bold > Nama</font></th>
				<th bgcolor = green> <font color = white style=bold > Email</font></th>
				<th bgcolor = green> <font color = white style=bold > Komentar</font></th>
				<th bgcolor = green> <font color = white style=bold > Action</font></th>

			</tr>

<?php
include ("koneksi.php");
$show = mysql_query("select * from buku_tamu");
while($row = mysql_fetch_assoc($show)){
?>
<tr>
<th align = "center"><?=$row['nama']?></th> 
<th align = "center"><?=$row['email']?></th> 
<th align = "center"><?=$row['komentar']?></th> 
<th align = "center"><a href="delete.php?id=<?=$row['id_tamu'];?>">Delete</a><br/>
<a href="edit_form.php?id=<?=$row['id_tamu'];?>">Edit</a></th>
</tr>
<?php
}
?>
</table>
<p><a href = "form.php"> Kembali ke Form Registrasi</a></p>
</center>

</body>
</html>