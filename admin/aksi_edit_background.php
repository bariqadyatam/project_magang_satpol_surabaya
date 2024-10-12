<?php
	include "../connection.php";

	$nama=$_FILES["image"]["name"];
	$lokasi=$_FILES["image"]["tmp_name"];
	$temp = explode(".",$nama);
	$round = round(microtime(true)).'.'. end($temp);
	move_uploaded_file($lokasi,"../img/".$round);
	mysqli_query($con,"update about set
	isi='img/$round'
	where id='3'
	");
	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=dashboard&r=d");
?>