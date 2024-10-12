<?php

	include "../connection.php";

    $nama=$_FILES["pdf"]["name"];
    $filepath = "../file_pdf/".$nama;

    // Check if the file exists
    if (file_exists($filepath)) {
        header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=sop&r=a");
    }else{
	$lokasi=$_FILES["pdf"]["tmp_name"];
	move_uploaded_file($lokasi,"../file_pdf/".$nama);
	mysqli_query($con,"insert into sop 
	(`sop`,`tanggal`,`file`) values
	('$_POST[sop]','$_POST[tanggal]','$nama')
	");
	
	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=sop&r=d");
    }
?>