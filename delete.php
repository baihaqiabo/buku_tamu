<?php
	ob_start();
	include("koneksi.php");
	if(isset($_GET['id'])!="")
	{
		$delete=$_GET ['id'];
		$delete=mysql_query("delete from buku_tamu where id_tamu='$delete'");
		if ($delete)
		{
			echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="bukutamu.php";</script>';
			header("location:form.php");
		}
		else
		{
			echo mysql_error();
		}
	}
	ob_end_flush();
?>