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
	echo'<script>alert("Berhasil ditambahkan !")</script>';
}elseif($_GET["r"]=="b"){
	echo'<script>alert("Berhasil dihapus !")</script>';
}elseif($_GET["r"]=="a"){
	echo'<script>alert("GAGAL !!! Nama File Sudah Ada, Mohon Ganti Nama Filenya !")</script>';
}

?>

<table>
<tr><td>
<a href="?p=artikel&kategori=semua"><img class="iuhas" src="../img/back.jpg" /></a>
</td>
<td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">TAMBAH ARTIKEL</td>
</tr></table>

<div style=" margin-top:10px; width:100%; display:inline-block; border:3px dashed white; font-weight:bold; color:white;">
<form action="aksi_tambah_artikel.php" method="post" enctype="multipart/form-data" >
<table style="margin-left:auto; margin-right:auto; margin-top:10px;">
    <tr>
        <td style="padding:10px;">
            Kategori
        </td>
        <td>: 
            <select name="kategori" id="" style="color:black; width:90%;" required >
                <option value="">-Pilih Kategori-</option>
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
        <td>: <input type="text" name="judul" id="inputText" required style=" color:black;" /></td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Url <button onclick="replaceSpaces()" class="edit" title="isi JUDUL">Buat Otomatis</button>
        </td>
        <td>: <input type="text" pattern="[^\s]+" required name="url" style=" color:black;" title="TANPA SPACE" id="resultText" /></td>
    </tr>
    <tr>
        <td style="padding:10px;">
            Tanggal
        </td>
        <td>: <input type="date" name="tanggal"  style=" color:black;" required /></td>
    </tr>
    <tr>
        <td colspan="2" style="padding:10px;">
            <p style=" color:white;">Upload Foto : </p>
            <input type="file" name="foto" required />
        </td>
    </tr>
</table>

<textarea style="width:100%;" class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product"></textarea><br>
            <center>
                <input type="Submit" class="tambah" value="Tambahkan" />
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
