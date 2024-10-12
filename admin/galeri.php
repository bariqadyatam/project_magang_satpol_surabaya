<style>
.iuhas{
border-radius:5px;
height:50px;
}
.mzcbm{
	background-color:white;
	color:#473bdd;
	width:50%;
	text-align:center;
	margin-top:10px;
	margin-bottom:10px;
	padding:5px;
	margin-left:auto;
	margin-right:auto;
	border-radius:7px;
}

.mzcbm:hover{
	background-color:#473bdd;
	color:white;
}

.hapus{
	color:red; 
	background:white; 
	border-radius:5px; 
	padding:5px; 
	margin:10px;
	display:inline-block;
}

.hapus:hover{
	background:red;
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

</style>
<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Berhasil Ditambahkan")</script>';
}elseif($_GET["r"]=="b"){
	echo'<script>alert("Berhasil dihapus !")</script>';
}


	include "../connection.php";


	$query = mysqli_query($con,"select * from galeri");
	while($hasil = mysqli_fetch_array($query)){
	$muncul.="
	<div style='margin:10px; border-radius:5px; background:white; display:inline-block; padding:5px;'>
		<center>
			<img src='../$hasil[foto]' alt='$hasil[foto]' height='100' /><br><a href='aksi_hapus_galeri.php?i=$hasil[id]' class='hapus' onclick='return checkDelete()' >Hapus<a/>
		</center>
	</div>
	";
	}

?>
<table>
<tr>
    <td>
        <a href="?p="><img class="iuhas" src="../img/back.jpg" /></a>
    </td>
    <td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">Galeri Kegiatan</td>
</tr>
</table>

<table style="margin-top:10px;">
<tr><td class="iuhas" style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_tambah_galeri.php" method="post" enctype="multipart/form-data" >
<b style="color:white;">Upload Foto  : <input type="file" name="image" required /></b>
<input type="Submit" value="Tambahkan" class="tambah" />
</form>
</td>
</tr></table>

<?php echo $muncul;?>
