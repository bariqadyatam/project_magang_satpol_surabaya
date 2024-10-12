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
        border-radius:5px; align-content:center; font-size:20px;">Ubah Tim
        </td>
    </tr>
</table>
<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}


	include "../connection.php";


$query = mysqli_query($con,"select * from tim where id='$_GET[i]'");
$hasil = mysqli_fetch_array($query);

?>

<center><h4><span>Tim</span></h4>
<span><img src="../<?php echo $hasil['foto']; ?>" width="100" alt="Gagal"></span>
</center>
<form action="aksi_edit_tim.php" method="post" style="text-align:center;background-color:none; border:3px dashed white; border-radius:5px; padding:10px;" enctype="multipart/form-data">
<span>Nama : </span><input name="nama" type="text" value="<?php echo $hasil['nama'];?>" />
<span><input type="file" name="image" id=""></span>
<input type="checkbox" name="cek" value="ada" id=""><span> < Saya juga mengubah foto (centang)</span>

<textarea name="isi" rows="5" placeholder="Masukkan Description Product"><?php echo $hasil['isi'];?></textarea>
<input type="text" name="id" value="<?php echo $hasil['id'];?>" hidden />
<input type="Submit" class="button" value="Simpan Perubahan" />

</form>