<?php
	include "../connection.php";

	$quer = mysqli_query($con,"select * from artikel where url='$_POST[url]'");
	$number = mysqli_num_rows($quer);
	
	$kat = $_POST['kategori'];
    $inputValue = $kat;
    $inputValueWithoutSpaces = str_replace(' ', '', $inputValue);

	if($_POST['url_cek'] == "cek"){
		
			if($number > 0){
				echo '<script>alert("Url sudah ada !"); window.location="94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&i='.$_POST['id'].'"</script>';
			}else{
		
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
		
			if($_POST['cek']=="ada"){
				$nama=$_FILES["foto"]["name"];
				$lokasi=$_FILES["foto"]["tmp_name"];
				$temp = explode(".",$nama);
				$round = round(microtime(true)).'.'. end($temp);
				move_uploaded_file($lokasi,"../img/".$round);
		
				mysqli_query($con,"update artikel set
				kategori='$_POST[kategori]',
				kategori2='$inputValueWithoutSpaces',
				judul='$_POST[judul]',
				url='$_POST[url]',
				tanggal='$_POST[tanggal]',
				tgl='$formattedDate',
				tgl2='$formattedDateDua',
				gambar='img/$round',
				isi='$_POST[description]'
				where id='$_POST[id]'
				");
		
				header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&r=d&i=$_POST[id]");
		
				}else{
		
					mysqli_query($con,"update artikel set
					kategori='$_POST[kategori]',
					kategori2='$inputValueWithoutSpaces',
					judul='$_POST[judul]',
					url='$_POST[url]',
					tanggal='$_POST[tanggal]',
					tgl='$formattedDate',
					tgl2='$formattedDateDua',
					isi='$_POST[description]'
					where id='$_POST[id]'
					");
		
					header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&r=d&i=$_POST[id]");    
		
				}
			}
	}else{
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
	
		if($_POST['cek']=="ada"){
			$nama=$_FILES["foto"]["name"];
			$lokasi=$_FILES["foto"]["tmp_name"];
			$temp = explode(".",$nama);
			$round = round(microtime(true)).'.'. end($temp);
			move_uploaded_file($lokasi,"../img/".$round);
	
			mysqli_query($con,"update artikel set
			kategori='$_POST[kategori]',
			kategori2='$inputValueWithoutSpaces',
			judul='$_POST[judul]',
			tanggal='$_POST[tanggal]',
			tgl='$formattedDate',
			tgl2='$formattedDateDua',
			gambar='img/$round',
			isi='$_POST[description]'
			where id='$_POST[id]'
			");
	
			header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&r=d&i=$_POST[id]");
	
			}else{
	
				mysqli_query($con,"update artikel set
				kategori='$_POST[kategori]',
				kategori2='$inputValueWithoutSpaces',
				judul='$_POST[judul]',
				tanggal='$_POST[tanggal]',
				tgl='$formattedDate',
				tgl2='$formattedDateDua',
				isi='$_POST[description]'
				where id='$_POST[id]'
				");
	
				header("location:94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&r=d&i=$_POST[id]");    
	
			}		
	}
?>