<style>
.iuhas{
border-radius:5px;
height:50px;
}
.mzcbm{
	background-color:white;
	color:blue;
	width:49%;
	text-align:center;
	margin-top:10px;
	margin-bottom:10px;
	padding:5px;
	margin-left:auto;
	margin-right:auto;
	border-radius:7px;
	display:inline-block;
	font-weight:bold;
}

.mzcbm:hover{
	background-color:#9ef7ff;
	color:black;
}
.kategori{
	background-color:white;
	font-weight: bold;
	color: black;
	width:23%;
	text-align:center;
	margin-top:10px;
	margin-bottom:10px;
	padding:5px;
	margin-left:auto;
	margin-right:auto;
	border-radius:7px;
	display:inline-block;
}

.kategori:hover{
	background-color:#9ef7ff;
	color:black;
}
.hapus{
	color:red; 
	background:white; 
	border-radius:5px; 
	padding:5px; 
	margin:10px;
	display:inline-block;
    border:1px solid red;
}

.hapus:hover{
	background:red;
	color:white;
}

.edit{
	color:green; 
	background:white; 
	border-radius:5px; 
	padding:5px; 
	margin:10px;
	display:inline-block;
    border:1px solid green;
}

.edit:hover{
	background:green;
	color:white;
}

.tambah{
	color:white; 
	background:#378cff; 
	border-radius:5px; 
	padding:5px; 
	margin:10px;
	display:inline-block;
	border:none;
}

.tiga{
    width: 30%;
}

.tujuh{
    width: 70%;
}

.flx{
    display:flex;
}

.kcl th{
	padding:10px;
}

.kcl td{
	padding:10px;
}

.conten{
	display:none;
	position:absolute;
	padding:10px;
	margin-left:-10px;
}

.conten a{
	border-left:1px solid #e3e3e3;
	border-right:1px solid #e3e3e3;
	border-bottom:1px solid #e3e3e3;
	display:block;
	border-radius:none;
}

.conten a:hover{
	background:#30c1eb;
}

.dropp{
	display:inline-block;
	width:50%;
	position: relative;
}

.dropp a{
	padding:10px;
	color:black;
	background:#c9f3ff;
	border-radius:5px;
}

.dropp:hover .conten{
	display:block;
}

@media (max-width: 768px) {

	.edit{
		padding:5px;
		margin:5px;
	}

	.dropp{
	font-size:12px;
}
	.hapus{
		padding:5px;
		margin:5px;
	}

    .flx{
    display:block;
}    

    .tiga{
    width: 100% !important;
    display:block;
}

.tujuh{
    width: 100% !important;
    display:table;
    margin-top:10px;
}

.kcl{
	font-size:12px;
}

.kcl th{
	padding:5px;
}

.kcl td{
	padding:5px;
}
}
</style>

<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}elseif($_GET["r"]=="b"){
	echo'<script>alert("Berhasil dihapus !")</script>';
}elseif($_GET["r"]=="a"){
	echo'<script>alert("GAGAL !!! Nama File Sudah Ada, Mohon Ganti Nama Filenya !")</script>';
}elseif($_GET["r"]=="z"){
	echo'<script>alert("Berhasil ditambahkan !")</script>';
}



	include "../connection.php";


$no=1;

if($_GET['kategori'] == "semua"){
	$query = mysqli_query($con,"SELECT * from artikel order by id desc");
	while($hasil = mysqli_fetch_array($query)){
	
	    $out1 = strlen($hasil['judul']) > 30 ? substr($hasil['judul'],0,30)."..." : $hasil['judul'];

		
		$tr.="
		<tr>
			<td>$no</td>
			<td>$hasil[kategori]</td>
			<td>$out1</td>
			<td>$hasil[tgl]</td>
			<td><img src='../$hasil[gambar]' width='100' /></td>
			<td>
			<a href='94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&i=$hasil[id]' class='edit'>Ubah</a>
			<a href='aksi_hapus_artikel.php?i=$hasil[id]' onclick='return checkDelete()' class='hapus'>Hapus</a>
			</td>
		</tr>
		";
		$no++;
	}
}elseif($_GET['kategori'] == "Berita Terbaru" || $_GET['kategori'] =="Penindakan" || $_GET['kategori'] =="Surabaya" || $_GET['kategori'] =="Pendataan" || $_GET['kategori'] =="Kunjungan Kerja" || $_GET['kategori'] =="Penyegelan" || $_GET['kategori'] =="Operasi"){
	$query = mysqli_query($con,"SELECT * from artikel where kategori='$_GET[kategori]'");
	while($hasil = mysqli_fetch_array($query)){
	
	    $out2 = strlen($hasil['judul']) > 30 ? substr($hasil['judul'],0,30)."..." : $hasil['judul'];

		
		$tr.="
		<tr>
			<td>$no</td>
			<td>$hasil[kategori]</td>
			<td>$out2</td>
			<td>$hasil[tgl]</td>
			<td><img src='../$hasil[gambar]' width='100' /></td>
			<td>
			<a href='94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahartikel&i=$hasil[id]' class='edit'>Ubah</a>
			<a href='aksi_hapus_artikel.php?i=$hasil[id]' onclick='return checkDelete()' class='hapus'>Hapus</a>
			</td>
		</tr>
		";
		$no++;
	}
}

?>

<table>
<tr><td>
<a href="?p="><img class="iuhas" src="../img/back.jpg" /></a>
</td>
<td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">Artikel</td>
</tr></table>
			<div class="dropp"><a href="#">Pilih Kategori
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
	  			<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
				</svg>
				</a>
				<div class="conten">
					<div><a href="?p=artikel&kategori=semua">Semua Kategori</a></div>
					<div><a href="?p=artikel&kategori=Berita Terbaru">Berita Terbaru</a></div>
					<div><a href="?p=artikel&kategori=Penindakan">Penindakan</a></div>
					<div><a href="?p=artikel&kategori=Surabaya">Surabaya</a></div>
					<div><a href="?p=artikel&kategori=Pendataan">Pendataan</a></div>
					<div><a href="?p=artikel&kategori=Kunjungan Kerja">Kunjungan Kerja</a></div>
					<div><a href="?p=artikel&kategori=Penyegelan">Penyegelan</a></div>
					<div><a href="?p=artikel&kategori=Operasi">Operasi</a></div>
				</div>
			</div>

			<a href='?p=tambahartikel' class='mzcbm'>
		<div>TAMBAH ARTIKEL</div>
	</a>

<table class="kcl" border="1" width="100%" style="width:100%; background:white;">
    <tr style="height:50px;">
        <th>No</th>
        <th>Artikel</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Foto</th>
        <th></th>
    </tr>
    <?php echo $tr;?>
</table>
