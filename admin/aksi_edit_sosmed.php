<?php
	include "../connection.php";

	mysqli_query($con,"update about set
	about='$_POST[twitter]',
	isi='$_POST[tiktok]'
	where id='9'
	");

	mysqli_query($con,"update about set
	about='$_POST[instagram]',
	isi='$_POST[facebook]'
	where id='10'
	");

	mysqli_query($con,"update about set
	about='$_POST[yt]'
	where id='11'
	");

	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=setting&r=d");

?>