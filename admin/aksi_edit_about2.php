<?php
	include "../connection.php";

	$nama=$_FILES["image"]["name"];
	$lokasi=$_FILES["image"]["tmp_name"];
	$temp = explode(".",$nama);
	$round = round(microtime(true)).'.'. end($temp);
	move_uploaded_file($lokasi,"../img/".$round);
	mysqli_query($con,"update about set
	about='img/$round'
	where id='$_POST[id]'
	");
	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=setting&r=d");
?>