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
$query = mysqli_query($con,"select * from sop");
while($hasil = mysqli_fetch_array($query)){
    $tr.="
    <tr>
        <td style='padding:10px;'>$no</td>
        <td style='padding:10px;'>$hasil[sop]</td>
        <td style='padding:10px;'>$hasil[tanggal]</td>
        <td style='padding:10px;'><a href='download.php?file=$hasil[file]'>Download</a></td>
        <td>
        <a href='94ec4siq26kjm2b3l6sfsqtm41.php?p=ubahsop&i=$hasil[id]' class='edit'>Ubah</a>
        <a href='aksi_hapus_sop.php?i=$hasil[id]' onclick='return checkDelete()' class='hapus'>Hapus</a>
        </td>
    </tr>
    ";
    $no++;
}

?>

<table>
<tr><td>
<a href="?p="><img class="iuhas" src="../img/back.jpg" /></a></td>
<td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">SOP</td>
</tr></table>

<div class="flx" style=" margin-top:10px;">
<form action="aksi_tambah_sop.php" method="post" class="tiga" enctype="multipart/form-data" style=" display:inline-block; border:3px dashed white; font-weight:bold; color:white;" >
<table>
    <tr>
        <td style="padding:10px;">
            SOP
        </td>
        <td>: <input type="text" name="sop" required style=" color:black;" /></td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Tanggal
        </td>
        <td>: <input type="text" name="tanggal" required style=" color:black;" /></td>
    </tr>
    <tr>
        <td colspan="2" style="padding:10px;">
            File PDF  : 
            <input type="file" name="pdf" required />
            <center>
                <input type="Submit" class="tambah" value="Tambahkan" />
            </center>
        </td>
    </tr>
</table>
</form>

<table border="1" class="tujuh" width="100%" style="width:100%; background:white;">
    <tr style="height:50px;">
        <th style="padding:10px;">No</th>
        <th style="padding:10px;">SOP</th>
        <th style="padding:10px;">Tanggal</th>
        <th style="padding:10px;">File</th>
        <th style="padding:10px;"></th>
    </tr>
    <?php echo $tr;?>
</table>

</div>