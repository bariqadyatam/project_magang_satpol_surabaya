<?php
	include "../connection.php";

	mysqli_query($con,"
    update about set isi='$_POST[link]' where id='8'
	");

	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=dashboard&r=d");
?>