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

td{
    padding:10px;
}

th{
    padding:10px;
}

@media (max-width: 900px){
    td{
        padding:5px;
    }
    th{
        padding:5px;
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
        border-radius:5px; align-content:center; font-size:20px;">Tentang Kami
        </td>
    </tr>
</table>

<?php
if($_GET["r"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}


	include "../connection.php";

    $no=1;
    $query = mysqli_query($con,"SELECT * from tim");
	while($hasil = mysqli_fetch_array($query)){
        $tr.="
        <tr>
            <td>$no</td>
            <td><img src='../$hasil[foto]' width='100' alt='Gagal' /></td>
            <td>$hasil[nama]</td>
            <td><a href='?p=ubahtim&i=$hasil[id]' class='edit'>Ubah</a></td>
        </tr>
        ";
        $no++;
    }
?>
<center>
    <a href="?p=struktur" class="button">Struktur Organisasi</a>
    <a href="?p=sejarah" class="button">Sejarah</a>
    <a href="?p=tupoksi" class="button">Tupoksi</a>
    </center>

    <center><h4><span>Tim Satpol PP</span></h4></center>

    <table border="1" style="background:white; width:100%;">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th></th>
        </tr>
        <?php echo $tr;?>
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
