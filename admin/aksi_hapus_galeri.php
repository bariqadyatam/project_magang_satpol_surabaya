<?php

	include "../connection.php";

	mysqli_query($con,"delete from galeri where id='$_GET[i]'");
	
	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=galeri&r=b");
?>