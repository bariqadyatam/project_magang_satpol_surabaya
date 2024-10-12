<?php

	include "../connection.php";

	mysqli_query($con,"DELETE FROM artikel where id='$_GET[i]'");
	
	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=artikel&kategori=semua&r=b");
?>