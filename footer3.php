<?php

$sosmeda = mysqli_query($con,"select * from about where id='9'");
$sosmed_1 = mysqli_fetch_array($sosmeda);

$sosmedb = mysqli_query($con,"select * from about where id='10'");
$sosmed_2 = mysqli_fetch_array($sosmedb);

$sosmedc = mysqli_query($con,"select * from about where id='11'");
$sosmed_3 = mysqli_fetch_array($sosmedc);

?>
<style>
    
.tigapuluh img{
    width:239px !important;
}
</style>
<div class="sect" style="min-height:300px; background:#127d57;">
        <div class="contain" style=" margin-bottom:50px; margin-top:50px;">

            <div  class="tigapuluh">
                <center>
                    <img src="../../img/logo.png" width="239" alt="">
                </center>
            </div>
            <div  class="tujuhpuluh duapuluhfont">
                <div style="width:100%; height:100%; align-content:center; color:white;">
                    <center>
                    Satuan Polisi Pamong Praja Surabaya <br>
                    <div style="display:flex; width:250px;">
                        <a href="<?php echo $sosmed_1["about"];?>"><img src="../../img/twitter.png" width="50" alt=""></a>
                        <a href="<?php echo $sosmed_1["isi"];?>"><img src="../../img/tiktok.png" alt="" width="50"></a>
                        <a href="<?php echo $sosmed_2["about"];?>"><img src="../../img/instagram.png" alt="" width="50"></a>
                        <a href="<?php echo $sosmed_2["isi"];?>"><img src="../../img/facebook.png" alt="" width="50"></a>
                        <a href="<?php echo $sosmed_3["about"];?>"><img src="../../img/yt.png" alt="" width="50"></a>
                    </div>
                    Jl. Jaksa Agung Suprapto No.4, Ketabang, Kec. Genteng, Surabaya, Jawa Timur 60272 <br>
                    &copy; 2024 Satuan Polisi Pamong Praja Kota Surabaya
                </center>
                    </div>
            </div>

        </div>
</div>