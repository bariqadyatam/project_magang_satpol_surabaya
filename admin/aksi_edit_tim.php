<?php
	include "../connection.php";

	if($_POST['cek'] == "ada"){		
		$nama=$_FILES["image"]["name"];
		$lokasi=$_FILES["image"]["tmp_name"];
		$temp = explode(".",$nama);
		$round = round(microtime(true)).'.'. end($temp);
		move_uploaded_file($lokasi,"../img/".$round);
	
		mysqli_query($con,"
		update tim set foto='img/$round',nama='$_POST[nama]',isi='$_POST[isi]' where id='$_POST[id]'
		");
	
		header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahtim&r=d&i=$_POST[id]");
	}else{
		mysqli_query($con,"
		update tim set nama='$_POST[nama]',isi='$_POST[isi]' where id='$_POST[id]'
		");

		header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahtim&r=d&i=$_POST[id]");

	}
?>