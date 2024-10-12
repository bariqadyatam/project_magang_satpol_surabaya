<style>
.iuhas{
border-radius:5px;
width:50px;
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

table{
	width: 100%;
}

span{
    color:white;
    font-weight:bold;
}

@media (max-width: 900px){
    td{
        display:inline-block;
        position:relative;
        width: 100%;
        margin:0 0 10px 0;
    }
}

.hapus{
    background-color:white;
    color:red;
    padding:10px;
    margin: 5px;
    border-radius: 5px;
    display:inline-block;
    border:1px solid red;
}

.hapus:hover{
    background-color:red;
    color:white;
}

.button{
    display:inline-block;
    background-color:#7fd9ff;
    color:black;
    padding:10px;
    margin: 5px;
    border-radius: 5px;
    border:none;
}

input{
    padding:5px;
    margin:10px;
    border-radius:5px;
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
</style>

<table>
    <tr style="display:flex;"><td style="width:auto; display:inline-block;">
<a href="?p=about"><img class="iuhas" src="../img/back.jpg" /></a>
</td>
        <td style="
        width:100%;
        display:inline-block;
        height:50px;
        text-align:center;
        color:white;
        background-color:grey; 
        border-radius:5px; align-content:center; font-size:20px;">Sejarah
        </td>
    </tr>
</table>

<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}


	include "../connection.php";


$query = mysqli_query($con,"select * from about where id='13'");
$hasil = mysqli_fetch_array($query);

$query14 = mysqli_query($con,"select * from about where id='14'");
$hasil14 = mysqli_fetch_array($query14);

?>

<center><h4><span>Sejarah Satuan Polisi Pamong Praja Kota Surabaya</span></h4></center>
<form action="aksi_edit_sejarah.php" method="post" style="text-align:center;background-color:none; border:3px dashed white; border-radius:5px; padding:10px;" enctype="multipart/form-data">

<textarea name="atas" rows="3" id=""><?php echo $hasil['isi'];?></textarea>

<span><img src="../<?php echo $hasil['about']; ?>" width="100" alt="Gagal"></span>
<span><input type="file" name="image" id=""></span>
<input type="checkbox" name="cek" value="ada" id=""><span> < Saya juga mengubah gambar (centang)</span>

<textarea style="width:100%;" class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product"><?php echo $hasil14['about'];?></textarea>
<input type="Submit" class="button" value="Simpan Perubahan" />

</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
