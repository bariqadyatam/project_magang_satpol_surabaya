<?php
error_reporting(0);
include "connection.php";

$namaq = mysqli_query($con,"select * from about where id='2'");
$nama = mysqli_fetch_array($namaq);

$iconq = mysqli_query($con,"select * from about where id='3'");
$icon = mysqli_fetch_array($iconq);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama['about'];?></title>
    <link rel="shortcut icon" href="<?php echo $icon['about'];?>" type="image/x-icon">

    <style>
html{
    scroll-behavior: smooth;
}
body {
    font-family: Tahoma;
    margin: 0;
    padding: 0;
}


.navbar {
    display: inline-block;
    justify-content: space-between;
    align-items: center;
    position: relative;
    right: 0;
    top:0;
}

.btn{
    color:white;
}

.navbar .dropdown {
    position: relative;
}

.navbar .dropdown .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 600;
    margin-top: 25px;
    width: 150px;
}

.navbar .dropdown .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.navbar .dropdown .dropdown-content a:hover {
    background-color: #f1f1f1;
}

.menumuncul{
    display:none;
}

.brand-title {
    display: inline-block;
    background-color: white;
    border-radius:0 10px 10px 0;
    box-shadow: 0px 0px 24px 0px rgba(0, 0, 0, 0.3);
    width: 20%;
    position: absolute;
    z-index: 900;
    }

.navbar-links {
    width: 70%;
    display: block;
    transition: top 0.5s;
    align-items: center;
    padding: 15px;
    background-color: black;
    z-index: 500;
    position:absolute;
    right: 0;
    border-radius: 10px 0 0 10px ;
}

    #navbar1 img{
        height:60px;
    }

    #navbar1 {
    align-content: center;
    position: fixed;
    top: 20px;
    height: 120px;
}
#navbar2 {
    position: fixed;
    top: 50px;
}


.navbar-links ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.navbar-links .btn {
    width:18%;
    text-align: center;
}

.navbar-links a {
    transition: color 1s ease;
}

.toggle-button {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 24px;
    height: 18px;
    cursor: pointer;
    margin-right: 20px;
}

.daftar{
    padding: 10px;
    border-radius: 5px;
    background-color: white;
    margin: 50px;
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.bar {
    height: 3px;
    width: 100%;
    background-color: black;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.wd-5{
    width: 50%;
    padding: 10px;
    display: inline-block;
    text-align: center;
}

.contain{
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
}

.sect{
    width: 100%;
    align-items: center;
    align-content: center;
    display: block;
}

.fade-up {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s ease-out, transform 1s ease-out;
}
.fade-up.visible {
    opacity: 1;
    transform: translateY(0);
}


.row{
    width: 33.33%;
}

.po{
    padding: 20px 20px 20px 20px;
}

.x{
    width:33.33%;
    padding:20px;
}

.f{
    display:flex;
}

.i{
    padding:20px; width:50%; border-radius:10px; border:none; margin:10px;
}

.p{
    padding:50px;
}

.dua{
    width: 100px;
    height: 60px;
    margin-top:auto;
    margin-bottom:auto;
}

.xf{
    display:block;
}

.tridi{
    right:0; position:relative;
}

    .sembilan{
        width: 90%;
        margin-left:auto;
        margin-right:auto;
    }
    
    #form{
        padding:10px;
        margin-top:10px;
        width: 80%;
        display:block;
        border-radius:5px;
    }

    .ada{
        display:block;
    }


    /* Style the buttons */
.btn {
    text-decoration: none !important;
    color: white;
    font-size: 1em;
    font-weight: bold;
    transition: color 0.5s ease;
    padding: 7px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    background-color: black;
    border:none;
}

.btn{
    margin:0 auto 0 auto;
    text-align: center;
}

.btn:hover{
    color: black;
    background-color: white;
}

.btndua{
    margin:7px auto 0 auto;
    text-align: center;
}

.btndua:hover{
    color: black;
    background-color: black;
}


/* Style the active class, and buttons on mouse-over */
.menyala {
    color: black;
    background-color: white;
}

.visi{
        font-size:25px;
    }

.limapuluh{
    width:50%;
}

.tigapuluh{
    width:30%;
}

.tigapuluh img{
    width:239px !important;
}

.tujuhpuluh{
    width:70%;
}

.delapanpuluh{
    width:80%;
}

.bg{
    background:url('img/home3-2.jpg');
    background-repeat:no-repeat;
    background-position:left center;
}

.tigaratus{
    height:500px;
}

.object {
    padding:0 100px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display:flex;
}

.misi{
    width:50%;
}



/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: left;
  background-color:rgba(0, 0, 0, 0.5);
  border-radius: 0 0 10px 10px;
}

