<?php
	ob_start();
	include("koneksi.php");
		
if (isset ($_POST['update'])){	
			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$email=$_POST['email'];
			$komentar=$_POST['komentar'];
			
			$updated=mysql_query("UPDATE buku_tamu SET nama='$nama',email='$email',komentar='$komentar' WHERE id_tamu='$id'") or die("Failed");
			if ($updated)
			{
				//echo '<script language="javascript">alert("Terima kasih, data Anda berhasil diperbarui"); document.location="bukutamu.php";</script>';
				header("location:bukutamu.php");
				echo "masuk";
			}else{
			echo mysql_error();
			}
			}else{
			echo "no update";
}
ob_end_flush();
?>