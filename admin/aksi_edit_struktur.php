<?php
	include "../connection.php";

	if($_POST['cek'] == "ada"){		
		$nama=$_FILES["image"]["name"];
		$lokasi=$_FILES["image"]["tmp_name"];
		$temp = explode(".",$nama);
		$round = round(microtime(true)).'.'. end($temp);
		move_uploaded_file($lokasi,"../img/".$round);
	
		mysqli_query($con,"
		update about set about='img/$round',isi='$_POST[description]' where id='12'
		");
	
		header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=struktur&r=d");
	}else{
		mysqli_query($con,"
		update about set isi='$_POST[description]' where id='12'
		");

		header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=struktur&r=d");

	}
?>