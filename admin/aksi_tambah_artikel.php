<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php

	include "../connection.php";

	$kat = $_POST['kategori'];

	$quer = mysqli_query($con,"select * from artikel where url='$_POST[url]'");
	$number = mysqli_num_rows($quer);

	if($number > 0){
		echo '<script>alert("GAGAL Upload !!! Url sudah ada !"); window.history.back()</script>';
	}else{

if($kat == "Berita Terbaru"){
	$kode = "B";
}elseif($kat == "Penindakan"){
	$kode = "Peni";
}elseif($kat == "Surabaya"){
	$kode = "S";
}elseif($kat == "Pendataan"){
	$kode = "Pend";
}elseif($kat == "Kunjungan Kerja"){
	$kode = "K";
}elseif($kat == "Penyegelan"){
	$kode = "Peny";
}elseif($kat == "Operasi"){
	$kode = "O";
}

$query = mysqli_query($con,"select * from kode");
$num = mysqli_fetch_array($query);
$ditambah = $num['kode']+1;
$hasil= $kode.$ditambah;

	$nama=$_FILES["foto"]["name"];
	$lokasi=$_FILES["foto"]["tmp_name"];
	$temp = explode(".",$nama);
	$round = round(microtime(true)).'.'. end($temp);
	move_uploaded_file($lokasi,"../img/".$round);

	$date = $_POST['tanggal'];
	{
		function tgl_indo($date){
			$bulan = array (
				1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$pecahkan = explode('-', $date);
			
			// variabel pecahkan 0 = tahun
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tanggal
		 
			return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
		}
	}
	{
		function tgl_indon($date){
			$bulan = array (
				1 =>   '<br>Januari<br>',
				'<br>Februari<br>',
				'<br>Maret<br>',
				'<br>April<br>',
				'<br>Mei<br>',
				'<br>Juni<br>',
				'<br>Juli<br>',
				'<br>Agustus<br>',
				'<br>September<br>',
				'<br>Oktober<br>',
				'<br>November<br>',
				'<br>Desember<br>'
			);
			$pecahkan = explode('-', $date);
			
			// variabel pecahkan 0 = tahun
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tanggal
		 
			return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
		}
	}
	$formattedDate = tgl_indo($date);
	$formattedDateDua = tgl_indon($date);

    $inputValue = $kat;
    $inputValueWithoutSpaces = str_replace(' ', '', $inputValue);

	mysqli_query($con,"insert into artikel 
	(`kode`,`kategori`,`kategori2`,`judul`,`url`,`tanggal`,`tgl`,`tgl2`,`gambar`,`isi`) values
	('$hasil','$_POST[kategori]','$inputValueWithoutSpaces','$_POST[judul]','$_POST[url]','$date','$formattedDate','$formattedDateDua','img/$round','$_POST[description]')
	");

	mysqli_query($con,"UPDATE kode SET kode='$ditambah' where id='1'");
	
	header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=artikel&r=z&kategori=semua");
}
?>	
</body>
</html>
