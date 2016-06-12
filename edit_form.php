<html>

<head><title>Registasi Tamu</title></head>
<style type="text/css">
body { font-family:tahoma; font-size:12px; }
#container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
input[type="text"] { width:200px; }
input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
#error { border:1px solid red; background:#ffc0c0; padding:5px; }
</style>

<body>
<?php
include ("koneksi.php");
$edit=mysql_fetch_array(mysql_query("SELECT * FROM buku_tamu WHERE id_tamu='$_GET[id]'"));
?>
	<div id = "container">
		<center><h1>Form Buku Tamu</h1></center>
			<DIV ALIGN = "CENTER">
  			<H1><U><font color="red">Selamat Datang</font></U></H1>
  			<H3>Silahkan Mengisi Form Di Bawah Ini!</H4>
			</DIV>
 
	<form method="POST"  action="edit.php">
	<input type="hidden" name="id" Size = "30"  value="<?php echo $edit['id_tamu']?>"/>
	<p><b>Nama Lengkap :</b><br><input type="text" name="nama" Size = "30" placeholder="iqbal baihaqi" required value="<?php echo $edit['nama']?>"/></p>
	<p><b>Email :</b><br><input type="text" name="email"size = "30" placeholder="iqbal.baihaqi27@gmail.com" required value="<?php echo $edit['email']?>"/></p>
	<p><b>Komentar :</b><br><textarea name="komentar" rows="5" cols="50" placeholder="Saya sangat senang bisa berkunjung" required><?php echo $edit['komentar']?></textarea></p> 
	<td align = "center" colspan = "5" cellspacing = "5" cellpadding = "5">
	<input type="submit" name="update" value="Simpan">
	<input type="reset" name="batal" value="Batal">  
	<p><a href="bukutamu.php">Lihat Data Tamu</a>
	</td>  
</form>
</div>
</body>
</html>