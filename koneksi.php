<?php
    $host     		= "localhost";//nama hosting yang digunakan
    $username 		= "root";  //username default untuk bisa masuk/login di localhost
    $password    	= "";
    $namadb   		= "tamu";
    $koneksi      	= mysql_connect($host,$username,$password);
    $database     	= mysql_select_db($namadb);

    //cek koneksi
	if(!$koneksi)
        echo "Koneksi Gagal";
	echo "<br>";
    //cek database
	if(!$database)
      echo "Database tidak ditemukan";
?>
