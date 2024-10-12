<?php
	include "../connection.php";

	mysqli_query($con,"update login set
	name='$_POST[name]',
	password='$_POST[password]'
	");
	include "logout2.php";
?>