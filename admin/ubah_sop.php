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

@media (max-width: 768px) {


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

}
</style>

<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}elseif($_GET["r"]=="b"){
	echo'<script>alert("Berhasil dihapus !")</script>';
}elseif($_GET["r"]=="a"){
	echo'<script>alert("GAGAL !!! Nama File Sudah Ada, Mohon Ganti Nama Filenya !")</script>';
}



	include "../connection.php";

$no=1;
$query = mysqli_query($con,"select * from sop where id='$_GET[i]'");
$hasil = mysqli_fetch_array($query);

?>

<table>
<tr><td>
<a href="?p=sop"><img class="iuhas" src="../img/back.jpg" /></a></td>
<td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">SOP</td>
</tr></table>

<div class="flx" style=" margin-top:10px;">
<form action="aksi_ubah_sop.php" method="post" class="tiga" enctype="multipart/form-data" style=" display:inline-block; border:3px dashed white; font-weight:bold; color:white;" >
<table>
    <tr>
        <td style="padding:10px;">
            SOP
        </td>
        <td>: <input type="text" name="sop" required style=" color:black;" value="<?php echo $hasil['sop'];?>" /></td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Tanggal
        </td>
        <td>: <input type="text" name="tanggal" required style=" color:black;" value="<?php echo $hasil['tanggal'];?>" /></td>
    </tr>
    <tr>
        <td colspan="2" style="padding:10px;">
            File PDF  : 
            <input type="file" name="pdf" />
            <center>
                <input type="checkbox" name="cek" value="ada" /> < Saya juga mengubah file <br>
                <input type="text" name="id" value="<?php echo $_GET['i'];?>" hidden />
                <input type="Submit" class="tambah" value="Ubah" />
            </center>
        </td>
    </tr>
</table>
</form>


</div>