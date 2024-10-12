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
<a href="?p=dashboard"><img class="iuhas" src="../img/back.jpg" /></a>
</td>
        <td style="
        width:100%;
        display:inline-block;
        height:50px;
        text-align:center;
        color:white;
        background-color:grey; 
        border-radius:5px; align-content:center; font-size:20px;">Hubungi Kami
        </td>
    </tr>
</table>

<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}


	include "../connection.php";

    $query15 = mysqli_query($con,"select * from about where id='15'");
    $hasil15 = mysqli_fetch_array($query15);
    
    $query16 = mysqli_query($con,"select * from about where id='16'");
    $hasil16 = mysqli_fetch_array($query16);

?>

<table style="margin:10px auto 10px auto ;">
<tr><td style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_edit_hubungi.php" method="post" >
    <table>
        <tr>
            <td style="color:white; width:auto; font-weight:bold; text-align:left;"><b >Alamat :</b></td>
            <td style=" width:80%;"><input style="margin-bottom:10px; width:90%;" type="text" name="alamat"  required value="<?php echo $hasil15['about'];?>" /></td>
        </tr>
        <tr>
            <td style="color:white; width:auto; font-weight:bold; text-align:left;"><b style="color:white;">Judul Maps :</b></td>
            <td><input value="<?php echo $hasil16['about'];?>" style="margin-bottom:10px; width:90%;" type="text" name="judul"  required /></td>
        </tr>
        <tr>
            <td style="color:white; width:auto; font-weight:bold; text-align:left;"><b style="color:white;">Link Maps :</b></td>
            <td><input value="<?php echo $hasil16['isi'];?>" style="margin-bottom:10px; width:90%;" type="text" name="linkmaps"  required /></td>
        </tr>
        <tr>
            <td style="color:white; width:auto; font-weight:bold; text-align:left;"><b style="color:white;">Link Tampilan Maps :</b></td>
            <td><input value="<?php echo $hasil15['isi'];?>" style="margin-bottom:10px; width:90%;" type="text" name="link"  required /></td>
        </tr>
    </table>
<center><input type="Submit" class="button" value="Simpan Perubahan" /></center>
</form>
</td>
</tr></table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