.text p{
    margin-left:10px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.red{
    cursor:pointer;
}

.red:hover{
    color:red;
}

.yello{
    cursor:pointer;
}

.yello:hover{
    color:yellow;
    text-decoration:underline;
}

.slideshowcontainer {
    position: relative;
    width: 100%;
}

.slide {
    display: none;
    text-align: center;
}

.slides {
    display: none;
    text-align: center;
}


.before, .after {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    background-color: rgba(0,0,0,0.5);
}

.after {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.before:hover, .after:hover {
    background-color: rgba(0,0,0,0.8);
}

.slider {
    position: relative;
    width: 100%;
    overflow: hidden;
    border: 2px solid #ddd;
    border-radius: 10px;
}

.ganti {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.gantib {
    display: flex;
    transition: transform 0.5s ease-in-out;
}
.isi {
    min-width: 100%;
    transition: opacity 1s ease-in-out;
}

.isib {
    min-width: 100%;
    transition: opacity 1s ease-in-out;
}

.nav-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 100;
}

.dualima{
    font-size:25px;
}

.duapuluhfont{
    font-size:20px;
}

.hilang{
        display: none;
    }

    .a{
        text-decoration:none;
        color:black;
    }

    .a:hover{
        color:#167ac6;
    }

    .as{
        text-decoration:none;
        color:white;
    }

    .as:hover{
        color:yellow;
    }
    .buatsendiri {
        display:none;
    }
	
    .buatsendirib {
        display:block;
    width: 100%;
    position: relative;
    overflow: hidden;
    margin-bottom:20px;
    border: 2px solid #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

.sendirib {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.irib {
    min-width: 100%;
    background-size: cover;
    background-position: center;
}

.burronb {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.3);
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 18px;
    border-radius: 5px;
}

.burronb.prevz {
    left: 10px;
}

.burronb.nextz {
    right: 10px;
}

@media (max-width: 768px) {
	
    .buatsendirib {
        display:none;
        }
    .buatsendiri {
        display:block;
    width: 100%;
    position: relative;
    overflow: hidden;
    margin-bottom:20px;
    border: 2px solid #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

.sendiri {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.iri {
    min-width: 100%;
    background-size: cover;
    background-position: center;
}

.burron {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.3);
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 18px;
    border-radius: 10px;
}

.burron.prevz {
    left: 10px;
}

.burron.nextz {
    right: 10px;
}

.burron:hover {
    background-color: rgba(255, 255, 255, 1);
}
    .sliderb {
    position: relative;
    width: 100%;
    overflow: hidden;
    border: 2px solid #ddd;
    border-radius: 10px;
}
    .menumuncul{
        display:block;
        position:relative;
        width: 100%;
        white-space:nowrap;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        font-weight: bold;
        flex-direction: column !important;
    }

    .garisbawah{
    border-bottom:1px solid grey;
    width: 100% !important;
    }
    .menumuncul ul{
        width: 100% !important;
        display:block ;
    }

    .menumuncul ul li{
        width: 100% !important;
        align-content:center !important;
        display:block ;
        height:30%;
    }

    .menumuncul ul li a{
        display:block ;
        text-decoration:none;
        align-content: center;
        padding-bottom:3px;
    }

    .menumuncul ul li:hover{
        color: red;
    }

    .btndua{
        background-color:white !important;
    }

    .dropdown{
        margin-left: 50%;
        margin-right: 50%;
        width: 100%;
    }

    .dropdown-content{
        display:none !important;
    }

    body{
        font-size:15px;
    }
    
.duapuluhfont{
    font-size:15px;
    }

    .dualima{
    font-size:20px;
    }

.misi{
width:80%;
}

.object{
    padding:0;
}

.tigaratus{
height:300px;
}

.bg{
background-size:cover;
}

.delapanpuluh{
width:100%;
}

.limapuluh{
width:100%;
}

.tujuhpuluh{
width:100%;
}

.tigapuluh{
width:100%;
}

.btn{
    padding: 0;
    background-color:transparent;
    color:black;
}
.brand-title{
    z-index: 10;
    width: 100%;
    top:0 !important;
    height:80px !important;
    align-content:center !important;
    border-radius:0 0 0 0;
}

.brand-title img{
    left:20px ;
    position: absolute;
    top:10px;
    height: 60px !important;
}
.navbar{
    display: flex;
    position: fixed;
    width: 100%;
    background-color: white;
    z-index: 200;
    top:0 !important;
}

.ada{
    display:none;
}

.hilang{
    display: block;
}

.sembilan{
    width: 100%;
}

.search-box{
    width: 100%;
}

.tridi{
right:auto;
position:relative;
margin-top:auto;
margin-bottom:auto;
width:90%;
}

.dua{
height: 60px;
margin-top:auto;
margin-bottom:auto;
}

.xf{
display:flex;
}

.p{
padding:10px;
}

.i{
    width: 70%;
}
.f{
display:block;
}
.x{
    width: 90%;
    margin-left:auto;
    margin-right:auto;
}

.lima{
    height: 70px;
    background-color:transparent;
}

.navbar-links {
    display: none;
    width: 100%;
    align-items: center;
    background-color: rgb(255, 255, 255) !important;
    position: absolute;
    top: 70px !important;
    left: 0;
}

.navbar-links ul {
    flex-direction: column;
    width: 100%;
}

.navbar-links ul li {
    text-align: center;
    margin: 1px 0;
    padding-bottom: 1px;
    padding-top: 1px;
    width: 100% !important;
    display: block !important;
    right: 0;
    left: 0;
    position: relative;
}

.navbar-links ul li a{
    width: 100% ;
    color: black;
    position: absolute;
    left: 0;
    right: 0;
}

.navbar-links a:hover{
    background-color: transparent;
    color: red;
}

.toggle-button {
    position: absolute;
    display: flex;
    top:30px;
    right:20px;
    z-index: 200;
}

.navbar-links.active {
    display: flex;
}

.toggle-button.active .bar:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.toggle-button.active .bar:nth-child(2) {
    opacity: 0;
}

.toggle-button.active .bar:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

#navbar{
    top:70px !important;
}

.wd-5{
    width: 90%;
    display: block;
    margin-left:auto;
    margin-right:auto;
}

.contain{
    display: block;
}

.visi{
    font-size:20px;
}

}

.biru{
    color:#008edf;
    text-decoration:none;
}

.biru:hover{
    color:blue;
}
</style>
</head>
<body>
    
<?php

$backgroundq = mysqli_query($con,"select * from about where id='3'");
$background = mysqli_fetch_array($backgroundq);

$logoq = mysqli_query($con,"select * from about where id='3'");
$logo = mysqli_fetch_array($logoq);

$sambutanq = mysqli_query($con,"select * from about where id='4'");
$sambutan = mysqli_fetch_array($sambutanq);

?>

<section id="home">
    </section>
    <nav class="navbar">
            <div class="brand-title" id="navbar1">
                <center>
                    <img src="img/logo.png" style="">
                </center>
            </div>
            <a style="background:white;" href="javascript:void(0);" class="toggle-button" onclick="toggleNavbar()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navbar-links" id="navbar2">
                <ul>
                    <a href="#home" class="btn garisbawah" style=" align-content:center !important;" ><li>Beranda</li></a>
                    <li class="dropdown btndua">
                        <a href="#" class="dropbtn btn" style="white-space:nowrap;">Tentang Kami <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16"><path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6z"/></svg></a>
                        <div class="dropdown-content">
                            <a href="struktur_organisasi/">Struktur Organisasi</a>
                            <a href="sejarah/">Sejarah</a>
                            <a href="tupoksi/">Tupoksi</a>
                        </div>
                        <div class="menumuncul">
                            <ul>
                            <li><a href="struktur_organisasi/">Struktur Organisasi</li></a><br>
                            <li><a href="sejarah/">Sejarah</a></li><br>
                            <li><a href="tupoksi/" class="garisbawah">Tupoksi</a></li>
                            </ul>
                        </div>
                    </li><br>
                    <a href="artikel/" class="btn garisbawah" style="white-space:nowrap;" ><li>Artikel</li></a>
                    <a href="sop/" class="btn garisbawah" ><li style=" text-align:center;">SOP</li></a>
                    <a href="galeri/" class="btn garisbawah" style="white-space:nowrap;" ><li>Galeri Kegiatan</li></a>
                    <a href="hubungi_kami/" class="btn garisbawah" style="white-space:nowrap;" ><li>Hubungi Kami</li></a>
                </ul>
            </div>
    </nav>

    <div style="background:url('<?php echo $background['isi'];?>'); background-size:cover; background-position:center; display:block; height:600px; width:100%; margin-top:-20px; right:0; left:0; z-index: 1; align-content:end; text-align:center; color:white; ">

    <div class="contain duapuluhfont" style="font-weight:bold;margin-bottom:50px;">
        <p><?php echo $sambutan['isi'];?></p>
    </div>
</div>

<section id="layanan" style="" >
<div class="sect" style="height:250px;">
<div class="lima"></div>

<div style="width:100%; align-content:center; display:block;">
    <div class="sect visi" style="background:#d1d1d1; height:60px; position:absolute; display:inline-block; z-index:10; margin-top:30px;">
    </div>
<center>
    <div class="misi dualima" style="background:#127d57; height:120px; border-radius:10px; position:relative; display:inline-block; margin-right:auto; margin-left:auto; color:white; align-content:center; font-weight:bold; letter-spacing:2px; font-family:Arial; z-index:20;">
        VISI & MISI <br> SATUAN POLISI PAMONG PRAJA SURABAYA
    </div>
</center>
    
</div>

</div>

<?php

$visiq = mysqli_query($con,"select * from about where id='5'");
$visi = mysqli_fetch_array($visiq);

$misiq = mysqli_query($con,"select * from about where id='6'");
$misi = mysqli_fetch_array($misiq);

?>

<div class="sect" style=" margin-bottom:100px;">
    <div class="contain">
        <div class="limapuluh dualima" style="font-weight:bold; align-content:top;">
        <center>
            <p>Visi</p>
            <p style="width:80%; margin-top:50px; position:relative;"><?php echo $visi['isi'];?></p>
        </center>
        </div>
        <div class="limapuluh dualima" style="font-weight:bold; ">
        <center>
            <p>Misi</p><p class="delapanpuluh"><?php echo $misi['isi'];?></p>
        </center>
        </div>
    </div>
</div>
</section>

<?php

$strategiq = mysqli_query($con,"select * from about where id='7'");
$strategi = mysqli_fetch_array($strategiq);

?>


<div class="sect bg"  style=" margin-bottom:100px;" >
<div class="contain">
        <div class="ada" style="width:20%; font-size:25px; font-weight:bold; align-content:top;">
        </div>
        <div class="delapanpuluh dualima" style=" font-weight:bold; padding:20px; height:100%;">

            <center><p>Strategi & Kebijakan</p></center>
            <?php echo $strategi['isi'];?>
        </div>
    </div>

</div>

<?php

$linkq = mysqli_query($con,"select * from about where id='8'");
$link = mysqli_fetch_array($linkq);

?>

<div class="sect" style=" margin-bottom:100px;">
    <div class="contain" style="padding:20px; display:block;">

    <iframe style="border-radius:10px;" width="100%" class="tigaratus" src="<?php echo $link['isi'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </div>
</div>

<?php

$slidq = mysqli_query($con,"select * from artikel where kategori='Berita Terbaru' order by id desc limit 3");
while($slidh = mysqli_fetch_array($slidq)){
    $out1 = strlen($slidh['judul']) > 50 ? substr($slidh['judul'],0,50)."..." : $slidh['judul'];
    $slid.="
<div class='mySlides fade'>
  <div class='numbertext'></div>
  <img src='$slidh[gambar]' style='width:100%; border-radius:10px;'>
  <div class='text'>
        <p><b>Berita Terbaru : </b> $slidh[tgl]</p>
        <p><a class='as' href='artikel/$slidh[url]'>$out1</a></p>
  </div>
</div>    
    ";
}

?>

<div class="sect" style=" margin-bottom:100px;">
    <div class="contain">
        <div class="tujuhpuluh" style="" >
    
<div class="slideshow-container">

<?php echo $slid;?>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
        </div>

<?php

$daftarq = mysqli_query($con,"select * from artikel where kategori='Berita Terbaru' order by id desc");
while($daftarh = mysqli_fetch_array($daftarq)){
    $out2 = strlen($daftarh['judul']) > 50 ? substr($daftarh['judul'],0,50)."..." : $daftarh['judul'];
    $daftar.="
                <div style='border-bottom:1px solid #dbdbdb; margin:20px;'>
                <a class='a' href='artikel/$daftarh[url]'>
                <p>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-calendar3' viewBox='0 0 16 16'>
  <path d='M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z'/>
  <path d='M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2'/>
</svg>
                $daftarh[tgl]</p>
                <p><b>$out2</b></p></a>
                </div>
    ";
}

?>
        <div class="tigapuluh" style=" " >
        <center><h1 style="" >BERITA TERBARU</h1></center>
            <div style="border:1px solid #dbdbdb; margin:20px; overflow:auto; height:490px;" >

            <?php echo $daftar;?>

            </div>
        </div>
    </div>
</div>

<?php

$tigaq = mysqli_query($con,"select * from artikel where kategori='Berita Terbaru' order by id desc limit 3");
while($tigah = mysqli_fetch_array($tigaq)){
    $out3 = strlen($tigah['judul']) > 50 ? substr($tigah['judul'],0,50)."..." : $tigah['judul'];
    $tiga.="
        <div class='x' style=''>
            <div style='background-image:url($tigah[gambar]); background-size:cover; background-position:center; width:100%; height:220px; border-radius:10px 10px 0 0;'>
            </div>
            <div style='background:#e6e6e6; min-height:100px; padding:10px; border-radius:0 0 10px 10px;'>
                <h3>$out3</h3>
                <a class='biru' href='artikel/$tigah[url]'>Baca Selengkapnya</a>
            </div>
        </div>
    ";
}

?>

<div class="sect" style=" margin-bottom:100px;">
    <div class="contain">

    <?php echo $tiga;?>

    </div>
</div>

<div class="sect" style="">
        <div class="contain">
            <center style="width:100%;">
                <h1>Ingin Mengenal Satpol PP lebih dekat ?</h1>
                <p style="font-size:30px;">Berikut adalah nama-nama Tim Satpol PP Kota Surabaya</p>
            </center>
        </div>
<?php

$q_1 = mysqli_query($con,"select * from tim where id='1'");
$h_1 = mysqli_fetch_array($q_1);

$q_2 = mysqli_query($con,"select * from tim where id='2'");
$h_2 = mysqli_fetch_array($q_2);

$q_3 = mysqli_query($con,"select * from tim where id='3'");
$h_3 = mysqli_fetch_array($q_3);

$q_4 = mysqli_query($con,"select * from tim where id='4'");
$h_4 = mysqli_fetch_array($q_4);

$q_5 = mysqli_query($con,"select * from tim where id='5'");
$h_5 = mysqli_fetch_array($q_5);

$q_6 = mysqli_query($con,"select * from tim where id='6'");
$h_6 = mysqli_fetch_array($q_6);

$q_7 = mysqli_query($con,"select * from tim where id='7'");
$h_7 = mysqli_fetch_array($q_7);

$q_8 = mysqli_query($con,"select * from tim where id='8'");
$h_8 = mysqli_fetch_array($q_8);

?>        

<div class="sect">
    <div class="contain">
    <div class="buatsendirib">
        <div class="sendirib">

            <div class="irib" style=" display:flex;">
                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_1['foto'];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_1["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_1["isi"];?></div>
                    </div>
                </div>

                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_2["foto"];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_2["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_2["isi"];?></div>
                    </div>
                </div>
            </div>

            <div class="irib" style=" display:flex;">
                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_3['foto'];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_3["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_3["isi"];?></div>
                    </div>
                </div>

                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_4["foto"];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_4["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_4["isi"];?></div>
                    </div>
                </div>
            </div>

            <div class="irib" style=" display:flex;">
                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_5['foto'];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_5["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_5["isi"];?></div>
                    </div>
                </div>

                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_6["foto"];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_6["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_6["isi"];?></div>
                    </div>
                </div>
            </div>

            <div class="irib" style=" display:flex;">
                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_7['foto'];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_7["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_7["isi"];?></div>
                    </div>
                </div>

                <div style="width:50%; padding:30px; position:relative;">
                    <div style="background:#e6e6e6; border-radius:10px;">
                        <div style="background-image: url('<?php echo $h_8["foto"];?>'); border-radius:10px 10px 0 0; background-size:cover; width:100%; background-position:center; height:300px;"></div>
                        <div style="padding:10px; background:#127d57; color:white; font-weight:bold;"><?php echo $h_8["nama"];?></div>
                        <div style="padding:10px; min-height:100px;"><?php echo $h_8["isi"];?></div>
                    </div>
                </div>
            </div>
            
        </div>
        <button class="prevz burronb" onclick="showPrevirib()">&#10094;</button>
        <button class="nextz burronb" onclick="showNextirib()">&#10095;</button>
    </div>
    </div>
</div>


<?php
$sliderq = mysqli_query($con,"select * from tim");
while($sliderh = mysqli_fetch_array($sliderq)){
$slider.="
            <div class='iri' style=' background:#e6e6e6;'>
                <div style='background-image: url($sliderh[foto]); background-size:cover; width:100%; background-position:center; height:300px;'></div>
                <div style='padding:10px; background:#127d57; color:white; font-weight:bold;'>$sliderh[nama]</div>
                <div style='padding:10px;'>$sliderh[isi]</div>
            </div>
";
}

?> 
<div class="sect">
    <div class="contain">
    <div class="buatsendiri">
        <div class="sendiri">

            <?php echo $slider;?>
            
        </div>
        <button class="prevz burron" onclick="showPreviri()">&#10094;</button>
        <button class="nextz burron" onclick="showNextiri()">&#10095;</button>
    </div>
    </div>
</div>

<?php
include "footer.php";
?>

<script>

    // Optionally, add some JavaScript to enhance the dropdown functionality, like closing the dropdown when clicking outside
    document.addEventListener('click', function(event) {
        var dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach(function(dropdown) {
            if (!dropdown.parentElement.contains(event.target)) {
                dropdown.style.display = 'none';
            }
        });
    });
    
    document.querySelectorAll('.dropbtn').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var dropdown = this.nextElementSibling;
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });
    });

window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar1").style.top = "0";
        document.getElementById("navbar1").style.height = "60px";
        document.querySelector("#navbar1 img").style.height = "30px";
        document.getElementById("navbar2").style.top = "0";
      } else {
        document.getElementById("navbar1").style.top = "20px";
        document.getElementById("navbar1").style.height = "120px";
        document.querySelector("#navbar1 img").style.height = "60px";
        document.getElementById("navbar2").style.top = "50px";
      }
    }
    
    
</script>

<script>
    {
let currentIndex = 0;
const sendiri = document.querySelector('.sendiri');
const totalsendiri = document.querySelectorAll('.iri').length;

function showNextiri() {
    currentIndex = (currentIndex + 1) % totalsendiri;
    updateiriPosition();
}

function showPreviri() {
    currentIndex = (currentIndex - 1 + totalsendiri) % totalsendiri;
    updateiriPosition();
}

function updateiriPosition() {
    const offset = -currentIndex * 100; // 100% for each iri
    sendiri.style.transform = `translateX(${offset}%)`;
}

// Automatically show the next iri every 3 seconds
setInterval(showNextiri, 5000);
    }{
        let currentIndex = 0;
const sendiri = document.querySelector('.sendirib');
const totalsendiri = document.querySelectorAll('.irib').length;

function showNextirib() {
    currentIndex = (currentIndex + 1) % totalsendiri;
    updateiriPosition();
}

function showPrevirib() {
    currentIndex = (currentIndex - 1 + totalsendiri) % totalsendiri;
    updateiriPosition();
}

function updateiriPosition() {
    const offset = -currentIndex * 100; // 100% for each iri
    sendiri.style.transform = `translateX(${offset}%)`;
}

// Automatically show the next iri every 3 seconds
setInterval(showNextiri, 5000);
    }
</script>
    
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

    <script src="js/script.js"></script>
</body>
</html>