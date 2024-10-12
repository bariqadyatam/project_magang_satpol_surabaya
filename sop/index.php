<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEY BABIIIIIIIIIIIIIII </title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <style>
html{
    scroll-behavior: smooth;
}
body {
    font-family: Tahoma;
    margin: 0;
    padding: 0;
}
* {box-sizing: border-box}
.mySlides {display: none}
img {vertical-align: middle;}


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
    z-index: 1000;
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
    box-shadow: 0px 0px 24px 0px rgba(0, 0, 0, 0.3);
    border-radius:0 10px 10px 0;
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
    z-index: 1000;
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
    flex
    
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
    display: inline-block;
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

    /* Formatting search box */
    .search-box{
        width: 70%;
        position: relative;
        display: flex;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        padding: 20px 20px 20px 20px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
        text-align:left;
        font-size:15px;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        background: white;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
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

    .hilang{
        display: none;
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
  padding: 8px 12px;
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: left;
  background-color:rgba(0, 0, 0, 0.5);
  border-radius: 0 0 10px 10px;
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

#prev {
    left: 10px;
}

#next {
    right: 10px;
}

.dualima{
    font-size:25px;
}

.duapuluhfont{
    font-size:20px;
}

.logosatpol{
    width: 10%;
    display:inline-block;
}

.judul{
    width: 90%;
}

.tigapuluh{
    width:30%;
}

.duaratus{
    height: 200px;
}

@media (max-width: 768px) {

    body{
        font-size:15px;
    }

    .sect{
        width: 100%;
    }

    .duaratus{
    height: 150px;
}

    .judul{
    width: 100%;
    }

.logosatpol{
        width: 100%;
        }
    .logosatpol img{
    width: 100px !important;
    margin-left: auto ;
    margin-right: auto ;
    position: relative;
    display:block;
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
    width: 98%;
}

.contain img{
    width: 100%;
}

.visi{
    font-size:20px;
}

h4{
    font-size:13px;
}

table{
    width: 100% !important;
}

}

.image-container {
    display: flex;
    margin: 20px;
}

.thumbnail {
    cursor: pointer;
    transition: 0.3s;
}

.thumbnail:hover {
    opacity: 0.7;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    padding-top: 60px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

.close {
    margin-right: auto;
    margin-left: auto;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

tr{
    margin:0 0 10px 0;
    display: flex;
}

th{
    background-color:#cde0ff;
    padding:10px;
    display:inline-block;
}

td{
    display:inline-block;
    text-align:center;
    background-color:#f2f5fb;
    padding:10px;
}
</style>
</head>
<body>
<section id="home">
    </section>
    <nav class="navbar">
            <div class="brand-title" id="navbar1">
                <center>
                    <img src="../img/logo.png" style="">
                </center>
            </div>
            <a style="background:white;" href="javascript:void(0);" class="toggle-button" onclick="toggleNavbar()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navbar-links" id="navbar2">
                <ul>
                    <a href="../#home" class="btn garisbawah" style=" align-content:center !important;" ><li>Beranda</li></a>
                    <li class="dropdown btndua">
                        <a href="#" class="dropbtn btn" style="white-space:nowrap;">Tentang Kami <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square-fill" viewBox="0 0 16 16"><path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6z"/></svg></a>
                        <div class="dropdown-content">
                            <a href="../struktur_organisasi/">Struktur Organisasi</a>
                            <a href="../sejarah/">Sejarah</a>
                            <a href="../tupoksi/">Tupoksi</a>
                        </div>
                        <div class="menumuncul">
                            <ul>
                            <li><a href="../struktur_organisasi/">Struktur Organisasi</a></li><br>
                            <li><a href="../sejarah/">Sejarah</a></li><br>
                            <li><a href="../tupoksi/" class="garisbawah">Tupoksi</a></li>
                            </ul>
                        </div>
                    </li><br>
                    <a href="../artikel/" class="btn garisbawah" style="white-space:nowrap;" ><li>Artikel</li></a>
                    <a href="../sop/" class="btn garisbawah" ><li style=" text-align:center;">SOP</li></a>
                    <a href="../galeri/" class="btn garisbawah" style="white-space:nowrap;" ><li>Galeri Kegiatan</li></a>
                    <a href="#home" class="btn garisbawah" style="white-space:nowrap;" ><li>Hubungi Kami</li></a>
                </ul>
            </div>
    </nav>
    <div class="duaratus" style=" width:100%; margin-top:-20px; right:0; left:0; z-index: 1; align-content:end; text-align:center; color:white; ">

</div>

<div class="sect">
    <div class="contain">
            <center>
                <h2 style="color:#163260;">SOP</h2>
            </center>

    </div>
</div>

<div class="sect">
    <div class="contain" style=" display:block;">
<h4>
    <table style="color:#163260; width:100% !important;" border="0" width="100%">
        <thead>
            <tr>
                <th style="width:5%; border-radius:10px 0 0 10px;">No</th>
                <th style="width:55%;">SOP</th>
                <th style="width:25%;">Tanggal Dibuat</th>
                <th style="width:15%; border-radius:0 10px 10px 0;">Download</th>
            </tr>
        </thead>

<?php
error_reporting(0);
if($_GET["r"]=="d"){
	echo'<script>alert("File tidak ditemukan")</script>';
}
include "../connection.php";
$no=1;
$query = mysqli_query($con,"select * from sop");
while($hasil = mysqli_fetch_array($query)){
    $tr.="
    <tr>
        <td style='width:5%;'>$no.</td>
        <td style='width:55%;'>$hasil[sop]</td>
        <td style='width:25%;'>$hasil[tanggal]</td>
        <td style='width:15%;'><a href='../download.php?file=$hasil[file]' style='color:#163260;'>
        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-download' viewBox='0 0 16 16'>
        <path d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5'/>
        <path d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z'/>
        </svg>
        </a></td>
    </tr>
    ";
    $no++;
}

?>

        <tbody>
            <?php echo $tr;?>
        </tbody>
    </table>
</h4>

    </div>
</div>

<?php
include "../footer2.php";
?>

<script>
function openModal(imageSrc) {
    document.getElementById('myModal').style.display = 'block';
    document.getElementById('modalImage').src = imageSrc;
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}
</script>

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

    <script src="../js/script.js"></script>
</body>
</html>