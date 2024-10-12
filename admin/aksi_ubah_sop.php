<?php
	include "../connection.php";

    if($_POST['cek'] == "ada"){

	$nama=$_FILES["pdf"]["name"];
    $filepath = "../file_pdf/".$nama;

    // Check if the file exists
    if (file_exists($filepath)) {
        header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahsop&r=a&i=$_POST[id]");
    }else{
            $lokasi=$_FILES["pdf"]["tmp_name"];
            move_uploaded_file($lokasi,"../file_pdf/".$nama);
            mysqli_query($con,"update sop set
            sop='$_POST[sop]',
            tanggal='$_POST[tanggal]',
            file='$nama'
            where id='$_POST[id]'
            ");
            header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahsop&r=d&i=$_POST[id]");
    }

    }else{
        mysqli_query($con,"update sop set
        sop='$_POST[sop]',
        tanggal='$_POST[tanggal]'
        where id='$_POST[id]'
        ");
        header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahsop&r=d&i=$_POST[id]");
}
?>