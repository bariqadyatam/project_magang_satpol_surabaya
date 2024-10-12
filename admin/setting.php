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

table{
	width: 100%;
}

</style>

<table>
<tr><td>
<a href="?p="><img class="iuhas" src="../img/back.jpg" /></a></td><td style="width:100%; text-align:center; color:white; background-color:grey; border-radius:5px; align-content:center; font-size:20px;">Setting</td>
</tr></table>
                            <a href='logout.php'>
							<div class='mzcbm'>LOG OUT</div>
							</a>
<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Berhasil Diubah !")</script>';
}


	include "../connection.php";


$query_2 = mysqli_query($con,"select * from about where id=2");
$hasil_2 = mysqli_fetch_array($query_2);

$query_3 = mysqli_query($con,"select * from about where id=3");
$hasil_3 = mysqli_fetch_array($query_3);

$query_9 = mysqli_query($con,"select * from about where id='9'");
$hasil_9 = mysqli_fetch_array($query_9);

$query_10 = mysqli_query($con,"select * from about where id='10'");
$hasil_10 = mysqli_fetch_array($query_10);

$query_11 = mysqli_query($con,"select * from about where id='11'");
$hasil_11 = mysqli_fetch_array($query_11);

?>

<table style="margin:10px auto 10px auto ;">
<tr><td style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_edit_sosmed.php" method="post" >
<b style="color:white;">Link <img src="../img/twitter.png" width="30" alt=""> :</b>&nbsp;
<input style="margin-bottom:10px; width:90%;" type="text" name="twitter" value="<?php echo $hasil_9['about'];?>" /><br>
<b style="color:white;">Link <img src="../img/tiktok.png" width="30" alt=""> :</b>&nbsp;
<input style="margin-bottom:10px; width:90%;" value="<?php echo $hasil_9['isi'];?>" type="text" name="tiktok" /><br>
<b style="color:white;">Link <img src="../img/instagram.png" width="30" alt=""> :</b>&nbsp;
<input style="margin-bottom:10px; width:90%;" value="<?php echo $hasil_10['about'];?>" type="text" name="instagram"  required /><br>
<b style="color:white;">Link <img src="../img/facebook.png" width="30" alt=""> :</b>&nbsp;
<input style="margin-bottom:10px; width:90%;" value="<?php echo $hasil_10['isi'];?>" type="text" name="facebook"  required /><br>
<b style="color:white;">Link <img src="../img/yt.png" width="30" alt=""> :</b>&nbsp;
<input style="margin-bottom:10px; width:90%;" value="<?php echo $hasil_11['about'];?>" type="text" name="yt"  required /><br>
<center><input type="Submit" value="Ubah" /></center>
</form>
</td>
</tr></table>

<table style="margin:10px auto 10px auto ;">
<tr><td style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_edit_login.php" method="post" >
<b style="color:white;">Username :</b>&nbsp;
<input style="margin-bottom:10px;" type="text" name="name"  required /><br>
<b style="color:white;">Password :</b>&nbsp;
<input style="margin-bottom:10px;" type="password" name="password"  required /><br>
<center><input type="Submit" value="Ubah" /></center>
</form>
</td>
</tr></table>

<table style="">
<tr><td class="iuhas" style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_edit_icon.php" method="post" enctype="multipart/form-data" >
<b style="color:white;">icon Title  : <img width="30" src="../<?php echo $hasil_2['isi'];?>" alt=""><input type="file" name="image" required /></b><br>
<input type="text" name="id" value="<?php echo $hasil_2['id'];?>" hidden  />
<input type="Submit" value="Ubah" />
</form>
</td>
</tr></table>


<table style="margin:10px auto 10px auto ;">
<tr><td class="iuhas" style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_edit_about3.php" method="post" >
<b style="color:white;">Title Website  :</b>
<input type="text" name="about" value="<?php echo $hasil_2['about'];?>"  required  />
<input type="text" name="id" value="<?php echo $hasil_2['id'];?>" hidden  />
<input type="Submit" value="Ubah" />
</form>
</td>
</tr></table>

<table style="margin:10px auto 100px auto ;">
<tr><td class="iuhas" style="text-align:center; background-color:none; border:3px dashed white; border-radius:5px; padding:10px;">
<form action="aksi_edit_about2.php" method="post" enctype="multipart/form-data" >
<b style="color:white;">Logo Perusahaan  : <input type="file" name="image" required /></b><br>
<input type="text" name="id" value="<?php echo $hasil_3['id'];?>" hidden  />
<input type="Submit" value="Ubah" />
</form>
</td>
</tr></table>

