<?php
	include "../connection.php";

	mysqli_query($con,"update about set
	isi='$_POST[isi]'
	where id='$_POST[id]'
	");

	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=$_POST[b]&r=d");
?>