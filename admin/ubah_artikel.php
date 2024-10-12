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
	echo'<script>alert("Perubahan Berhasil disimpan !")</script>';
}elseif($_GET["r"]=="b"){
	echo'<script>alert("Berhasil dihapus !")</script>';
}

include "../connection.php";

$query= mysqli_query($con,"select * from artikel where id='$_GET[i]'");
$h= mysqli_fetch_array($query);

if($h['kategori'] == "Berita Terbaru"){
    $option='
    <option value="Berita Terbaru">Berita Terbaru</option>
    ';
}elseif($h['kategori'] == "Penindakan"){
    $option='
    <option value="Penindakan">Penindakan</option>
    ';
}elseif($h['kategori'] == "Surabaya"){
    $option='
    <option value="Surabaya">Surabaya</option>
    ';
}elseif($h['kategori'] == "Pendataan"){
    $option='
    <option value="Pendataan">Pendataan</option>
    ';
}elseif($h['kategori'] == "Kunjungan Kerja"){
    $option='
    <option value="Kunjungan Kerja">Kunjungan Kerja</option>
    ';
}elseif($h['kategori'] == "Penyegelan"){
    $option='
    <option value="Penyegelan">Penyegelan</option>
    ';
}elseif($h['kategori'] == "Operasi"){
    $option='
    <option value="Operasi">Operasi</option>
    ';
}
?>

<table>
<tr><td>
<a href="?p=artikel&kategori=semua"><img class="iuhas" src="../img/back.jpg" /></a>
</td>
<td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">UBAH ARTIKEL</td>
</tr></table>

<div style=" margin-top:10px; width:100%; display:inline-block; border:3px dashed white; font-weight:bold; color:white;">
<center>
    <div style="padding:10px; margin:20px; background:white; border-radius:5px; display:inline-block;">
        <img src="../<?php echo $h['gambar'];?>" width="200" alt="">
    </div>
</center>
<form action="aksi_ubah_artikel.php" method="post" enctype="multipart/form-data" >
<table style="margin-left:auto; margin-right:auto; margin-top:10px;">
    <tr>
        <td style="padding:10px;">
            Kategori
        </td>
        <td>: 
            <select name="kategori" id="" style="color:black; width:90%;" required >
            <?php echo $option;?>
                <option value="">-pilih kategori lain-</option>
                <option value="Berita Terbaru">Berita Terbaru</option>
                <option value="Penindakan">Penindakan</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Pendataan">Pendataan</option>
                <option value="Kunjungan Kerja">Kunjungan Kerja</option>
                <option value="Penyegelan">Penyegelan</option>
                <option value="Operasi">Operasi</option>
            </select>
        </td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Judul
        </td>
        <td>: <input type="text" value="<?php echo $h['judul'];?>" name="judul" id="inputText" required style=" color:black;" /></td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Url <button onclick="replaceSpaces()" class="edit" title="isi JUDUL">Buat Otomatis</button>
        </td>
        <td>: <input type="text" pattern="[^\s]+" value="<?php echo $h['url'];?>" name="url" style=" color:black;" title="TANPA SPACE" id="resultText" />
        
    </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="checkbox" name="url_cek" value="cek" id=""> <span> Ubah Url</span>
    </td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Tanggal
        </td>
        <td>: <input type="date" name="tanggal" value="<?php echo $h['tanggal'];?>"  style=" color:black;" required /></td>
    </tr>
    <tr>
        <td colspan="2" style="padding:10px;">
            Upload Foto  : 
            <input type="file" name="foto" /><br>
            <input type="checkbox" name="cek" value="ada" /> < Saya juga mengubah Foto <br><br>
            <input type="text" name="id" value="<?php echo $_GET['i'];?>" hidden />
        </td>
    </tr>
</table>

<textarea style="width:100%;" class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product"><?php echo $h['isi'];?></textarea><br>
            <center>
                <input type="Submit" class="tambah" value="Simpan Perubahan" />
            </center>

</form>

</div>
<script>
<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
