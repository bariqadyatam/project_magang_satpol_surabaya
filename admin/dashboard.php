<style>
.iuhas{
border-radius:5px;
margin-left:10px;
width:50px;
display:table-td;
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
    <tr>
        <td style="
        width:100%;
        height:50px;
        text-align:center;
        color:white;
        background-color:grey; 
        border-radius:5px; align-content:center; font-size:20px;">Dashboard
        </td>
    </tr>
</table>

<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}


	include "../connection.php";


$query_2 = mysqli_query($con,"select * from about where id=4");
$hasil_2 = mysqli_fetch_array($query_2);

$query_5 = mysqli_query($con,"select * from about where id=5");
$hasil_5 = mysqli_fetch_array($query_5);

$query_6 = mysqli_query($con,"select * from about where id=6");
$hasil_6 = mysqli_fetch_array($query_6);

$query_7 = mysqli_query($con,"select * from about where id=7");
$hasil_7 = mysqli_fetch_array($query_7);

$query_8 = mysqli_query($con,"select * from about where id=8");
$hasil_8 = mysqli_fetch_array($query_8);

$query_3 = mysqli_query($con,"select * from about where id='3'");
$hasil_3 = mysqli_fetch_array($query_3);
?>

<table style="margin:10px auto 10px auto; text-align:left; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<tr><td class="iuhas" style="padding:10px;">
<form action="aksi_edit_background.php" method="post" enctype="multipart/form-data" >
<b style="color:white;">Background : <img src="../<?php echo $hasil_3['isi'];?>" width="100" alt="">
    <input type="file" name="image" required /></b>
<input type="Submit" class="button" value="Simpan Perubahan" />
</form>
</td>
</tr></table>

<table style="margin:10px auto 10px auto ;">
    <tr>
        <td style="text-align:center;background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
            <form action="aksi_edit_about4.php" method="post" >
            <b style="color:white;">Kata Sambutan :</b>&nbsp;
            <input style="margin-bottom:10px;" type="text" name="id"  value="4" hidden />
            <input style="margin-bottom:10px;" type="text" name="b"  value="dashboard" hidden />
            <br>
            
            <textarea name="isi" id=""><?php echo $hasil_2['isi'];?></textarea>
            <br>
            <center><input type="Submit" class="button" value="Simpan Perubahan" /></center>
            </form>
        </td>
    </tr>
</table>
<center>
    <h4 style="color:white;"><b>Visi & Misi</b></h4>
</center>
<form action="aksi_edit_visimisi.php" method="post" enctype="multipart/form-data" style="text-align:center;background-color:none; border:3px dashed white; border-radius:5px; padding:10px;" >
<table style="margin:0 0 10px 0;">
    <tr>
        <td style="background-color:#e9e9e9; padding:10px;">
            Visi : 
            <textarea name="visi" style="text-align:center;" rows="5"><?php echo $hasil_5['isi'];?></textarea>
        </td>
        <td style="background-color:white; padding:10px;">
            Misi : 
            <textarea name="misi" style="text-align:center;"  id="" rows="5"><?php echo $hasil_6['isi'];?></textarea>
        </td>
    </tr>
</table>
        <input type="Submit" class="button" value="Simpan Perubahan" />
</form>
<center><h4><span>Strategi & Kebijakan</span></h4></center>
<form action="aksi_edit_strategi.php" method="post" style="text-align:center;background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">

<textarea style="width:100%;" class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product"><?php echo $hasil_7['isi'];?></textarea>
<input type="Submit" class="button" value="Simpan Perubahan" />

</form>

<center><h4><span>Link Youtube</span></h4></center>

<form action="aksi_edit_link.php" method="post" style="text-align:center;background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
    <span>Link : </span><input type="text" name="link" style="width:90%;" value="<?php echo $hasil_8['isi'];?>"><br>
    <span>Contoh : https://www.youtube.com/embed/0DvZxSX1OmA?si=AoYcPg4lDVWYBUqL</span><br>
    <input type="Submit" class="button" value="Simpan Perubahan" />
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
