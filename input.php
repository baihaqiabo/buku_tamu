<?php  
if(isset($_POST["input"])){
	mysql_connect("localhost", "root","");
	mysql_select_db("tamu");
	$nama   = $_POST['nama'];  
	$email   = $_POST['email'];  
	$komentar = $_POST['komentar'];  
	$input = mysql_query("INSERT INTO buku_tamu VALUES ('','$nama','$email','$komentar')");
	if($input){
	echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="bukutamu.php";</script>';
	}	
	 else{
	echo '<script language="javascript">  
	alert("Gagal menambahkan");  
	window.back();</script>';
	}    
}else{
		echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
		/*}
			else{
			echo '<div id="error">Uppsss...! Email Anda tidak valid!</div>';
		}
				else{
			echo '<div id="error">Uppsss...! Lengkapi form!</div>';
		} */ 
}
?> 
