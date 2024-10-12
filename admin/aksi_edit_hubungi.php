<?php
	include "../connection.php";

		mysqli_query($con,"
		update about set about='$_POST[alamat]',isi='$_POST[link]' where id='15'
		");
	
		mysqli_query($con,"
		update about set about='$_POST[judul]',isi='$_POST[linkmaps]' where id='16'
		");

		header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=hubungi&r=d");

?>