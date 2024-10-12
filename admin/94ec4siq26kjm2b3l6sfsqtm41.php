<?php
//error_reporting(0);

	include "../connection.php";

$nama = mysqli_query($con,"select * from about where id='2'");
$nama = mysqli_fetch_array($nama);

$logo = mysqli_query($con,"select * from about where id='3'");
$logo = mysqli_fetch_array($logo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin <?php echo $nama['about'];?></title>
	
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/botstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css"/>
    <link rel="stylesheet" href="../css/toplate-style.css">
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="icon" type="image/png" href="../<?php echo $logo['about'];?>">  
    
    <script>
        function replaceSpaces() {
            // Get the input value
            var inputText = document.getElementById('inputText').value;
            
            // Replace spaces with underscores
            var replacedText = inputText.replace(/ /g, '_');
            
            // Set the result text
            document.getElementById('resultText').value = replacedText;
        }

        $(function() {
        $('#resultText').on('keypress', function(e) {
            if (e.which == 32){
            console.log('Space Detected');
            return false;
            }
        });
    });
    </script>

<style>
body{
background-color:#252a3d;
font-size:15px !important;
}
a:hover{
	text-decoration:none;
}
.cke_toolgroup #cke_26{
	display:none !important;
    border: 0;
    float: left;
    margin: 1px 2px 6px 0;
    padding-right: 3px;
}
.cke_toolgroup #cke_31{
display:none !important;
}
textarea{
width:100% !important;
}
</style>	
</head>

    <body>

<?php
session_start();
error_reporting(0);
if(!isset($_SESSION["admin"])){

 header("location:index.php");

}
?>
        <div class="tm-main-content" id="top" style="position:fixed; top:0; right:0; left:0; box-shadow: 0px 0px 7px 0px rgba(214, 214, 214, 1); z-index:1000;">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light" id="jaldkja">

                            <button style="margin-right:10px;" type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
						
                            <a class="navbar-brand mr-auto" href="?p=" style="display:flex;" >
                                <img style="height:30px;" src="../<?php echo $logo['about'];?>" alt="Site logo" >
                            </a>
							
                            <div id="mainNav" class="collapser navbar-collapser tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=dashboard" style="font-size:13px;">Dashboard</a>
                                  </li>
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=about" style="font-size:13px;">Tentang Kami</a>
                                  </li>
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=artikel&kategori=semua" style="font-size:13px;">Artikel</a>
                                  </li>
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=sop" style="font-size:13px;">SOP</a>
                                  </li>
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=galeri" style="font-size:13px;">Galeri Kegiatan</a>
                                  </li>
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=hubungi" style="font-size:13px;">Hubungi Kami</a>
                                  </li>
                                  <li class="nav-item" style="border-right:0;">
                                    <a class="nav-link" href="?p=setting" style="font-size:13px;">Setting</a>
                                  </li>
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>
		</div>
        <div style=" width:90%; margin-left:auto; margin-right:auto; margin-top:100px; margin-bottom:100px;">

<?php
if($_GET["iu"]=="d"){
	echo'<script>alert("Changed Successfully")</script>';
}

switch($_GET["p"]){

	case "":
	include "dashboard.php";
	break;

	case "dashboard":
	include "dashboard.php";
	break;
	
	case "galeri":
	include "galeri.php";
	break;
	
	case "sejarah":
	include "sejarah.php";
	break;
	
	case "hubungi":
	include "hubungi.php";
	break;
	
	case "about":
	include "about.php";
	break;
	
	case "struktur":
	include "struktur.php";
	break;
	
	case "tupoksi":
	include "tupoksi.php";
	break;

	case "setting":
	include "setting.php";
	break;

	case "sop":
	include "sop.php";
	break;

	case "artikel":
	include "artikel.php";
	break;

	case "tambahartikel":
	include "tambah_artikel.php";
	break;

	case "ubahartikel":
	include "ubah_artikel.php";
	break;

	case "ubahtim":
	include "ubah_tim.php";
	break;

	case "ubahsop":
	include "ubah_sop.php";
	break;

}
?>

</div>
            <footer class="tm-bg-dark-blue" style="text-align:center; position:fixed; bottom:0; rigth:0; left:0; width:100%; height:30px !important;">
                        <p style="color:white;">
                        Copyright &copy; <span class="tm-current-year">2024</span></p>        
            </footer>

	<!-- load JS files -->
        <script src="../js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="../js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="../js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="../js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="../js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="../slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
        <script>

function checkDelete(){
	return confirm('Anda Yakin ingin Menghapus ?');
}

		function setCarousel() {
                
                if ($(".tm-article-carousel").hasClass("slick-initialized")) {
                    $(".tm-article-carousel").slick("destroy");
                } 

                if($(window).width() < 438){
                    // Slick carousel
                    $(".tm-article-carousel").slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                }
                else {
                 $(".tm-article-carousel").slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });   
                }
            }

            function setPageNav(){
                if($(window).width() > 991) {
                    $("#tm-top-bar").singlePageNav({
                        currentClass:"active",
                        offset: 79
                    });   
                }
                else {
                    $("#tm-top-bar").singlePageNav({
                        currentClass:"active",
                        offset: 65
                    });   
                }
            }

            function togglePlayPause() {
                vid = $(".tmVideo").get(0);

                if(vid.paused) {
                    vid.play();
                    $(".tm-btn-play").hide();
                    $(".tm-btn-pause").show();
                }
                else {
                    vid.pause();
                    $(".tm-btn-play").show();
                    $(".tm-btn-pause").hide();   
                }  
            }
       
            $(document).ready(function(){

                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        //remove the background property so it comes transparent again (defined in your css)
                       $(".tm-top-bar").removeClass("active");
                    }
                });      

                // Google Map
                loadGoogleMap();  

                // Date Picker
                const pickerCheckIn = datepicker("#inputCheckIn");
                const pickerCheckOut = datepicker("#inputCheckOut");
                
                // Slick carousel
                setCarousel();
                setPageNav();

                $(window).resize(function() {
                  setCarousel();
                  setPageNav();
                });

                // Close navbar after clicked
                $(".nav-link").click(function(){
                    $("#mainNav").removeClass("show");
                });

                // Control video
                $(".tm-btn-play").click(function() {
                    togglePlayPause();                                      
                });

                $(".tm-btn-pause").click(function() {
                    togglePlayPause();                                      
                });

                // Update the current year in copyright
                $(".tm-current-year").text(new Date().getFullYear());                           
            });
			

        </script>             

</body>
</html>